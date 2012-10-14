<?php
/**
 * Currently only supports Google Spreadsheets
 * @author jon
 */
class Google_Spreadsheet {

    /**
     *
     * @var Zend_Gdata_Spreadsheets
     */
    protected $spreadsheetService;

    protected $spreadsheetId;

    protected $worksheet;
    
    public function __construct($arrData)
    {
    
	    require_once 'Zend/Loader.php';
		Zend_Loader::loadClass('Zend_Http_Client');
		Zend_Loader::loadClass('Zend_Gdata');
		Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
		Zend_Loader::loadClass('Zend_Gdata_Spreadsheets');
		$client = Zend_Gdata_ClientLogin::getHttpClient($arrData['user'], $arrData['pass'], Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME);
		$this->spreadsheetService = new Zend_Gdata_Spreadsheets($client);
		$this->spreadsheetId = $arrData['spreadsheetId'];
		$this->worksheet = $arrData['worksheet'];

    }
    public function getRows()
    {
	$query = new Zend_Gdata_Spreadsheets_DocumentQuery();
	$query->setSpreadsheetKey($this->spreadsheetId);
	$feed = $this->spreadsheetService->getWorksheetFeed($query);
	return $feed->entries[0]->getContentsAsRows();
    }

    public function getColumns()
    {
	$query = new Zend_Gdata_Spreadsheets_CellQuery();
	$query->setSpreadsheetKey($this->spreadsheetId);
	$feed = $currentWorksheet = $this->spreadsheetService->getCellFeed($query);
	$columns = array();
	$columnCount = intval($feed->getColumnCount()->getText());
	for($i = 0; $i < $columnCount; $i++)
	{
	    if ($feed->entries[$i])
	       $columns[$i] = $feed->entries[$i]->getCell()->getText();
	}
	 

	return $columns;
    }
    public function insertRow($payload)
    {
	return $this->spreadsheetService->insertRow($payload, $this->spreadsheetId);
    }
    public function getListFeed()
    {
        $query = new Zend_Gdata_Spreadsheets_ListQuery();
        $query->setSpreadsheetKey($this->spreadsheetId);
        $query->setWorksheetId($this->worksheet);
        return $this->spreadsheetService->getListFeed($query);
    }
    public function getListEntry($string='')
    {
        $query = new Zend_Gdata_Spreadsheets_ListQuery();
        $query->setSpreadsheetKey($this->spreadsheetId);
        $query->setWorksheetId($this->worksheet);
        $query->setSpreadsheetQuery($string);
        return $this->spreadsheetService->getListEntry($query);
        
        
    }
    public function getEntry($index)
    {
        $listFeed=$this->getListFeed();
        return $rowData = $listFeed->entries[$index]->getCustom();
        
    }
    public function updateRow($entry,$newRowData)
    {
        return $this->spreadsheetService->updateRow($entry, $newRowData);
    }
    public function deleteRow($entry)
    {
        return $this->spreadsheetService->deleteRow($entry);
    }

}
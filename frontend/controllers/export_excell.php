<?php
/**
 * @date			April 11, 2011
 *
 */
require_once(APPPATH.'libraries/front_controller.php');
class Export_Excell extends CI_Controller
{
   	
	public function __construct ()
    {
    	parent::__construct();
    	$this->load->library('PHPExcel');
    }
    public function index(){
    	$this->load->library('PHPExcel');
		error_reporting(E_ALL);
		date_default_timezone_set('Europe/London');
		// Create new PHPExcel object
		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();
		// Set properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
									 ->setLastModifiedBy("Maarten Balliauw")
									 ->setTitle("Office 2007 XLSX Test Document")
									 ->setSubject("Office 2007 XLSX Test Document")
									 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
									 ->setKeywords("office 2007 openxml php")
									 ->setCategory("Test result file");

		
		// Add some data
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A1', 'Tên')
		            ->setCellValue('B1', 'Email')
		            ->setCellValue('C1', 'Tuổi')
		            ->setCellValue('D2', 'Lương');
		// Miscellaneous glyphs, UTF-8
		$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A2', 'Phan Trung Kiên')
		            ->setCellValue('B2', 'phantrungkienvt@gmail.com')
		            ->setCellValue('C2', '29')
		            ->setCellValue('D2', '7 triệu rưỡi');
		// Rename sheet
		$objPHPExcel->getActiveSheet()->setTitle('Simple');
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		// Add rich text to a cell
		$objRichText = new PHPExcel_RichText();
		$objRichText->createText('This invoice is ');
		$objPayable = $objRichText->createTextRun('payable within thirty days after the end of the month');
		$objPayable->getFont()->setBold(true);
		$objPayable->getFont()->setItalic(true);
		$objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );
		$objRichText->createText(', unless specified otherwise on the invoice.');
		$objPHPExcel->getActiveSheet()->getCell('A18')->setValue($objRichText);
		// add drawing object
		$objDrawing = new PHPExcel_Worksheet_Drawing();
		$objDrawing->setName('Paid');
		$objDrawing->setDescription('Paid');
		$objDrawing->setPath(PATH_ROOT .'/data/files/paid.png');
		$objDrawing->setCoordinates('B15');
		$objDrawing->setOffsetX(110);
		$objDrawing->setRotation(25);
		$objDrawing->getShadow()->setVisible(true);
		$objDrawing->getShadow()->setDirection(45);
		$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
//		$objPHPExcel->getActiveSheet()->getCell('A18')->setValue($objRichText);
		// Redirect output to a client’s web browser (Excel5)
		$versionParam = 'Excel2007';    //Excel5
    	$name = "export";
        if ($versionParam == 'Excel5') {
            header("Content-type: application/vnd.ms-excel; charset=utf-8");
            $name .= '.xls';
        } else {
            header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=utf-8");
            $name .= '.xlsx';
        }
		header('Content-Disposition: attachment;filename=' . $name .'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $versionParam);
		$objWriter->save('php://output');
	}
    
}
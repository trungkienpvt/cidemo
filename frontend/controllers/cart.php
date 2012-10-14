<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/front_controller.php');
class Cart extends Front_Controller {
	public function form_validates()	
	{
		$config = array(
               array(
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => 'required'
                  )
            );
		$this->form_validation->set_rules($config); 
		if ($this->form_validation->run() == FALSE)
			return false;
		else
			return true;
		
	}
	public function index()
	{
		$this->load->library("StringUtility");
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->model('Model_Product');
		$this->load->library("NL_Checkout");
		//get product data from session
		$limitPerPage=$this->config->item('limit_of_page');
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		
		$data = array();
		$data['cart'] = new CI_Cart();
		$data['model_product'] = new Model_Product();
//		$data['cart']->destroy();
		$this->load->library('mtemplate',array('language' =>$language_abbr,"lang" =>$langCurrent));
		$this->breadcrumb->append_crumb('Home', $this->mtemplate->baseUrl);
		$this->breadcrumb->append_crumb('Catalog', $this->mtemplate->baseUrl . "product/catalog/");
		$this->breadcrumb->append_crumb('Cart', $this->mtemplate->baseUrl . 'cart');
		$breadCrumb = $this->breadcrumb->output();
		$data['imageUpload'] = $this->mtemplate->imageUpload;
		$data['basePath'] = $this->mtemplate->basePath;
		$data['baseUrl'] = $this->mtemplate->baseUrl;
		$data['imagePath'] = $this->mtemplate->imagePath;
		$data['middle_lang'] = $middle;
		$objString = new StringUtility();
		$data['obj_string'] = $objString;
		$formCart = $this->load->view("templates/" . $this->mtemplate->_template ."/cart",$data, true);
		$this->load->library('my_utility');
		$title_page=$this->lang->line('MANAGE_TITLE_PAGE');
		$view=$this->mtemplate->preView();
		$view->assign('title_page',$this->lang->line('CART_LIST'),true);
		$view->assign('layout_content','carts.tpl',true);
		//Load language key
		$view->assign('TITLE_TITLE',$this->lang->line('TITLE_TITLE'),true);
		$view->assign('PAGE_TITLE',$this->lang->line('CART_LIST'),true);
		$view->assign('NAME_TITLE',$this->lang->line('NAME_TITLE'),true);
		$view->assign('IMAGE_TITLE',$this->lang->line('IMAGE_TITLE'),true);
		$view->assign('form_cart',$formCart,true);
		$view->assign('BREAD_CRUMB',$breadCrumb,true);
		$view->display('index.tpl');
	}	
	
	
	
	/**
	 * todo: add product to cart
	 */
	public function add()
	{
		$lang = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $lang);
		$this->load->model("Model_Product");
		//get product data from session
		$this->load->library('cart');
		$limitPerPage=$this->config->item('limit_of_page');
		$lang = $this->uri->segment(1);
		$id = 0;
		if(isset($lang) && strlen($lang) == 2)
			$id = $this->uri->segment(5);
		else 
			$id=$this->uri->segment(4);
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		$objProduct = new Model_Product();
		$productInfo = $objProduct->getItemById($id);
		$data = array(
				array(
		             'id'      => $productInfo['id'],
					 'rid'      => $productInfo['rid'],
		             'qty'     => 1,
		             'price'   => $productInfo['price'],
					 'images'   => $productInfo['images'],	
		             'name'    => $productInfo['name']
		             )
		        );
		foreach($this->cart->contents() as $items)
		{
			if($items['id'] == $id)
			{

				$data = array(
				array(
					 'rowid' =>$items['rowid'],	
		             'id'      => $items['id'],
		             'qty'     => $items['qty'] + 1,
		             'price'   => $productInfo['price'],
					 'images'   => $productInfo['images'],	
		             'name'    => $productInfo['name']
		             )
		        );
		        $this->cart->update($data);
		        redirect($this->url('cart'));
			}
		
		}
		$this->cart->insert($data);
		redirect($this->url('cart'));
		 
	}
	
	/**
	 * todo: update data to cart
	 */
	public function update()
	{
		$this->load->library('cart');
		$data = $this->input->post();
		$this->cart->update($data);
		redirect($this->url('cart'));
		 		
	}
	public function export_excell()
	{
		$this->load->library('PHPExcel');
		$langCurrent = $this->session->userdata("language");
		$language_abbr = $this->session->userdata("language_abbr");
		$this->lang->load('product', $langCurrent);
		$this->load->model('Model_Product');
		//get product data from session
		$limitPerPage=$this->config->item('limit_of_page');
		if($language_abbr != $this->config->item('language_abbr'))
			$middle = $language_abbr . '/';
		else
			$middle = '';
		$this->breadcrumb->append_crumb('Home', site_url('/') . $middle);
		$this->breadcrumb->append_crumb('Catalog', site_url('/') . $middle . "product/catalog/");
		$this->breadcrumb->append_crumb('Cart', site_url('/') . $middle . 'cart');
		$breadCrumb = $this->breadcrumb->output();
		$data = array();
		$objCart = new CI_Cart();
		$cartContent = $objCart->contents();
		if(count($cartContent)>0){
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
			            ->setCellValue('A1', 'Name')
			            ->setCellValue('B1', 'qty')
			            ->setCellValue('C1', 'price')
			            ->setCellValue('D1', 'images')
			            ->setCellValue('F1', 'subtotal');
			// Rename sheet
			$objPHPExcel->getActiveSheet()->setTitle('Simple');
			// add drawing object
//			foreach($cartContent as $item){
//				
//			}
			$i = 2;
			foreach ($cartContent as $item) {
				$objPHPExcel->setActiveSheetIndex(0)
			            ->setCellValue('A' . $i, $item['name'])
			            ->setCellValue('B' . $i, $item['qty'])
			            ->setCellValue('C' .$i, $item['price'])
			            ->setCellValue('F' . $i, $item['subtotal']);
			    $objDrawing = new PHPExcel_Worksheet_Drawing();
				$objDrawing->setName('Paid');
				$objDrawing->setDescription('Paid');
				$objDrawing->setPath(PATH_ROOT .'/data/images//thumb/' . $item['images']);
				$objDrawing->setCoordinates('D' . $i);
	//			$objDrawing->setOffsetX(110);
	//			$objDrawing->setRotation(25);
				$objDrawing->getShadow()->setVisible(true);
				$objDrawing->getShadow()->setDirection(45);
				$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
				$i += 6;
			}		
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
		}else{
			echo"empty data";
			exit;
		}
		
	}
	/*
	 * todo: export data to pdf
	 */
	public function export_pdf(){
	
		$this->load->library('tcpdf');
		$this->load->model('Model_Product');
		$objCart = new CI_Cart();
		$cartContent = $objCart->contents();
		if(count($cartContent)>0){
			$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('Trung Kien Phan');
			$pdf->SetTitle('Cart');
			$pdf->SetSubject('TCPDF Tutorial');
			$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
			
			// set default header data
			$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
			
			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
			//set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			//set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			//set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
			//set some language-dependent strings
			//$pdf->setLanguageArray($l);
			// ---------------------------------------------------------
			// set font
			$pdf->SetFont('times', 'B', 20);
			// add a page
			$pdf->AddPage();
			$pdf->Write(0, 'Thông tin giỏ hàng', '', 0, 'L', true, 0, false, false, 0);
			$pdf->SetFont('arialunicid0', '', 8);
			$tbl = '<table cellspacing="0" cellpadding="1" border="1">
			    	<tr>
			        <td >'. 'Name' .'</td>
			        <td>'. 'qty' .'</td>
			        <td>'.'price'.'</td>
			        <td>'.'images'.'</td>
			        <td>'.'subtotal'.'</td>
			    	</tr>';
			
			foreach($cartContent as $item){
				$tbl .= '<tr>
		        		<td >'. $item['name'] .'</td>
				        <td>'. $item['qty'] .'</td>
				        <td>'.$item['price'].'</td>
				        <td><img src="'. PATH_ROOT .'/data/images//thumb/' . $item['images'] .'"'.'/></td>
				        <td>'.$item['subtotal'].'</td>
				    	</tr>';
			}
			$tbl .='</table>';
			$pdf->writeHTML($tbl, true, false, false, false, '');
			$pdf->Output('order.pdf', 'I');
			exit;
		}
		echo "data empty";exit;
		
		
	}
	
		
}

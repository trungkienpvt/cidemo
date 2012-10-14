<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/base_controller.php');
class Captcha extends Base_Controller {
	public function getimage()
	{

		$this->load->helper('captcha');
		$baseUrl= $this->config->item('base_url');
		$vals = array(
			'img_path'     => PATH_ROOT2 . DS . 'data' . DS .'captchas' . DS,
		    'img_url' => $baseUrl . 'data/captchas/'
		    );
		
		$cap = create_captcha($vals);
		$this->session->set_userdata(array(
                'captcha_word' => $cap['word']));
		Header("Content-Type: image/jpeg");
		imagejpeg($cap['image'], null,100);
	}
	public function getimage2()
	{
		$key = $this->uri->segment(4);
		$this->load->library('Zend');
		$this->load->library('My_Captcha');
//		echo(PATH_ROOT2 . 'system' . DS .'fonts' . DS . 'texb.ttf');exit;
//		echo('texb.ttf');exit;
		$myCaptcha = new My_Captcha();
		$captcha = $myCaptcha->getCaptcha();
		$captcha->setWordLen('6')
		->setHeight('60')
        ->setFont(PATH_ROOT2 . 'system' . DS .'fonts' . DS . 'texb.ttf')
        ->setImgDir(PATH_ROOT2 . 'data' . DS . 'captchas' . DS)
        ->setDotNoiseLevel('5')
        ->setLineNoiseLevel('5');
        $captchaId = $captcha->generate();
        $captchaWord = $captcha->getWord();
        $imageLink = PATH_ROOT2 . 'data' . DS . 'captchas' . DS . $captchaId . '.png';
        
        $this->session->set_userdata(array(
                'captcha_word' => $captchaWord));
        Header("Content-Type: image/png");
        $image = imagecreatefrompng($imageLink);
        unlink($imageLink);
        imagepng($image);
	}
	

	
		
}


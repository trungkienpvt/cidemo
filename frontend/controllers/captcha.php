<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries/front_controller.php');

class Captcha extends Front_Controller {

public function getimage2()

	{

		$key = $this->uri->segment(4);

		$this->load->library('Zend');

		$this->load->library('My_Captcha');

		$myCaptcha = new My_Captcha();
//		die(PATH_ROOT . '\system\fonts\texb.ttf');
		$captcha = $myCaptcha->getCaptcha();

		$captcha->setWordLen('6')

		->setHeight('60')

        ->setFont(PATH_ROOT . DS . 'system' . DS . 'fonts' . DS . 'texb.ttf')

        ->setImgDir(PATH_ROOT . DS .'data' . DS . 'captchas/')

        ->setDotNoiseLevel('5')

        ->setLineNoiseLevel('5');

        $captchaId = $captcha->generate();

        $captchaWord = $captcha->getWord();
        $imageLink = PATH_ROOT . DS . 'data' . DS .'captchas' . DS . $captchaId . '.png';
        $this->session->set_userdata(array(

                'captcha_word' => $captchaWord));

        Header("Content-Type: image/png");

        $image = imagecreatefrompng($imageLink);

        unlink($imageLink);

        imagepng($image);

	}

		

}


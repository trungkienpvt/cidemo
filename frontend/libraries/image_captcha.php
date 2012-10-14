<?php
defined('_JEXEC') or die('Restricted access');
include_once 'common_captcha.php';
include_once 'captcha.php';
$captcha = new Captcha();
$captcha->chars_number = 8;
$captcha->font_size = 14;
$captcha->tt_font = 'fonts/AHGBold.ttf';
$captcha->show_image(132, 30);
?>
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$template['active_group'] = 'default';
$template['default']['templae'] = 'template.php';
$template['default']['regions'] = array(
  'header',
  'content',
  'footer',
);  
$template['default']['parse_template'] = TRUE;
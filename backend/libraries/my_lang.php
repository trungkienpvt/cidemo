<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
* Language Identifier
* 
* Adds a language identifier prefix to all site_url links
* 
* @copyright     Copyright (c) 2011 Wiredesignz
* @version         0.29
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in
* all copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
* THE SOFTWARE.
*/
class My_Lang extends CI_Lang
{
    function __construct() 
    {
        global $URI, $CFG, $IN;
        $config =& $CFG->config;
        $index_page    = $config['index_page'];
        $lang_ignore   = $config['lang_ignore'];
        $default_abbr  = $config['language_abbr'];
        $lang_uri_abbr = $config['lang_uri_abbr'];
        
        /* get the language abbreviation from uri */
        $uri_abbr = $URI->segment(1);
        if(strlen($uri_abbr) == 2 && isset($lang_uri_abbr[$uri_abbr]))
        {
	        /* set the language_abbreviation cookie */
	        $IN->set_cookie('user_lang', $uri_abbr, $config['sess_expiration']);
	    } 
    }    

}

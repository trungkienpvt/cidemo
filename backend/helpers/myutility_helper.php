<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function copyimgurl($url,$savedir,$filename=""){
		$imgsave= explode("/",$url);
		$n=sizeof($imgsave)	;
		if($filename=="")
			$filename=$imgsave[$n-1];

		$fd = fopen ($url, "r");
     	if ($fd)
        	{
	             $buffer="";
    	         $total ="";
				 while (!feof ($fd))
				 {
						$buffer = fgets($fd, 4096);
						$total .= $buffer;
				  }
             
				
				
				//$ext=strrchr($filename, '.');
				//if(($ext!=".jpg")&&($ext!=".gif")&&($ext!=".png")){
					//$nran=rand(0,1000);
					//$filename = $nran .".jpg";
				//}
				$fdw = fopen ($savedir."\\".$filename, "w"); 
//				die("$savedir");
				fclose ($fd);
				fwrite($fdw,$total);
				fclose ($fdw); 
		}
		return 	$savedir."\\".$filename;		
	}
	function t($line) 
	{
	    global $LANG;
	    return ($t = $LANG->line($line)) ? $t : $line;
	}  
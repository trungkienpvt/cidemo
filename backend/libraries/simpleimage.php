<?php
/*
* File: SimpleImage.php
* Author: Simon Jarvis
* Copyright: 2006 Simon Jarvis
* Date: 08/11/06
* Link: http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php
* 
* This program is free software; you can redistribute it and/or 
* modify it under the terms of the GNU General Public License 
* as published by the Free Software Foundation; either version 2 
* of the License, or (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful, 
* but WITHOUT ANY WARRANTY; without even the implied warranty of 
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
* GNU General Public License for more details: 
* http://www.gnu.org/licenses/gpl.html
*
*/
 
class SimpleImage {
   
   var $image;
   var $image_type;
   var $path;
   var $file;
   var $font;
   var $text;
   var $factor=70;
   var $fontsize=1;
   var $width;
   var $height;
   var $pos;
   var $photo;
   var $_FONTSIZE;
   var $outfile;
   
 
   function load($filename) {
      $image_info = getimagesize($filename);
      $this->image_type = $image_info[2];
      if( $this->image_type == IMAGETYPE_JPEG ) {
         $this->image = imagecreatefromjpeg($filename);
      } elseif( $this->image_type == IMAGETYPE_GIF ) {
         $this->image = imagecreatefromgif($filename);
      } elseif( $this->image_type == IMAGETYPE_PNG ) {
         $this->image = imagecreatefrompng($filename);
		 
      }
   }
   
   
   
   function save($image="",$filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
	   if($image=="")
	   		$image=$this->image;
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($image,$filename,$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($image,$filename);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($image,$filename);
      }   
      if( $permissions != null) {
         chmod($filename,$permissions);
      }
   }
   function output($image_type=IMAGETYPE_JPEG) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image);
      }   
   }
   function getImageType() {
      return $this->image_type;
   }
   function getWidth() {
      return imagesx($this->image);
   }
   function getHeight() {
      return imagesy($this->image);
   }
   function resizeToHeight($height) {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }
   function resizeToWidth($width) {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }
   function scale($scale) {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100; 
      $this->resize($width,$height);
   }
   function resize($width,$height) {
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
      $this->image = $new_image;   
   }
   
   //BEGIN WATER MARK
   function watermark($path,$file,$font,$text,$factor,$_FONTSIZE=8)
   {
        $this->path=$path;
        $this->file=$file;
        $this->font=$font;
        $this->text=$text;
        $this->factor=$factor;
        $this->_FONTSIZE=$_FONTSIZE;
        $this->outfile='';

        list( $this->width, $this->height ) = getimagesize($this->file); // Sizes

        //Calculate relation between photo and watermark
        $this->calculate_rel();

        // load original photo
        $this->load($file);
	    $this->photo = imagecreatetruecolor( $this->width, $this->height );

		$mark = imagecreatetruecolor( $this->width, $this->height );

		// Create some colors
		$white = imagecolorallocate($this->photo, 255, 255, 255);
		$gray   = imagecolorallocate($this->photo, 40, 40, 40);
		$black  = imagecolorallocate($this->photo, 0, 0, 0);

		// Calculate the text pos on the photo (bottom right)
		$this->calculate_pos();

		// Copy to other free memory
		imagecopy( $this->photo, $this->image, 0, 0, 0, 0, $this->width, $this->height );

		// Copy to other free memory
		imagecopy( $mark, $this->image, 0, 0, 0, 0, $this->width, $this->height );

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1]+2, $this->pos[y1]+2, $black, $this->font, $this->text);

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1], $this->pos[y1]-1, $gray, $this->font, $this->text);

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1]-1, $this->pos[y1], $gray, $this->font, $this->text);

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1]-1, $this->pos[y1]-1, $gray, $this->font, $this->text);

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1], $this->pos[y1]+1, $gray, $this->font, $this->text);

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1]+1, $this->pos[y1]+1, $gray, $this->font, $this->text);

		// add shadow
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1]+1, $this->pos[y1], $gray, $this->font, $this->text);

		// add text
		imagettftext($mark, $this->fontsize, 0, $this->pos[x1], $this->pos[y1], $white, $this->font, $this->text);

		imagecopymerge( $this->photo, $mark, 0, 0, 0, 0, $this->width, $this->height, 80 );

		// save
		$this->save($this->photo,$this->path.$this->file);

	   // free memory
		imagedestroy( $this->photo );
		imagedestroy( $mark );
        $this->outfile=$this->path.$this->file;
       
        // free memory
  //      imagedestroy( $this->image );
    }
	  
    function calculate_pos(){
      $this->pos[x1]=$this->width-abs($this->size[2]+8);
      $this->pos[y1]=$this->height-abs($this->size[3]+8);
      $this->pos[x2]=$this->width-3;
      $this->pos[y2]=$this->height-3;
    }
    function calculate_rel(){
        if ($this->factor!=""){
            $rel=0;
            // Prove size font until the factor
            while($rel < $this->factor){
                $this->size = imageTTFBBox($this->fontsize, 0, $this->font, $this->text);
                $rel=(abs($this->size[2])*100/$this->width);
                $this->fontsize++;
            }
            if ($this->fontsize!=1) $this->fontsize--;
        }else{
            $this->fontsize=$this->_FONTSIZE;
            $this->size = imageTTFBBox($this->fontsize, 0, $this->font, $this->text);
        }
    }
	
	//END WATER MARK
   
  
}
?>


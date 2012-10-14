<?php 
class StringUtility
{
    public static function removeunicode ($string)
    {
        // Replace other special chars
        $string = str_replace(array(' ' , '-'), array('_' , '_'), $string);
        $specialCharacters = array('#' => '' , '$' => '' , '%' => '' , '&' => '' , '@' => '' , '.' => '' , '€' => '' , '+' => '' , '=' => '' , '§' => '' , '\\' => '' , '/' => '');
        while (list ($character, $replacement) = each($specialCharacters)) {
            $string = str_replace($character, '-' . $replacement . '-', $string);
        }
        $string = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|� �|ặ|ẳ|ẵ)/", 'a', $string);
        $string = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $string);
        $string = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $string);
        $string = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|� �|ợ|ở|ỡ)/", 'o', $string);
        $string = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $string);
        $string = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $string);
        $string = preg_replace("/(đ)/", 'd', $string);
        $string = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|� �|Ặ|Ẳ|Ẵ)/", 'A', $string);
        $string = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $string);
        $string = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $string);
        $string = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|� �|Ợ|Ở|Ỡ)/", 'O', $string);
        $string = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $string);
        $string = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $string);
        $string = preg_replace("/(Đ)/", 'D', $string);
        $string = preg_replace("/( )/", '_', $string);
        // Remove all remaining other unknown characters
//        $string = ereg_replace('[^A-Za-z0-9_]', '', $string);
        $string = preg_replace('/[^a-zA-Z0-9\-]/', ' ', $string);
        $string = preg_replace('/^[\-]+/', '', $string);
        $string = preg_replace('/[\-]+$/', '', $string);
        $string = preg_replace('/[\-]{2,}/', ' ', $string);
        return $string;
    }
    public static function formatToUnicode ($string)
    {
        // Replace other special chars
        //$string = str_replace(array(' ' , '-'), array('_' , '_'), $string);
        /*$specialCharacters = array('#' => '' , '$' => '' , '%' => '' , '&' => '' , '@' => '' , '.' => '' , '€' => '' , '+' => '' , '=' => '' , '§' => '' , '\\' => '' , '/' => '');
        while (list ($character, $replacement) = each($specialCharacters)) {
            $string = str_replace($character, '-' . $replacement . '-', $string);
        }*/
        $string = preg_replace("/(à)/", '&agrave;', $string);
        $string = preg_replace("/(á)/", '&aacute;', $string);
        $string = preg_replace("/(ạ)/", '&#7841;', $string);
        $string = preg_replace("/(ả)/", '&#7843;', $string);
        $string = preg_replace("/(ã)/", '&atilde;', $string);
        $string = preg_replace("/(â)/", '&acirc;', $string);
        $string = preg_replace("/(ầ)/", '&#7847;', $string);
        $string = preg_replace("/(ấ)/", '&#7845;', $string);
        $string = preg_replace("/(ậ)/", '&#7853;', $string);
        $string = preg_replace("/(ẩ)/", '&#7849;', $string);
        $string = preg_replace("/(ẫ)/", '&#7851;', $string);
        $string = preg_replace("/(ă)/", '&#259;', $string);
        $string = preg_replace("/(ắ)/", '&#7855;', $string);
        $string = preg_replace("/(ằ)/", '&#7857;', $string);
        $string = preg_replace("/(ặ)/", '&#7863;', $string);
        $string = preg_replace("/(ẳ)/", '&#7859;', $string);
        $string = preg_replace("/(ẵ)/", '&#7861;', $string);
        $string = preg_replace("/(è)/", '&egrave;', $string);
        $string = preg_replace("/(é)/", '&eacute;', $string);
        $string = preg_replace("/(ẹ)/", '&#7865;', $string);
        $string = preg_replace("/(ẻ)/", '&#7867;', $string);
        $string = preg_replace("/(ẽ)/", '&#7869;', $string);
        $string = preg_replace("/(ê)/", '&ecirc;', $string);
        $string = preg_replace("/(ề)/", '&#7873;', $string);
        $string = preg_replace("/(ế)/", '&#7871;', $string);
        $string = preg_replace("/(ệ)/", '&#7879;', $string);
        $string = preg_replace("/(ể)/", '&#7875;', $string);
        $string = preg_replace("/(ễ)/", '&#7877;', $string);
        $string = preg_replace("/(ì)/", '&igrave;', $string);
        $string = preg_replace("/(í)/", '&iacute;', $string);
        $string = preg_replace("/(ị)/", '&#7883;', $string);
        $string = preg_replace("/(ỉ)/", '&#7881;', $string);
        $string = preg_replace("/(ĩ)/", '&#297;', $string);
        $string = preg_replace("/(î)/", '&icirc;', $string);
        $string = preg_replace("/(ò)/", '&ograve;', $string);
        $string = preg_replace("/(ó)/", '&oacute;', $string);
        $string = preg_replace("/(ọ)/", '&#7885;', $string);
        $string = preg_replace("/(ỏ)/", '&#7887;', $string);
        $string = preg_replace("/(õ)/", '&otilde;', $string);
        $string = preg_replace("/(ô)/", '&ocirc;', $string);
        $string = preg_replace("/(ồ)/", '&#7891;', $string);
        $string = preg_replace("/(ố)/", '&#7889;', $string);
        $string = preg_replace("/(ổ)/", '&#7893;', $string);
        $string = preg_replace("/(ỗ)/", '&#7895;', $string);
        $string = preg_replace("/(ơ)/", '&#417;', $string);
        $string = preg_replace("/(ờ)/", '&#7901;', $string);
        $string = preg_replace("/(ớ)/", '&#7899;', $string);
        $string = preg_replace("/(ợ)/", '&#7907;', $string);
        $string = preg_replace("/(ở)/", '&#7903;', $string);
        $string = preg_replace("/(ỡ)/", '&#7905;', $string);
        
        $string = preg_replace("/(û)/", '&ucirc;', $string);
        $string = preg_replace("/(ù)/", '&ugrave;', $string);
        $string = preg_replace("/(ú)/", '&uacute;', $string);
        $string = preg_replace("/(ụ)/", '&#7909;', $string);
        $string = preg_replace("/(ủ)/", '&#7911;', $string);
        $string = preg_replace("/(ũ)/", '&#361;', $string);
        $string = preg_replace("/(ư)/", '&#432;', $string);
        $string = preg_replace("/(ừ)/", '&#7915;', $string);
        $string = preg_replace("/(ứ)/", '&#7913;', $string);
        $string = preg_replace("/(ự)/", '&#7921;', $string);
        $string = preg_replace("/(ử)/", '&#7917;', $string);
        $string = preg_replace("/(ữ)/", '&#7919;', $string);
        $string = preg_replace("/(ỳ)/", '&#7923;', $string);
        $string = preg_replace("/(ý)/", '&yacute;', $string);
        $string = preg_replace("/(ỵ)/", '&#7925;', $string);
        $string = preg_replace("/(ỷ)/", '&#7927;', $string);
        $string = preg_replace("/(ỹ)/", '&#7929;', $string);
        $string = preg_replace("/(đ)/", '&#273;', $string);
        $string = preg_replace("/(À)/", '&Agrave;', $string);
        $string = preg_replace("/(Á)/", '&Aacute;', $string);
        $string = preg_replace("/(Ạ)/", '&#7840;', $string);
        $string = preg_replace("/(Ả)/", '&#7842;', $string);
        $string = preg_replace("/(Ã)/", '&Atilde;', $string);
        $string = preg_replace("/(Â)/", '&Acirc;', $string);
        $string = preg_replace("/(Ầ)/", '&#7846;', $string);
        $string = preg_replace("/(Ấ)/", '&#7844;', $string);
        $string = preg_replace("/(Ậ)/", '&#7852;', $string);
        $string = preg_replace("/(Ẩ)/", '&#7848;', $string);
        $string = preg_replace("/(Ẫ)/", '&#7850;', $string);
        $string = preg_replace("/(Ă)/", '&#258;', $string);
        $string = preg_replace("/(Ằ)/", '&#7856;', $string);
        $string = preg_replace("/(Ắ)/", '&#7854;', $string);
        $string = preg_replace("/(Ặ)/", '&#7862;', $string);
        $string = preg_replace("/(Ẳ)/", '&#7858;', $string);
        $string = preg_replace("/(Ẵ)/", '&#7860;', $string);
        $string = preg_replace("/(È)/", '&Egrave;', $string);
        $string = preg_replace("/(É)/", '&Eacute;', $string);
        $string = preg_replace("/(Ẹ)/", '&#7864;', $string);
        $string = preg_replace("/(Ẻ)/", '&#7866;', $string);
        $string = preg_replace("/(Ẽ)/", '&#7868;', $string);
        $string = preg_replace("/(Ê)/", '&Ecirc;', $string);
        $string = preg_replace("/(Ề)/", '&#7872;', $string);
        $string = preg_replace("/(Ế)/", '&#7870;', $string);
        $string = preg_replace("/(Ệ)/", '&#7878;', $string);
        $string = preg_replace("/(Ể)/", '&#7874;', $string);
        $string = preg_replace("/(Ễ)/", '&#7876;', $string);
        $string = preg_replace("/(Ì)/", '&Igrave;', $string);
        $string = preg_replace("/(Í)/", '&Iacute;', $string);
        $string = preg_replace("/(Ị)/", '&#7882;', $string);
        $string = preg_replace("/(Ỉ)/", '&#7880;', $string);
        $string = preg_replace("/(Ĩ)/", '&#296;', $string);
        $string = preg_replace("/(Ò)/", '&Ograve;', $string);
        $string = preg_replace("/(Ó)/", '&Oacute;', $string);
        $string = preg_replace("/(Ọ)/", '&#7884;', $string);
        $string = preg_replace("/(Ỏ)/", '&#7886;', $string);
        $string = preg_replace("/(Õ)/", '&Otilde;', $string);
        $string = preg_replace("/(Ô)/", '&Ocirc;', $string);
        $string = preg_replace("/(Ồ)/", '&#7890;', $string);
        $string = preg_replace("/(Ố)/", '&#7888;', $string);
        $string = preg_replace("/(Ộ)/", '&#7896;', $string);
        $string = preg_replace("/(Ổ)/", '&#7892;', $string);
        $string = preg_replace("/(Ỗ)/", '&#7894;', $string);
        $string = preg_replace("/(Ơ)/", '&#416;', $string);
        $string = preg_replace("/(Ờ)/", '&#7900;', $string);
        $string = preg_replace("/(Ớ)/", '&#7898;', $string);
        $string = preg_replace("/(Ợ)/", '&#7906;', $string);
        $string = preg_replace("/(Ở)/", '&#7902;', $string);
        $string = preg_replace("/(Ỡ)/", '&#7904;', $string);
        $string = preg_replace("/(Ù)/", '&Ugrave;', $string);
        $string = preg_replace("/(Ú)/", '&Uacute;', $string);
        $string = preg_replace("/(Ụ)/", '&#7908;', $string);
        $string = preg_replace("/(Ủ)/", '&#7910;', $string);
        $string = preg_replace("/(Ũ)/", '&#360;', $string);
        $string = preg_replace("/(Ư)/", '&#431;', $string);
        $string = preg_replace("/(Ừ)/", '&#7914;', $string);
        $string = preg_replace("/(Ứ)/", '&#7912;', $string);
        $string = preg_replace("/(Ự)/", '&#7920;', $string);
        $string = preg_replace("/(Ử)/", '&#7916;', $string);
        $string = preg_replace("/(Ữ)/", '&#7918;', $string);
        $string = preg_replace("/(Ỳ)/", '&#7922;', $string);
        $string = preg_replace("/(Ý)/", '&Yacute;', $string);
        $string = preg_replace("/(Ỵ)/", '&#7924;', $string);
        $string = preg_replace("/(Ỷ)/", '&#7926;', $string);
        $string = preg_replace("/(Ỹ)/", '&#7928;', $string);
        $string = preg_replace("/(Đ)/", '&#272;', $string);
        $string = preg_replace("/(’)/", '&rsquo;', $string);
        $string = preg_replace("/(œ)/", '&oelig;', $string);
        return $string;
    }
    function ConvertUtf8($string)
	{
	   $detect = mb_detect_encoding($string,"UTF-8, ISO-8859-1, GBK");
	   return ($detect == 'UTF-8' ? $string : mb_convert_encoding($string, "HTML-ENTITIES", "ISO-8859-1"));
   
	}
    
    
}



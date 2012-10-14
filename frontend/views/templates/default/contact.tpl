<script src="{$baseUrl}assets/ckeditor/ckeditor.js"></script>
<script src="{$baseUrl}assets/ckfinder/ckfinder.js"></script>
{literal}
<script>
function submitForm(){
	$("#formContact").submit();
	
}
</script>
{/literal}
<div id="primary">
<div id="" class="clearFix">
<div id="itemCount">
                    {$BREAD_CRUMB}
                </div>
                <div id="sortable">
                </div>
<div class="productWrap">                
<form action="{$baseUrl}contacts/sendmail" id="formContact" method="post" class="" enctype="multipart/form-data">
<table id="freecontactform" class="freecontactform">
<tr><td>{$EMAIL_FROM_TITLE}</td><td><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></td></tr>
<tr><td>{$EMAIL_TO_TITLE}</td><td><input type="text" name="emailto"   id="emailto" size="54" value="" /></td></tr>
<tr><td>{$SUBJECT_TITLE}</td><td><input type="text" name="subject"   id="subject" size="54" value="" /></td></tr>
<tr><td>{$MESSAGE_TITLE}</td><td><textarea name="message" rows="10" cols="50" ></textarea></td></tr>
<tr><td>{$CAPTCHA_TITLE}</td><td><span style="width:250px;float:left;margin-left:10px"><img src="{$baseUrl}captcha/getimage2/" id="captcha" /></span style="float:left"><span><a href= "javascript:void()" onclick="new_captcha('{$baseUrl}captcha/getimage2/')"> <img src="{$basePath}assets/images/refresh.png" /></a></span></td></tr>
<tr><td></td><td ><input type="text" name="captcha" id="captcha" /></td></tr>
<tr><td colspan="2">
<a style="float:left;margin-right:10px" class="FancyFormRadio FancyFormRadio-current" onclick="submitForm()" href="javascript:void(0)">Send</a>
</td></tr>
</table>         
</form>
</div>
</div></div>
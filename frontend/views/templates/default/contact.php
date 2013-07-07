<script src="<?php print $PREDATA['base_url'] ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php print $PREDATA['base_url'] ?>assets/ckfinder/ckfinder.js"></script>
<div id="primary">
<div class="span12">
<div id="itemCount">
                    <?php print $BREAD_CRUMB?>
                </div>
                <div id="sortable">
                </div>
<div class="productWrap">
<?php echo form_open($PREDATA['base_url'] .'contacts/sendmail',array('name'=>'formContact','id'=>'formContact','enctype'=>'multipart/form-data'));?>                
<!--<form action="<?php print $PREDATA['base_url'] ?>contacts/sendmail" id="formContact" method="post" class="" enctype="">-->
<table id="freecontactform" class="freecontactform">
<tr><td><?php print $this->lang->line("EMAIL_FROM_TITLE")?></td><td><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></td></tr>
<tr><td colspan="2"><?php if(isset($PREDATA['ERROR_VALIDATE_MESSAGE']['emailfrom'])):?>
<div class="error"><?php print $PREDATA['ERROR_VALIDATE_MESSAGE']['emailfrom']?></div><?php endif?></td></tr>
<tr><td><?php print $this->lang->line("EMAIL_TO_TITLE")?></td><td><input type="text" name="emailto"   id="emailto" size="54" value="" /></td></tr>
<tr><td colspan="2"><?php if(isset($PREDATA['ERROR_VALIDATE_MESSAGE']['emailto'])):?>
<div class="error"><?php print $PREDATA['ERROR_VALIDATE_MESSAGE']['emailto']?></div><?php endif?>
</td></tr>
<tr><td><?php print $this->lang->line("SUBJECT_TITLE")?></td><td><input type="text" name="subject"   id="subject" size="54" value="" /></td></tr>
<tr><td colspan="2"><?php if(isset($PREDATA['ERROR_VALIDATE_MESSAGE']['subject'])):?>
<div class="error"><?php print $PREDATA['ERROR_VALIDATE_MESSAGE']['subject']?></div><?php endif?>
</td></tr>
<tr><td><?php print $this->lang->line("MESSAGE_TITLE")?></td><td><textarea name="message" rows="10" cols="50" ></textarea></td></tr>
<tr><td colspan="2">
<?php if(isset($PREDATA['ERROR_VALIDATE_MESSAGE']['message'])):?>
<div class="error"><?php print $PREDATA['ERROR_VALIDATE_MESSAGE']['message']?></div><?php endif?></td></tr>
<tr><td><?php print $this->lang->line("CAPTCHA_TITLE")?></td><td><span style="width:250px;float:left;margin-left:10px"><img src="<?php print $PREDATA['base_url']?>captcha/getimage2/" id="captcha" /></span style="float:left"><span><a class="refresh-captcha" href= "javascript:void()" rel='<?php print $PREDATA['base_url']?>captcha/getimage2/'> <img src="<?php print $PREDATA['basePath']?>assets/frontend/images/Refresh1.png" /></a></span></td></tr>
<tr><td></td><td ><input type="text" name="captcha" id="captcha" /></td></tr>
<tr><td colspan="2">
<input type="submit" value="Send" />
</td></tr>
</table>         
<?php form_close()?>
</form>
</div>
</div></div>
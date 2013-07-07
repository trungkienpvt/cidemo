<script src="<?php print $PREDATA['jsPath']?>ajaxupload.js"></script>
<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "<?php print $PREDATA['base_url']?>users/previewphoto/",
			responseType: "json",
			onChange : function(file , ext) 
			{
						if ( $("select").val() == 0 ) {
							alert("Please select a directory, then Upload");
							return false;
						}
					},
					onSubmit : function(file , ext)
					{
						// Allow only images. You should add security check on the server-side.
						if (ext && /^(gif|jpg|jpeg|png)$/i.test(ext))
						{
							/* Change status text */
							$("#upload-div .text").text("Uploading " + file);
							$("#loader_overlay").show();
							$("#loader").show();
							//this.disable();
						} 
						else 
						{
							// extension is not allowed
							$("#upload-div .text").text("Error: only images are allowed");
							// cancel upload
							return false;
						}
					},
					onComplete : function(file, response)
					{
						$("#loader").hide();
						$("#loader_overlay").hide();
						if (response.status == 1) {
							$("#preview").html("<img src='<?php print $PREDATA['basePath']?>data/tmp/thumb/" + response.file_name + "' />");
							$("#previewphoto").val(response.file_name);
						} else {
							alert("Error uploading file");
							$("#preview").html("Upload FAILED");
						}
					}
				});
 		});
 		</script>
<h1><?php print $this->lang->line("USER_INFO_TITLE")?></h1>
<div class="form-add">
<form class="form-horizontal" action="<?php print $PREDATA['base_url'] ?>users/save" method="post" enctype="multipart/form-data">
    <div class="control-group">
    <label class="control-label" for="fullname"><?php print $this->lang->line("FULLNAME_TITLE")?></label>
    <div class="controls">
    <input type="text" name="fullname" placeholder="<?php print $this->lang->line("FULLNAME_TITLE")?>" id="fullname" size="54" tabindex="1" value="<?php echo (isset($USER_DATA['fullname'])?$USER_DATA['fullname']:"")?>" />
   </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="ussername"><?php print $this->lang->line('USERNAME_TITLE')?></label>
    <div class="controls">
    <input type="text" name="username" placeholder="<?php print $this->lang->line('USERNAME_TITLE')?>" id="username" size="54" tabindex="2" value="<?php echo (isset($USER_DATA['username'])?$USER_DATA['username']:"")?>" />
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="email"><?php print $this->lang->line('EMAIL_TITLE')?></label>
    <div class="controls">
    <input type="text" name="email" placeholder="<?php print $this->lang->line('EMAIL_TITLE')?>" id="email" size="54" tabindex="2" value="<?php echo (isset($USER_DATA['email'])?$USER_DATA['email']:"")?>" />
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="email"><?php print $this->lang->line('PASSWORD_TITLE')?></label>
    <div class="controls">
    <input type="password" name="password" placeholder="<?php print $this->lang->line('PASSWORD_TITLE')?>" id="email" size="54" tabindex="2" value="" />
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="email"><?php print $this->lang->line('SELECT_STATUS_TITLE')?></label>
    <div class="controls">
    
    <?php if(isset($USER_DATA) && $USER_DATA['status'] ==1):?>
    <label class="radio">
		<input type="radio" name="status" id="optionsRadios1" value="1" checked>
	<?php print $this->lang->line('ACTIVE_TITLE')?>
	</label>
	<label class="radio">
		<input type="radio" name="status" id="optionsRadios2" value="0">
	<?php print $this->lang->line('UNACTIVE_TITLE')?>
	</label>
	<?php else:?>
	<label class="radio">
		<input type="radio" name="status" id="optionsRadios1" value="1" checked>
	<?php print $this->lang->line('ACTIVE_TITLE')?>
	</label>
	<label class="radio">
	<input type="radio" name="status" id="optionsRadios2" value="0">
	<?php print $this->lang->line('UNACTIVE_TITLE')?>
	</label>
	 <?php endif?>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="email"><?php print $this->lang->line('IMAGE')?></label>
    <div class="controls">
    <input type="file" name="userfile" tabindex="8" id="userfile" />
    <label for="preview"></label>
    <div id="upload-div"></div>
	<div id="loader_overlay" class="loader_overlay_BG"></div>
	<div id="loader" class="loading">Loading</div>
	<div id='preview'>
	<?php if(isset($USER_DATA['images'])):?>
	<img src="<?php print $PREDATA['basePath']?>data/images/thumb/<?php print $USER_DATA['images']?>"/>
	<?php endif?>
	</div>
    </div>
    </div>
    <div class="control-group">
    <div class="controls">
    <input type="hidden" name="id" value="<?php print(isset($USER_DATA['id'])?$USER_DATA['id']:"")?>"/>
	<input type="hidden" name="previewphoto" id="previewphoto" value=""/>
    <button type="submit" class="btn"><?php print $this->lang->line("Save")?></button>
    </div>
    </div>
</form>	
</div>
         <script type="text/javascript">
         	$(document).ready(
         		function() {
         			$('#loader_overlay').hide();
         			$('#loader').hide();
         		}
         	);
         </script>
                
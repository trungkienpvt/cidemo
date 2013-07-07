<script src="<?php print $PREDATA['jsPath']?>ajaxupload.js"></script>
<script type="text/javascript">
$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "<?php print $PREDATA['base_url']?>category_banner/previewphoto/",
			responseType: "json",
			onChange : function(file , ext) 
			{
			//more action after choose file
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
<h1><?php print $this->lang->line("CATEGORY_INFO_TITLE")?></h1>
<div class="form-add">
<form class="form-horizontal" action="<?php print $PREDATA['base_url'] ?>category_banner/save" method="post" enctype="multipart/form-data">
    <div class="control-group">
    <label class="control-label" for=name><?php print $this->lang->line("CATEGORY_NAME")?></label>
    <div class="controls">
    <input type="text" name="name" placeholder="<?php print $this->lang->line("CATEGORY_NAME")?>" id="name" size="54" tabindex="1" value="<?php echo (isset($category_data['name'])?$category_data['name']:"")?>" />
   </div>
    </div>
    <?php if($TRANSLATE_STATUS!=1):?>
    <div class="control-group">
    <label class="control-label" for="parents"><?php print $this->lang->line('CATEGORY_PARENT')?></label>
    <div class="controls">
    
    <select name="parents">
    <option value="" ><?php print $this->lang->line("CHOICE_TITLE")?></option>
    <?php foreach($category_list as $row):
    ?>
    <option value="<?php print $row['id']?>" <?php print($row['id']==(int)$category_data['parents']?"selected":"")?>><?php print $row['name']?></option>
    <?php endforeach;?>
    </select>
    
    </div>
    </div>
    <?php else:?>
    <input type="hidden" name="parents"  value="<?php echo $category_data['parents']?>" />
    <?php endif;?>
    <div class="control-group">
    <label class="control-label" for="status"><?php print $this->lang->line('SELECT_STATUS_TITLE')?></label>
    <div class="controls">
    
    <?php if(isset($category_data) && $category_data['status'] ==1):?>
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
	<?php if(isset($category_data['images'])):?>
	<img src="<?php print $PREDATA['basePath']?>data/images/thumb/<?php print $category_data['images']?>"/>
	<?php endif?>
	</div>
    </div>
    </div>
    <?php if(!empty($arr_lang)):?>
    <?php if($TRANSLATE_STATUS==1):?>
    <div class="control-group">
    <label class="control-label" for=name><?php print $this->lang->line("LANGUAGE")?></label>
    <div class="controls">
    
    <select name="language" id="language">
	<option value="0">Please select</option>
	<?php 
	foreach($arr_lang as $row):?>
	<option value="<?php print $row?>"><?php print $row?></option>    
	</select>
	<?php endforeach;?>
	
   </div>
    </div>
    <?php endif?>
    <?php endif?>
    <div class="control-group">
    <div class="controls">
    <input type="hidden" name="id" value="<?php print(isset($category_data['id'])?$category_data['id']:"")?>"/>
	<input type="hidden" name="previewphoto" id="previewphoto" value=""/>
	<input type="hidden" name="translate" value="<?php print $TRANSLATE_STATUS?>"/>
    <input type="hidden" name="image_link" value="<?php print $category_data['images']?>"/>
    <input type="hidden" name="orderParent" value="<?php print (isset($category_data['idParent'])?$category_data['idParent']:"")?>"/>
    <button type="submit" class="btn"><?php print $this->lang->line("SAVE")?></button>
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
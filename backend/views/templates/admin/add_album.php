<script src="<?php print $PREDATA['jsPath']?>ajaxupload.js"></script>
<script src="<?php print $PREDATA['basePath']?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php print $PREDATA['basePath']?>assets/ckfinder/ckfinder.js"></script>
<script src="<?php print $PREDATA['jsPath']?>admin/ajaxupload.js"></script>
<script type="text/javascript">
function BrowseServer( inputId )
{
	var finder = new CKFinder() ;
	finder.BasePath = '/ckfinder/' ;
	finder.SelectFunction = SetFileField ;
	finder.SelectFunctionData = inputId ;
	finder.Popup() ;
}
 
function SetFileField( fileUrl, data )
{
	document.getElementById( data["selectFunctionData"] ).value = fileUrl ;
}
</script>
<script type="text/javascript">
		$(document).ready(function() 
		{ 
	    new AjaxUpload("userfile", 
        {
			action: "<?php print $PREDATA['base_url']?>album/previewphoto/",
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
<h1><?php print $this->lang->line("ALBUM_INFO_TITLE")?></h1>
<div class="form-add">
<form class="form-horizontal" action="<?php print $PREDATA['base_url']?>album/save" method="post" enctype="multipart/form-data">
	<div class="control-group">
	    <label class="control-label" for="title"><?php print $this->lang->line("TITLE")?></label>
	    <div class="controls">
	    	<textarea name="title" placeholder="<?php print $this->lang->line("TITLE")?>" id="title" tabindex="1"><?php echo (isset($ALBUM_DATA['title'])?$ALBUM_DATA['title']:"")?></textarea>
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="links"><?php print $this->lang->line("LINK")?></label>
	    <div class="controls">
	    <input type="text" name="links" tabindex="4"   id="links" value="<?php print(isset($ALBUM_DATA['links'])?$ALBUM_DATA['links']:"")?>"/>
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="ordering"><?php print $this->lang->line("ORDERING")?></label>
	    <div class="controls">
	    <input type="text" name="ordering" tabindex="4"   id="ordering" value="<?php print(isset($ALBUM_DATA['ordering'])?$ALBUM_DATA['ordering']:"")?>"/>
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="ordering"><?php print $this->lang->line("CATEGORY")?></label>
	    <div class="controls">
	    <select name="category">
            <option><?php print $this->lang->line("PLEASE_SELECT")?></option>
			<?php foreach($list_category as $row):?>
			<option value="<?php print $row['id']?>"><?php print $row['name']?></option>
			<?php endforeach;?>
		</select>
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
				<?php if(isset($ALBUM_DATA['images'])):?>
				<img src="<?php print $PREDATA['basePath']?>data/images/thumb/<?php print $ALBUM_DATA['images']?>"/>
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
		    <input type="hidden" name="id" value="<?php print(isset($ALBUM_DATA['id'])?$ALBUM_DATA['id']:"")?>"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="<?php print(isset($ALBUM_DATA['rid'])?$ALBUM_DATA['rid']:"")?>"/>
                <input type="hidden" name="image_link" value="<?php print(isset($ALBUM_DATA['images'])?$ALBUM_DATA['images']:"")?>"/>
                <input type="hidden" name="translate" value="<?php print($TRANSLATE_STATUS!=""?$TRANSLATE_STATUS:0)?>"/>
		    <button type="submit" class="btn"><?php print $this->lang->line("SUBMIT_TITLE")?></button>
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
  
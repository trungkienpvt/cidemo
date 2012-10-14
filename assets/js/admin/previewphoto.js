var baseUrl = 'http://localhost/ciapp';
$(document).ready(function() 
{ 
	    new AjaxUpload('userfile', 
        {
			action: baseUrl + '/backend/albums/previewphoto/',
			responseType: 'json',
			onChange : function(file , ext) 
			{
						if ( $('select').val() == 0 ) {
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
							$('#upload-div .text').text('Uploading ' + file);
							$('#loader_overlay').show();
							$('#loader').show();
							//this.disable();
						} 
						else 
						{
							// extension is not allowed
							$('#upload-div .text').text('Error: only images are allowed');
							// cancel upload
							return false;
						}
					},
					onComplete : function(file, response)
					{
						$('#loader').hide();
						$('#loader_overlay').hide();
						if (response.status == 1) {
							$("#preview").html('<img src="' + baseUrl + '/data/tmp/thumb/' + response.file_name + '" />');
							$("#previewphoto").val(response.file_name);
						} else {
							alert('Error uploading file ('+file+')! \n'+ response.issue);
							$("#preview").html('Upload FAILED');
						}
					}
				});
 });
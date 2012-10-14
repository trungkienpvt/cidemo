/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//config.filebrowserUploadUrl = '../ckupload.php';
	/*
	config.filebrowserBrowseUrl = '../kcfinder/browse.php?type=files';
	config.filebrowserImageBrowseUrl = '../kcfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = '../kcfinder/browse.php?type=flash';
	config.filebrowserUploadUrl = '../kcfinder/upload.php?type=files';
	config.filebrowserImageUploadUrl = '../kcfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = '../kcfinder/upload.php?type=flash';
	*/
	config.toolbar = 'MyToolbar';
	 
	config.toolbar_MyToolbar =
	[
		{ name: 'document',		items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
		{ name: 'basicstyles',	items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
		{ name: 'paragraph',	items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
		{ name: 'links',		items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'insert',		items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
		{ name: 'colors',		items : [ 'TextColor','BGColor' ] },
		{ name: 'styles',		items : [ 'Styles','Format','Font','FontSize' ] },
		{ name: 'tools',       items : [ 'Maximize', 'ShowBlocks','-','About' ] }
		
	];
//	
	config.language = 'en';
	config.toolbarCanCollapse = false;
	
};

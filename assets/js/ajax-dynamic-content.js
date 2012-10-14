/**********************************************************
Ajax dynamic content
Copyright (C) 2007  DTHMLGoodies.com, Alf Magne Kalleland
***********************************************************/

var enableCache = true;
var jsCache = new Array();

var dynamicContent_ajaxObjects = new Array();

// Ajax Show Content
function ajax_showContent(divId,ajaxIndex,url)
{
	document.getElementById(divId).innerHTML = dynamicContent_ajaxObjects[ajaxIndex].response;
	
	if(enableCache)
	{
		jsCache[url] = 	dynamicContent_ajaxObjects[ajaxIndex].response;
	}
	
	dynamicContent_ajaxObjects[ajaxIndex] = false;
}

// Ajax Load Content
function ajax_loadContent(divId,url)
{
	if(document.getElementById(divId))
	{
	    // Get Content From Cache
	    if(enableCache && jsCache[url])
	    {
		    document.getElementById(divId).innerHTML = jsCache[url];
		    return;
	    }
    	
	    // Recieve content from Server	
	    document.getElementById(divId).innerHTML = '<div style="margin-left:90px; margin-top:10px;vertical-align:top" ><img src="../images/images_frontend/ajax-loader.gif" style="border:0px; width:30px; height:30px;" /><span style="font-family:Arial, Sans-Serif; color:#C2D8E7; font-size:13px;vertical-align:top;line-height:28px">Đang tải dữ liệu</span></div>';
    	
	    // Add new Ajax Object
	    var ajaxIndex = dynamicContent_ajaxObjects.length;
	    dynamicContent_ajaxObjects[ajaxIndex] = new sack();
    	
    	var urlNew = url;
	    if(urlNew.indexOf('?') >= 0)
	    {
		    dynamicContent_ajaxObjects[ajaxIndex].method='GET';
    		
		    var string = urlNew.substring(urlNew.indexOf('?'));
		    urlNew = urlNew.replace(string,'');
		    string = string.replace('?','');
		    var items = string.split(/&/g);
    		
		    for(var no=0; no<items.length; no++)
		    {
			    var tokens = items[no].split('=');
    			
			    if(tokens.length==2)
			    {
				    dynamicContent_ajaxObjects[ajaxIndex].setVar(tokens[0],tokens[1]);
			    }	
		    }	
    		
		    urlNew = urlNew.replace(string,'');
	    }
    	
	    // Specifying which file to get
	    dynamicContent_ajaxObjects[ajaxIndex].requestFile = urlNew;	
    	
	    // Specify function that will be executed after file has been found
	    dynamicContent_ajaxObjects[ajaxIndex].onCompletion = function()
	    { 
		    ajax_showContent(divId,ajaxIndex,url); 
	    };	
    	
	    // Execute AJAX function
	    dynamicContent_ajaxObjects[ajaxIndex].runAJAX();
	}
}
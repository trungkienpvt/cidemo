﻿/***********************************************
* VietAd (www.vietad.vn) Ajax ToolTip
***********************************************/

var offsetxpoint = -60; //Customize x offset of tooltip
var offsetypoint = 20; //Customize y offset of tooltip
var ie = document.all;
var ns6 = document.getElementById && !document.all;
var enabletip = false;

var tipobj;

function ietruebody()
{
	return (document.compatMode && document.compatMode != "BackCompat")? document.documentElement : document.body;
}

// Ajax Show Tooltip
function VietAd_ShowTooltip(externalFile)
{	
	if((document.readyState == "complete") || (!ie))
	{
		if(!document.getElementById('VietAdTooltip'))
		{
			try
			{		
				/* Create tooltip content div */
				tipobj = document.createElement('DIV'); 
				tipobj.className = 'VietAdTooltip';
				tipobj.id = 'VietAdTooltip';		
				tipobj.style.display='block';
				tipobj.style.position = 'absolute';
				document.body.appendChild(tipobj);
			}
			catch(e)
			{	
				return;		
			}
			
		}	
		
//		$("#VietAdTooltip").load(externalFile,function(){});
		ajax_loadContent('VietAdTooltip',externalFile);	
		
		enabletip = true;
	}
}

// Positioning Tooltip
function VietAd_PositionTooltip(e)
{
	if (enabletip)
	{
		var curX = (ns6) ? e.pageX : event.clientX+ietruebody().scrollLeft;
		var curY = (ns6) ? e.pageY : event.clientY+ietruebody().scrollTop;
		
		//Find out how close the mouse is to the corner of the window
		var rightedge  = ie&&!window.opera ? ietruebody().clientWidth-event.clientX-offsetxpoint : window.innerWidth-e.clientX-offsetxpoint-20;
		var bottomedge = ie&&!window.opera ? ietruebody().clientHeight-event.clientY-offsetypoint : window.innerHeight-e.clientY-offsetypoint-20;

		var leftedge = (offsetxpoint<0) ? offsetxpoint*(-1) : -1000;

		//if the horizontal distance isn't enough to accomodate the width of the context menu
		if (rightedge < tipobj.offsetWidth)
		{
			//move the horizontal position of the menu to the left by it's width
			tipobj.style.left = ie ? ietruebody().scrollLeft + event.clientX-tipobj.offsetWidth + "px" : window.pageXOffset + e.clientX - tipobj.offsetWidth + "px";
		}
		else if (curX < leftedge)
		{
			tipobj.style.left = "5px";
		}
		else
		{
			//position the horizontal position of the menu where the mouse is positioned
			tipobj.style.left = curX + offsetxpoint + "px";
		}

		//same concept with the vertical position
		if (bottomedge < tipobj.offsetHeight)
		{
			tipobj.style.top = ie ? ietruebody().scrollTop + event.clientY-tipobj.offsetHeight - offsetypoint + "px" : window.pageYOffset + e.clientY - tipobj.offsetHeight - offsetypoint + "px";
		}
		else
		{
			tipobj.style.top = curY + offsetypoint + "px";
		}
			
		tipobj.style.visibility = "visible";
	}
}

// Hide Tooltip
function VietAd_HideTooltip()
{
	if ((ns6||ie) && (tipobj))
	{
		enabletip = false;
		
		tipobj.style.visibility = "hidden";
		tipobj.style.left = "-1000px";
		tipobj.style.backgroundColor = '';
		tipobj.style.width = '';
	}
}

document.onmousemove = VietAd_PositionTooltip;
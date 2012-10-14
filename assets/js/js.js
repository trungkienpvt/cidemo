
function isValidEmail(string){
	emailRegExp = (/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/);

	if(!emailRegExp.test(string)){
		return "Email is not valid.";
	}
	return "";
}



function IsNumeric(sText)
{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
   { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         IsNumber = false;
   }

   return IsNumber;
   
   }

function IsNumeric2(value){
var anum=/(^\d+$)|(^\d+\.\d+$)/;
if (!anum.test(value))
{
	return false;
}else
	return true;


}

function removeNote(obj){
obj.parentNode.removeChild(obj);
}

function checkAllRow(o)
{
	
	var flag=o.checked;
	var number_row=document.getElementById('number_row').value;
	for(i=0;i<number_row;i++)
	{
		var	obj=document.getElementById('c_' + i.toString());
		obj.checked=flag;
				
	}
	if(o.checked)
		o.form.boxchecked.value=number_row;
	else
		o.form.boxchecked.value=0;

}

function isChecked( checkbox ){
		if (checkbox.checked == true){
			checkbox.form.boxchecked.value++;
		} else {
			checkbox.form.boxchecked.value--;
		}
	}
	
function BrowserDetect()
{
	var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{
			string: navigator.userAgent,
			subString: "Chrome",
			identity: "Chrome"
		},
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari",
			versionSearch: "Version"
		},
		{
			prop: window.opera,
			identity: "Opera"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			string: navigator.platform,
			subString: "Win",
			identity: "Windows"
		},
		{
			string: navigator.platform,
			subString: "Mac",
			identity: "Mac"
		},
		{
			   string: navigator.userAgent,
			   subString: "iPhone",
			   identity: "iPhone/iPod"
	    },
		{
			string: navigator.platform,
			subString: "Linux",
			identity: "Linux"
		}
	]

};
BrowserDetect.init();
return BrowserDetect;
}

function setFocus(o)
{
	o.select();
	o.focus();

}

function animationCart(button,img,destination){
	$('#' + button).removeAttr('onclick');
	$('#' + button).click(function (){
		var image = $('#' + img).offset();
		var cart  = $('#' + destination).offset();
		$('#' + img).before('<img src="' + $('#' + img).attr('src') + '" id="temp" style="position: absolute; top: ' + image.top + 'px; left: ' + image.left + 'px;" />');
		params = {
					top : cart.top + 'px',
					left : cart.left + 'px',
					opacity : 0.0,
					width : $('#' + destination).width(),  
					height : $('#' + destination).height()
				};		
		$('#temp').animate(params, 'slow', false, function () {
		$('#temp').remove();
	
		});			
});
	}
	

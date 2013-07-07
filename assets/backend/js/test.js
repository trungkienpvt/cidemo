
function checkAllRow(o)
{
	
	var flag=o.checked;
	var number_row=document.getElementById('number_row').value;
	for(i=1;i<=number_row;i++)
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

function new_captcha(url)
{

	var c_currentTime = new Date();
	var c_miliseconds = c_currentTime.getTime();
	document.getElementById('captcha').src = url + 'x/'+ c_miliseconds;
}


function showListArticle(url){
	var windowSizeArray = [ "width=700,height=500","width=700,height=500,scrollbars=yes" ];
        var windowName = "popUp";//$(this).attr("name");
        var windowSize = windowSizeArray;
        window.open(url, windowName, windowSize);
//        event.preventDefault();
	
}
function importLink(url) {
	$('#url').val(url);
	return;
}

function validateDelete(message){
	if (document.forms['adminForm'].boxchecked.value==0)
	{
	alert(message);
	return false;
	}
	else
	{
	 var confirms = confirm('Do you want to delete it now?');
		if(confirms)
			document.forms['adminForm'].submit();
	}

}

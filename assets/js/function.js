// JavaScript Document
function checkDel(msg){
		if(confirm(msg))
			return true;
		else
			return false;
	
	}

function changeEditType(o,type){
	  $("a").removeClass('current');
	  $(o).addClass('current');
	  $("#edit_type").val(type);
	  if(type==1){
		$("#translateData").css('display','none');
		$("#editData").css("display",'block');
		
		  }
	  else{
		
		$("#editData").css("display",'none');
		$("#translateData").css('display','block');
		
	}
	
	  }
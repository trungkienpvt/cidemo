/* 
 *
 * Easy front-end framework
 *
 * Copyright (c) 2011 Alen Grakalic
 * http://easyframework.com/license.php
 *
 * supported by Templatica (http://templatica.com)
 * and Css Globe (http://cssglobe.com)
 * 
 * built to be used with jQuery library
 * http://jquery.com
 * 
 * update: Mar 22nd 2011
 * 
 */

(function($) {
	$.easy = {
		navigation : function() {
			
		},
		showhide : function() {
		
		},
		forms : function() {
		},
		accordion : function(_5e) {
			var _5f = {
				selector : ".accordion",
				parent : "li",
				source : "h3",
				target : "p"
			};
			if (typeof _5e == "string") {
				_5f.selector = _5e;
			}
			var _5e = $.extend(_5f, _5e);
			return $(_5e.selector).each(function() {
				var obj = this;
				$(_5e.parent, this).each(function() {
					var _60 = $(_5e.target, this);
					$(_5e.target, this).hide();
					$(_5e.source, this).css( {
						"cursor" : "pointer"
					}).click(function() {
						$(_5e.target, _5e.selector).slideUp();
						if (!$(_60).is(":visible")) {
							$(_60).slideDown();
						}
					});
				});
			});
		},
		tabs : function(_61) {
			var _62 = {
				selector : ".tabs",
				selectedClass : "selected"
			};
			if (typeof _61 == "string") {
				_62.selector = _61;
			}
			var _61 = $.extend(_62, _61);
			return $(_61.selector).each(function() {
				var obj = this;
				var _63 = Array();
				function _64(i) {
					$.each(_63, function(_65, _66) {
						$(_66).hide();
					});
					$(_63[i]).fadeIn();
					$(obj).children().removeClass(_61.selectedClass);
					selected = $(obj).children().get(i);
					$(selected).addClass(_61.selectedClass);
				}
				;
				$("a", this).each(function(i) {
					_63.push($(this).attr("href"));
					$(this).click(function(e) {
						e.preventDefault();
						_64(i);
					});
				});
				_64(0);
			});
		},
		/* custom js */
		customJs : function() {
			$('.deleted').click(function() {
				var confirms = confirm('Do you want to delete it now?');
				if (confirms)
					return true;
				else
					return false;

			});
			$('.deleted-cart').click(function(){
				if(confirm("Do you want to delete it now"))
				{	
					var obj = $(this);
					$("#" + obj.attr('rel')).val(0);
					document.forms['form-cart'].submit();
				}
				else
					return false;
					
			});
			$('.submit_order').keypress(function(event){
				action = document.getElementById("action_form");
				if(action === null || action === undefined) {
				}else {
					this.form.action = action.value;
					
				}
				var keycode;
				if (window.event) 
					keycode = window.event.keyCode;
				else if (event) keycode = event.which;
				else return true;
				if (keycode == 13)
			   	{
					
					action.form.submit();
			   	}
				
			});
			$('.submit-form').click(function(){
				var obj = $(this);
				$("#" + obj.attr('rel')).submit();
			});
			$(".checkall").click(function(){
				o = document.getElementById("checkall");
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
			});
			$(".checkitem").click(function(){
				checkbox = $(this);
				var boxCheck = parseInt($("#boxchecked").val());
				if ($(this).prop('checked') == true){
					$("#boxchecked").val(boxCheck+1);
				} else {
					$("#boxchecked").val(boxCheck-1);
				}
			});
			$("a.order").click(function(){
			});
			$(".refresh-captcha").click(function(){
				var obj = $(this);
				var c_currentTime = new Date();
				var c_miliseconds = c_currentTime.getTime();
				document.getElementById('captcha').src = obj.attr('rel') + 'x/'+ c_miliseconds;
			});
		}
	};
})(jQuery);
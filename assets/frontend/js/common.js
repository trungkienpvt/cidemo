var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(c){var a="";var k,h,f,j,g,e,d;var b=0;c=Base64._utf8_encode(c);while(b<c.length){k=c.charCodeAt(b++);h=c.charCodeAt(b++);f=c.charCodeAt(b++);j=k>>2;g=((k&3)<<4)|(h>>4);e=((h&15)<<2)|(f>>6);d=f&63;if(isNaN(h)){e=d=64}else{if(isNaN(f)){d=64}}a=a+this._keyStr.charAt(j)+this._keyStr.charAt(g)+this._keyStr.charAt(e)+this._keyStr.charAt(d)}return a},decode:function(c){var a="";var k,h,f;var j,g,e,d;var b=0;c=c.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(b<c.length){j=this._keyStr.indexOf(c.charAt(b++));g=this._keyStr.indexOf(c.charAt(b++));e=this._keyStr.indexOf(c.charAt(b++));d=this._keyStr.indexOf(c.charAt(b++));k=(j<<2)|(g>>4);h=((g&15)<<4)|(e>>2);f=((e&3)<<6)|d;a=a+String.fromCharCode(k);if(e!=64){a=a+String.fromCharCode(h)}if(d!=64){a=a+String.fromCharCode(f)}}a=Base64._utf8_decode(a);return a},_utf8_encode:function(b){b=b.replace(/\r\n/g,"\n");var a="";for(var e=0;e<b.length;e++){var d=b.charCodeAt(e);if(d<128){a+=String.fromCharCode(d)}else{if((d>127)&&(d<2048)){a+=String.fromCharCode((d>>6)|192);a+=String.fromCharCode((d&63)|128)}else{a+=String.fromCharCode((d>>12)|224);a+=String.fromCharCode(((d>>6)&63)|128);a+=String.fromCharCode((d&63)|128)}}}return a},_utf8_decode:function(a){var b="";var d=0;var e=c1=c2=0;while(d<a.length){e=a.charCodeAt(d);if(e<128){b+=String.fromCharCode(e);d++}else{if((e>191)&&(e<224)){c2=a.charCodeAt(d+1);b+=String.fromCharCode(((e&31)<<6)|(c2&63));d+=2}else{c2=a.charCodeAt(d+1);c3=a.charCodeAt(d+2);b+=String.fromCharCode(((e&15)<<12)|((c2&63)<<6)|(c3&63));d+=3}}}return b}};function checkBrowserEnableCookie(){var a=(navigator.cookieEnabled)?true:false;if(typeof navigator.cookieEnabled=="undefined"&&!a){document.cookie="testcookie";a=(document.cookie.indexOf("testcookie")!=-1)?true:false}if(a){return true}else{return false}}function createCookie(c,d,e){if(e){var b=new Date();b.setTime(b.getTime()+(e*24*60*60*1000));var a="; expires="+b.toGMTString()}else{var a=""}document.cookie=c+"="+Base64.encode(d)+a+"; path=/;"}function readCookie(b){var e=b+"=";var a=document.cookie.split(";");for(var d=0;d<a.length;d++){var f=a[d];while(f.charAt(0)==" "){f=f.substring(1,f.length)}if(f.indexOf(e)==0){return Base64.decode(f.substring(e.length,f.length))}}return null}function eraseCookie(a){createCookie(a,"",-1)}function countShoppingCart(c){var b=document.getElementById("count_shopping_cart_store");var e=document.getElementById("total_shopping_cart_store");if(readCookie(c)==null){createCookie(c,"-",1);if(b!="underfined"&&b!=null){b.innerHTML=0}}else{var g=readCookie(c);var a=g.split(",");number_product=a.length;if(b!="underfined"&&b!=null){b.innerHTML=number_product-1}if(e!="underfined"&&e!=null){if($("#total_shopping_cart_store").length>0){var f=0;for(var d=0;d<a.length;d++){item_content=a[d];if(item_content.length>1){item_detail=item_content.split("-");pro_id=item_detail[0];pro_quantity=parseInt(item_detail[1]);unit_price=parseInt(item_detail[2]);f+=unit_price*pro_quantity}}e.innerHTML=writeStringToPrice(f+"")}}}}function emptyShoppingCart(a){createCookie(a,"-",1)}function addToShoppingCartStop(a,d,c){if(readCookie("shopping_cart_store")==null){createCookie("shopping_cart_store",",",1)}var e=readCookie("shopping_cart_store");if(e.search(","+a+"-")==-1){var b=e+","+a+"-"+d+"-"+c;createCookie("shopping_cart_store",b,1);countShoppingCart("shopping_cart_store")}else{alert("Sản phẩm đã có trong giỏ hàng!")}}function addToShoppingCart(a,d,c){if(readCookie("shopping_cart_store")==null){createCookie("shopping_cart_store",",",1)}var e=readCookie("shopping_cart_store");if(e.search(","+a+"-")==-1){var b=e+","+a+"-"+d+"-"+c;createCookie("shopping_cart_store",b,1);window.location="/gio-hang"}else{alert("Sản phẩm đã có trong giỏ hàng!")}}function isItemInCart(a){var b=readCookie("shopping_cart_store");if(b!=null&&b.search(","+a+"-")!=-1){document.write("Đang trong giỏ hàng")}}function deleteShoppingCartItem(a,c,b){if(confirm("Bạn muốn xóa bỏ sản phẩm này khỏi giỏ hàng ? ")){removeShoppingCartItem(a,c,b);window.location="/gio-hang"}}function removeShoppingCartItem(a,d,b){var e=readCookie("shopping_cart_store");e+=",";var c=new RegExp(","+a+"-([0-9]+)-([0-9]+),","i");new_cart=e.replace(c,",");new_cart=new_cart.substr(0,new_cart.length-1);createCookie("shopping_cart_store",new_cart,1)}function writeStringToPrice(f){var e=f.substr(0,f.length%3);var b=f.replace(e,"");var d=b.length/3;var a="";for(var c=0;c<d;c++){group_of_three=b.substr(c*3,3);a+=group_of_three;if(c!=(d-1)){a+="."}}if(e.length>0){if(a!=""){return e+"."+a}else{return e}}else{if(a!=""){return a}else{return""}}}function getItemUnitPrice(b){var a=document.getElementById("sell_price_"+b).innerHTML;while(a.indexOf(".")>0){a=a.replace(".","")}a=parseInt(a);return a}function getItemQuantity(b){var a=document.getElementById("quantity_"+b).value;a=parseInt(a);return a}function updatePrice(b,a){if(!check_interger(a)){alert("Vui lòng nhập số > 0");a=1;$("#quantity_"+b).val(a)}show_cart_total(b,a)}function show_cart_total(b,a){unit_price=getItemUnitPrice(b);document.getElementById("price_"+b).innerHTML=writeStringToPrice(unit_price*a+"");reCountTotal()}function update_deal_purchase(b,a,d,c){if(!check_interger(a)){alert("Vui lòng nhập số > 0");$("#quantity").val(c)}else{if(a<c){alert("Bạn cần mua số lượng tối thiểu là "+c);$("#quantity").val(c)}else{if(a>d){alert("Bạn chỉ có thể mua số lượng tối đa là "+d);$("#quantity").val(c)}else{document.getElementById("price").innerHTML=writeStringToPrice(b*a+"")}}}}function updatePriceAndCheckStock(d,b,a,c){if(!check_interger(b)){alert("Vui lòng nhập số > 0");b=c;$("#quantity_"+d).val(c)}else{if(b>a){alert("Hiện tại trong kho chỉ có "+a+" sản phẩm này, quý khách vui lòng nhập lại");b=c;$("#quantity_"+d).val(c)}}show_cart_total(d,b)}function check_interger(b){var a=/^\d+$/;if(a.test(b)){if(parseInt(b)>0){return true}else{return false}}return false}function reCountTotal(){var b="";var a=document.getElementById("item_update_quantity").value;all_item_array=a.split(",");var e=0;combo_array=new Array();for(var d=0;d<all_item_array.length;d++){item_id=all_item_array[d];if(item_id.length>0){item_price=getItemUnitPrice(item_id);item_quantity=getItemQuantity(item_id);b+=","+item_id+"-"+item_quantity+"-"+item_price;e+=item_price*item_quantity}}createCookie("shopping_cart_store",b,1);document.getElementById("total_value").innerHTML=writeStringToPrice(e+"");document.getElementById("total_cart_value").value=e;var c=document.getElementById("total_shopping_cart_store");if(c!="underfined"&&c!=null){c.innerHTML=writeStringToPrice(e+"")}}function isNumber(a){return !isNaN(parseFloat(a))&&isFinite(a)}function makeUrlAcceptQuery(a){if(a.search("?")>0){return a}else{return a+"?"}}function checkCartForm(){var f=readCookie("shopping_cart_store");var a=f.split(",");number_product=a.length;if(number_product<=1){if(confirm("Giỏ hàng chưa có sản phẩm. Vui lòng chọn sản phẩm vào giỏ hàng")){window.location="/"}return false}else{var c="";var d=document.getElementById("buyer_name").value;if(d.length<4){c+="- Bạn chưa nhập tên\n"}var b=document.getElementById("buyer_mobile").value;if(b.length<5){c+="- Bạn chưa nhập số di động\n"}var e=document.getElementById("buyer_address").value;if(e.length<10){c+="- Bạn chưa nhập địa chỉ"}if(c!=""){alert(c);return false}return true}}function add_compare_product(c){var e=document.getElementById("product_compare_list");if(e=="undefined"||e==null){alert("Cần có biến product_compare_list trong template");return false}if(e.value==""){e.value=","}var d=0;if(e.value.length>1){current_list_id=e.value.split(",");d=current_list_id.length-1}var a=document.getElementById("compare_box_"+c);var b=document.getElementById("text_compare_"+c);if(a.checked){if(d>6){a.checked="";alert("Bạn chỉ có thể so sánh tối đa 6 sản phẩm\nDanh sách đã có đủ 6")}else{document.getElementById("product_compare_list").value=e.value+c+",";if(b!="undefined"&&b!=null){b.innerHTML="Chờ so sánh";b.style.backgroundColor="#FFCC00"}}}else{document.getElementById("product_compare_list").value=e.value.replace(","+c+",",",");if(b!="undefined"&&b!=null){b.innerHTML="Chọn so sánh ";b.style.backgroundColor="#FFF"}}}function compare_product(){var b=document.getElementById("product_compare_list");if(b=="undefined"||b==null){alert("Cần có biến product_compare_list trong template");return false}var a=0;if(b.value.length>1){current_list_id=b.value.split(",");a=current_list_id.length-2}if(a>1){window.location="/so-sanh?list="+b.value}else{alert("Bạn cần chọn tối thiểu 2 sản phẩm để so sánh");return false}}$(document).ready(function(){countShoppingCart("shopping_cart_store")});
(function(a,b){var c=function(a,b,c){var d;return function e(){function g(){if(!c)a.apply(e,f);d=null}var e=this,f=arguments;if(d)clearTimeout(d);else if(c)a.apply(e,f);d=setTimeout(g,b||20)}};jQuery.fn[b]=function(a){return a?this.bind("resize",c(a)):this.trigger(b)}})(jQuery,"smartresize")

var $masonry = $('.masonry');
var navigationTopOffset;
var navigationHeight;

jQuery(window).load(function(){
  
  
  
  $('.flexslider').flexslider({
    directionNav: true,
    controlNav: true,
    keyboardNav: true,
    slideshowSpeed: 5000,
    animation: "slide",
    prevText: 'Previous',
    nextText: 'Next',
    controlsContainer: '.custom-flexslider-controls'
  });
  $('.flexslider li img').click(function(){
    var url = jQuery(this).attr('data-url');
    if (url.length > 0) {window.location.href = url;}
  });
  
  
  
});

jQuery(document).ready(function($){
    /*
  $("a.zoom").fancybox({
    padding:0,
    'titleShow': false,
    overlayColor: '#ffffff',
    overlayOpacity: 0.2
  });
  */
  
/*
  $("nav.mobile select").change(function(){ window.location = jQuery(this).val(); });
  $('#product .thumbs a').click(function(){
    
    $('#placeholder').attr('href', $(this).attr('href'));
    $('#placeholder img').attr('src', $(this).attr('data-original-image'))
    
    $('#zoom-image').attr('href', $(this).attr('href'));
    return false;
  });
  
  $('#product .add-to-cart').click(function(e){
    $('#add-item-to-cart').click();
  });
  
  */
    
  $(".flexslider li img").each(function(){
    var url = $(this).attr('data-url');
    if(url != undefined){
      if (url.length > 0) { $(this).css("cursor","pointer");}
    }
  });
  
  
  
  
  $('input[type="submit"], input.btn, button').click(function(){ // remove ugly outline on input button click
    $(this).blur();
  })
  
  $("li.dropdown").hover(function(){
    $(this).children('.dropdown').show();
    $(this).children('.dropdown').stop();
    $(this).children('.dropdown').animate({
      opacity: 1.0
    }, 200);
  }, function(){
    $(this).children('.dropdown').stop();
    $(this).children('.dropdown').animate({
      opacity: 0.0
    }, 400, function(){
      $(this).hide();
    });
  });
}); // end document ready

/*
if ((typeof Shopify) === 'undefined') { Shopify = {}; }
Shopify.money_format = '$';

function remove_item(id) {
  document.getElementById('updates_'+id).value = 0;
  document.getElementById('cartform').submit();
}

var selectCallback = function(variant, selector) {
  if (variant && variant.available == true) {
    jQuery('#add-to-cart').removeAttr('disabled'); // remove unavailable class from add-to-cart button, and re-enable button
    if(variant.price < variant.compare_at_price){
      jQuery('#price-preview').html(Shopify.formatMoney(variant.price, "") + " <del>" + Shopify.formatMoney(variant.compare_at_price, "") + "</del>");
    } else {
      jQuery('#price-preview').html(Shopify.formatMoney(variant.price, ""));
    }
  } else { // variant does not exist
    jQuery('#add-to-cart').attr('disabled', 'disabled'); // set add-to-cart button to unavailable class and disable button
    var message = variant ? "Sold Out" : "Unavailable";
    jQuery('#price-preview').text(message);
  }

};
    */
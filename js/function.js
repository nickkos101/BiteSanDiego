jQuery(document).ready(function(){

  //Helper Functions

  function scrollY() {
    return window.pageYOffset || document.documentElement.scrollTop;
}


jQuery('.faq').click(function(){
   jQuery(this).find('.answer').slideToggle();
});

jQuery('header.resp-menu i').click(function(){
   jQuery('.resp-menu nav').slideToggle();
});

if (jQuery('.bg').attr('src') == '' || jQuery('.bg').attr('src') == 'undefined' || jQuery('.bg').attr('src') == undefined) {

}
else {
    jQuery('body').css('background-image', 'url(' + jQuery('.bg').attr('src') + ')');
}

});
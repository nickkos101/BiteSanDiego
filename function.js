$(document).ready(function(){

    function scrollY() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }

    $(window).scroll(function () {
        if (scrollY() < 10){
            $('header').css('height','200px');
            setTimeout(function(){
                $('.logo').fadeIn();  
            }, 1000);    
        }
        else {
           $('.logo').fadeOut();
           $('header').css('height','40px');       
       }
       if (scrollY() != 0 || scrollY() > 10) {
         $('.logo').fadeOut();
         $('header').css('height','40px');    
     }
 });

    //Animate the Call to Action

    $('.call-to-action').animate({'left': '0px'}, 3500);

    //Modal Box Stuff

    $('.call-to-action').click(function(){
        $('.modalbox').fadeIn();
        $('.modalbackground').fadeIn();
    });
    $('.modalbackground').click(function(){
        $('.modalbox').fadeOut();
        $('.modalbackground').fadeOut();
    });

    //Initialize the main homepage slider
    
    $('.slider').slick({
      infinite: true,
      autoplay: true,
      arrows: false,
      autoplaySpeed:5000,
      speed: 500,
      fade: true,
      slide: 'div',
      cssEase: 'linear',
      adaptiveHeight: true
  });
    

    //Initialize the client carousel
    $('.client-list').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
    });

});
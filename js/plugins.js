$(document).ready(function() {
    'use strict';
    //add style to Active link
    $('.navbar-nav>li>a').click(function(){
        $(this).parent().addClass('theactive').siblings().removeClass('theactive');
    });
    //hiddenWhileScroll
    $(window).scroll(function(){
       if($(this).scrollTop()>60){
          $('.menu').addClass('strct');
       }else{
          $('.menu').removeClass('strct');
       }
    });
    //Show nav
    $('.fa-bars').click(function(){
        $('.thenav').css('left','0');
    });
    //close nav
    $('#close').click(function(){
        $('.thenav').css('left','-500px');
    });
    //show search
    $('.sear .fa-search').click(function(){
        $('form').css('opacity','1');
        $('form input').css('width','400px');
    });
    //close search
    $('form .fa').click(function(){
        $('form input').css('width','250px');
        $('form').css('opacity','0');
    });
    //Owl_Carousel
    $("#slider,#slider2,#slider3").owlCarousel({
        margin: 20,
        items: 5,
        nav: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:false
            }
        }
    });
    //Rating
    $('#example,#example2,#example3').barrating({
        theme: 'fontawesome-stars'
    });
});
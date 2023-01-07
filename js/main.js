$(document).ready(function(){

  $('.fa-bars').click(function(){
  	$(this).toggleClass('fa-times');
  	$('.nav').toggleClass('nav-toggle');
  });
  $(window).on('load scroll', function(){

   $('.fa-bars').removeClass('fa-times');
  	$('.nav').removeClass('nav-toggle');

  	if($(window).scrollTop() > 10){
  	  $('header').addClass('header-active');
  	}else{
  	  $('header').removeClass('header-active');	
  	}

  });

  $(window).scroll(function(){
    // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 2,
                nav: false
            }
        }
    });
});


jQuery(document).ready(function($) {
  /*loadpage*/
  "use strict";
  setTimeout(function() {
      jQuery('.loadpage').hide();
  }, 100);

  "use strict";
  lightGallery(document.getElementById('lightgallery'));

  "use strict";
  jQuery(window).trigger('resize').trigger('scroll');
  jQuery('.main-interested-event').parallax({imageSrc: 'images/ground-interested-event.jpg'});
  jQuery('.main-conference-event').parallax({imageSrc: 'images/banner-conference.jpg',});
  jQuery('.venues-img').parallax({imageSrc: 'images/venues.jpg',});
  jQuery('.parallax-pricing').parallax({imageSrc: 'images/banner-pricing-table.jpg',});
  jQuery('.main2-ticket-prices').parallax({imageSrc: 'images/banner-pricing-table.jpg',});
  jQuery('.main-subscribe-newsletter').parallax({imageSrc: 'images/banner-conference.jpg',});
  jQuery('.main2-register-now').parallax({imageSrc: 'images/register-now.jpg',});
  jQuery('.page-heading').parallax({imageSrc: 'images/banner-page1.png',});

  "use strict";
  jQuery(window).bind('resize', function() {
  clearTimeout(timer);
  var timer = setTimeout(function(){ $(window).resize(); }, 80);
  });

//scroll menu
  "use strict";
    var scroll_menu = jQuery(window).scrollTop();

    if(scroll_menu > 0){
      jQuery('.site-header1').hide();
      jQuery('.site-header').addClass('menuScroll');
      jQuery('.site-header').addClass('fadeInDown');
    }else{
      jQuery('.site-header1').show();
      jQuery('.site-header').removeClass('menuScroll');
      jQuery('.site-header').removeClass('fadeInDown');
    }

    jQuery(window).scroll(function(event) {
      "use strict";
        var scroll_menu = jQuery(window).scrollTop();

        if(scroll_menu > 0){
          jQuery('.site-header1').hide();
          jQuery('.site-header').addClass('menuScroll');
          jQuery('.site-header').addClass('fadeInDown');
        }else{
          jQuery('.site-header1').show();
          jQuery('.site-header').removeClass('menuScroll');
          jQuery('.site-header').removeClass('fadeInDown');
        }          
    });

    // slider venues
    jQuery(".control-item ul li img").on('click',function(){
        "use strict";
        var value = jQuery(this).attr("data-filter");

        jQuery('.filter').not("."+value).removeClass('active');
        jQuery('.filter').filter("."+value).addClass('active');
        jQuery('.filter').filter("."+value).addClass('active');
        jQuery(".filter:nth-child(1)").addClass('none');

        jQuery(".control-item ul li img").removeClass('active');
        jQuery(this).addClass('active');

    });
    
    "use strict";  
    var n = 1;

    function loop(){ 
      "use strict";
       jQuery('.filter').addClass('none');
       jQuery('.filter').removeClass('active');
       jQuery('.img'+n).addClass('active');

       jQuery(".control-item ul li img").addClass('none');
       jQuery(".control-item ul li img").removeClass('active');
       jQuery(".control-item ul li:nth-child("+n+") img").addClass('active');

       n++;

       if(n >= 5){
        n = 1;
       }
    }


    loop();
  setInterval(loop, 5000);


  //slider singleshop
  jQuery('#product .product-slide .img-small img').on('click', function($) {
      "use strict";
      var value2 = jQuery(this).attr("data-filter2");

      jQuery('#product .product-slide .img-small img').addClass('none');
      jQuery('.filter2').not("."+value2).removeClass('active');
      jQuery('.filter2').filter("."+value2).addClass('active');
       
  });

  //back to top
  jQuery(document).scroll(function($){
    "use strict";
    if(jQuery(document).scrollTop() >= 900) {
      jQuery('#to-top').fadeIn();
    }else{
      jQuery('#to-top').fadeOut();
    }
  });

  jQuery('#to-top').click(function($){
    "use strict";
    jQuery('body, html').animate({scrollTop: 0}, 1000);
  });

  //fix resize
  "use strict";
  jQuery(window).trigger('resize').trigger('scroll');

  //conference schedule
  "use strict";
  jQuery('.tab').hide();
  jQuery('.tab1').show();
  jQuery('.tabsmall').hide();
  jQuery('.tabsmall1').show();
  

  jQuery('.main-conference-schedule .tab-schedule .menu-tab-schedule ul li').on('click',function(event) {
    "use strict";
    jQuery('.main-conference-schedule .tab-schedule .menu-tab-schedule ul li').removeClass('active');
    jQuery(this).addClass('active');
  });

  jQuery('.main-conference-schedule .tab-schedule .menu-tab-schedule ul li:nth-child(1)').on('click',function(event) {
    "use strict";
    jQuery('.tab1').fadeIn();
    jQuery('.tab2').hide();
    jQuery('.tab3').hide();
  });

  jQuery('.main-conference-schedule .tab-schedule .menu-tab-schedule ul li:nth-child(2)').on('click',function(event) {
    "use strict";
    jQuery('.tab2').fadeIn();
    jQuery('.tab1').hide();
    jQuery('.tab3').hide();
  });

  jQuery('.main-conference-schedule .tab-schedule .menu-tab-schedule ul li:nth-child(3)').on('click',function(event) {
    "use strict";
    jQuery('.tab3').fadeIn();
    jQuery('.tab1').hide();
    jQuery('.tab2').hide();
  });

  jQuery('.main-conference-schedule .tab-schedule .content-tab-schedule .menu-small-tab-schedule ul li').on('click',function(event) {
    "use strict";
    jQuery('.main-conference-schedule .tab-schedule .content-tab-schedule .menu-small-tab-schedule ul li').removeClass('active');
    jQuery(this).addClass('active');
  });

  jQuery('.main-conference-schedule .tab-schedule .content-tab-schedule .menu-small-tab-schedule ul li:nth-child(1)').on('click',function(event) {
    "use strict";
    jQuery('.tabsmall1').fadeIn();
    jQuery('.tabsmall2').hide();
  });

  jQuery('.main-conference-schedule .tab-schedule .content-tab-schedule .menu-small-tab-schedule ul li:nth-child(2)').on('click',function(event) {
    "use strict";
    jQuery('.tabsmall2').fadeIn();
    jQuery('.tabsmall1').hide();
  });

  /*checkout*/
  jQuery('#click_here1').on('click',function(){
    "use strict";
    jQuery('.check-login').slideToggle();
    return false;
  });

  jQuery('#click_here2').on('click',function(){
    "use strict";
    jQuery('.check-code').slideToggle();
    return false;
  });


  jQuery(document).on('change', '#check-create', function() {
    "use strict";
    if(this.checked) {
      jQuery('.content-p').slideDown();
    }else{
      jQuery('.content-p').slideUp();
    }
  });

  /*search*/
   jQuery('#search-click').on('click', function(event) {
      "use strict";
      jQuery('.close-search').fadeIn();
      jQuery('.search').css('visibility', 'visible');
      jQuery('.search-field').removeClass('none-search');
      jQuery('.search-field').addClass('block-search');
      return false;
    });
    jQuery('.close-search').on('click', function(event) { 
      "use strict"; 
      jQuery('.close-search').hide();
      jQuery('.search').css('visibility', 'hidden');
      jQuery('.search-field').removeClass('block-search');
      jQuery('.search-field').addClass('none-search');
      return false;
    })

    //number count up
    $('.counterUp').each(function() {
    "use strict";
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }

    });   

  });

    //Event Information count up
    $('.countup2').each(function() {
      "use strict";
      var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }

    });   

  });

//slider home4 count up
    $('.countup4').each(function() {
      "use strict";
      var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 3000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
        //alert('finished');
      }

    });   

  });

    // slider
  "use strict";
  var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        loop:true,
        effect: 'fade',
        autoplay:5000
    });

  //datepicker event search
    $('.datepicker').datepicker();

//lastest event
  "use strict";
  jQuery('.iso-main').isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows',
    rowHeight:  113,
  });

  jQuery('.iso-menu ul li').click(function($) {
    "use strict";
    jQuery('.iso-menu ul li').removeClass('active');
    jQuery(this).addClass('active');

    var selector = jQuery(this).attr('data-filter');

    jQuery('.iso-main').isotope({ filter: selector });

    return false;
  });


    jQuery('.select-filter').on('change',function ($) {
      "use strict";
      var selector2 = jQuery(this).val();

    jQuery('.iso-main').isotope({ filter: selector2 });
    });

// event menu
   jQuery('.site-header2 .site-header-menu .main-cart .nav-bar li:nth-child(3)').on('click',function(event) {
    "use strict";
     jQuery('.main-menu-home1').fadeToggle();
   });
   jQuery('.site2-header .menu-hide ul li:last-child').on('click',function(event) {
    "use strict";
     jQuery('.site2-header .fix-menu').fadeToggle();
   });


   jQuery('.site-header2 .site-header-menu .main-menu .nav-bar li').on('click',function(event) {
    "use strict";
      jQuery(this).find('.sub-menu').slideToggle();
      jQuery(this).find('i.fa.fa-angle-down').toggle();
      jQuery(this).find('i.fa.fa-angle-up').toggle();
   });

   jQuery('.site2-header .main-menu ul li').on('click',function(event) {
    "use strict";
      jQuery(this).find('.sub-menu').slideToggle();
      jQuery(this).find('i.fa.fa-angle-down').toggle();
      jQuery(this).find('i.fa.fa-angle-up').toggle();
   });

//conference schedule click
  jQuery('.main2-conference-schedule .nav-tabs a').on('click',function(event) {
    "use strict";
    jQuery('.main2-conference-schedule .nav-tabs a').removeClass('active');
    jQuery(this).addClass('active');

  });

//our venues
if(! $.isFunction('owlCarousel')){
  jQuery('#owl-venues').owlCarousel({
    loop:true,
    autoplay: 5000,
    navigation:false,
    duration: 10,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        }
        ,
        1000:{
            items:1
        }
    },
  });
  var venues = jQuery('#owl-venues').owlCarousel();
  jQuery(".venues-prev").click(function ($) {
      venues.trigger('prev.owl.carousel');
  });

  jQuery(".venues-next").click(function ($) {
      venues.trigger('next.owl.carousel');
  });
}

//latest posts
if(! $.isFunction('owlCarousel')){ 
    jQuery('#owl-latest-posts').owlCarousel({
      loop:true,
      autoplay: 5000,
      navigation:false,
      duration: 10,
      responsive:{
          0:{
              items:1
          },
          767:{
              items:1
          }
          ,
          1000:{
              items:1
          }
      },
    });

    var lastest1 = jQuery('#owl-latest-posts').owlCarousel();
    jQuery(".latest-post-prev").click(function () {
        lastest1.trigger('prev.owl.carousel');
    });

    jQuery(".latest-post-next").click(function () {
        lastest1.trigger('next.owl.carousel');
    });
}


//lastest post tech event
if(! $.isFunction('owlCarousel')){
  jQuery('#owl-latest-post-tech-event').owlCarousel({
    loop:true,
    autoplay: 5000,
    navigation:false,
    duration: 10,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:2
        }
        ,
        1000:{
            items:3
        }
    },
  });
  var lastest2 = jQuery('#owl-latest-post-tech-event').owlCarousel();
  jQuery(".control-lastest-post-prev").click(function ($) {
      lastest2.trigger('prev.owl.carousel');
  });

  jQuery(".control-lastest-post-next").click(function ($) {
      lastest2.trigger('next.owl.carousel');
  });

}

//Our speakers
if(! $.isFunction('owlCarousel')){
  jQuery('#owl-speakers').owlCarousel({
      loop:true,
      autoplay: 5000,
      navigation:false,
      duration: 10,
      responsive:{
          0:{
              items:1
          },
          767:{
              items:3
          }
          ,
          1000:{
              items:4
          }
      },
    });
    var speakers = jQuery('#owl-speakers').owlCarousel();
    jQuery(".prev-speakers").click(function () {
        speakers.trigger('prev.owl.carousel');
    });

    jQuery(".next-speakers").click(function () {
        speakers.trigger('next.owl.carousel');
    });
}

  
if(! $.isFunction('owlCarousel')){
  //testimonials
  jQuery('#owl-testimonials').owlCarousel({
    loop:true,
    // autoplay: 5000,
    navigation:false,
    duration: 10,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        }
        ,
        1000:{
            items:1
        }
    },
  });

  var test1 = jQuery('#owl-testimonials').owlCarousel();
  jQuery(".prev-speakers").click(function () {
      test1.trigger('prev.owl.carousel');
  });

  jQuery(".next-speakers").click(function () {
      test1.trigger('next.owl.carousel');
  });
}

  
 if(! $.isFunction('owlCarousel')){
  //testimonials home3
  jQuery('#owl-testimonials2').owlCarousel({
    loop:true,
    autoplay: 5000,
    navigation:false,
    duration: 10,
    responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        }
        ,
        1000:{
            items:1
        }
    },
  });
 }   



});

wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       false,       // default
        live:         false        // default
    }
)
wow.init();

//faq
$(function() {
    jQuery(".expand").on( "click", function($) {
        "use strict";
        // $(this).next().slideToggle(200);
        var expand = jQuery(this).find(">:first-child");

        if(expand.text() == "+") {
            expand.text("-");
        } else {
            expand.text("+");
        }
    });
});








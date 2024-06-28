(function ($) {
  'use strict';



  $(document).ready(function () {
    var button = $(".menu-open");
    var menu_wrap = $("#menu_wrap,.menu-wrap");
    var bar_close = $("#bar_close");
    button.click(function () {
      if (menu_wrap.hasClass("open-mobilemenu")) {
        bar_close.removeClass("ti-close").addClass("ti-align-justify");
        menu_wrap.removeClass("open-mobilemenu");
      } else {
        menu_wrap.addClass("open-mobilemenu");
        bar_close.removeClass("ti-align-justify").addClass("ti-close");
      }
    });
  });



  /* submenu-open js */
  document.addEventListener('DOMContentLoaded', function () {
    var submenuOpenItems = document.querySelectorAll('.submenu-open');

    submenuOpenItems.forEach(function (item) {
      item.addEventListener('click', function () {
        this.classList.toggle('active');

        submenuOpenItems.forEach(function (otherItem) {
          if (otherItem !== item) {
            otherItem.classList.remove('active');
          }
        });
      });
    });
  });





  /* brand_slider  */
  $('.brand_slider').slick({
    // infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 399,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });




  /* testimonial_slider */
  $('.testimonial_slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
  });

  /*   testimonial_slider_s3 */
  $('.testimonial_slider_s3').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }

    ]
  });







  /* top to bottom js */
  var btn = $('#button');

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });



  /* WATCH VIDEO */

  $('.popup-youtube').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  /*   counter UP */
  $(document).ready(function () {
    $('.count').counterUp({
      delay: 10,
      time: 1500
    });
  });

  /*brand-slider-s2*/
  if ($(".brand-slider-s2").length) {
    $(".brand-slider-s2").owlCarousel({
      autoplay: false,
      smartSpeed: 300,
      loop: false,
      autoplayHoverPause: true,
      dots: false,
      arrows: false,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },

        500: {
          items: 3,
        },

        768: {
          items: 4,
        },

        1200: {
          items: 4,
        },

        1400: {
          items: 5,
        },
      },
    });
  }



  /* servces-slider */
  if ($(".servces-slider").length) {
    $(".servces-slider").owlCarousel({
      autoplay: true,
      smartSpeed: 300,
      margin: 20,
      loop: true,
      autoplayHoverPause: true,
      dots: false,
      arrows: false,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },

        500: {
          items: 2,
        },

        768: {
          items: 3,
        },

        1200: {
          items: 4,
        },

        1400: {
          items: 4,
        },
      },
    });
  }

  /* brand-slider */
  if ($(".brand-slider").length) {
    $(".brand-slider").owlCarousel({
      autoplay: true,
      smartSpeed: 300,
      loop: true,
      autoplayHoverPause: true,
      dots: false,
      nav: false,
      responsive: {
        0: {
          items: 2,
        },

        500: {
          items: 3,
        },

        768: {
          items: 4,
        },

        1200: {
          items: 4,
        },

        1400: {
          items: 5,
        },
      },
    });
  }



  /* 	text-slider */

  $(".gallery").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 15000,
    pauseOnHover: false,
    cssEase: "linear",
    responsive: [{
        breakpoint: 1500,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });



  /*testimonial-slider*/
  if ($(".testimonial-slider-s2").length) {
    $(".testimonial-slider-s2").owlCarousel({
      autoplay: false,
      smartSpeed: 300,
      loop: true,
      autoplayHoverPause: true,
      dots: true,
      nav: false,
      navText: [
        '<i class="ti-arrow-left"></i>',
        '<i class="ti-arrow-right"></i>',
      ],
      items: 1,
    });
  }

  /*project-slider*/
  if ($(".project-slider").length) {
    $(".project-slider").owlCarousel({
      autoplay: true,
      // smartSpeed: 300,
      loop: true,
      autoplayHoverPause: true,
      dots: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },

        768: {
          items: 2,
        },
        992: {
          items: 1,
        },

        1550: {
          items: 1,
        },

        1570: {
          items: 2,
        },
      },
    });
  }

  /* testimonial-slider-s3 */
  if ($(".testimonial-slider-s3").length) {
    $(".testimonial-slider-s3").owlCarousel({
      autoplay: false,
      smartSpeed: 300,
      margin: 20,
      loop: true,
      autoplayHoverPause: true,
      dots: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          dots: true,
          nav: false,
        },

        500: {
          items: 1,
          dots: true,
          nav: false,
        },

        768: {
          items: 2,
        },

        1200: {
          items: 2,
        },

        1400: {
          items: 2,
        },
      },
    });
  }

  /* brand-slider-s2*/
  if ($(".brand-slider-s2").length) {
    $(".brand-slider-s2").owlCarousel({
      autoplay: false,
      smartSpeed: 300,
      loop: true,
      autoplayHoverPause: true,
      dots: false,
      arrows: false,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },

        500: {
          items: 3,
        },

        768: {
          items: 4,
        },

        1200: {
          items: 4,
        },

        1400: {
          items: 5,
        },
      },
    });
  }



  /*   wow js */

  var wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
  });

  //active wow
  wow.init();








})(jQuery)
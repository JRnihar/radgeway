(function ($) {
  $(document).ready(function () {
    //mobile menu active
    if ($("#mobile-menu").length > 0) {
      //Mobile menu
      $("#mobile-menu").meanmenu({
        meanMenuContainer: ".mobile-menu",
        meanScreenWidth: "991",
      });

      $(".mobile-menu-bar").on("click", function () {
        $(".sidebar-main").addClass("active");
      });
      $(".sidebar-close").on("click", function () {
        $(".sidebar-main").removeClass("active");
      });
    }

    //Video poppup
    if ($(".play-btn").length > 0) {
      $(".play-btn").magnificPopup({
        type: "iframe",
      });
    }

       // counter-up
       $(".counter").countUp();

    //Post gallary slider
    const blog_gallary = $(".gallary-slider");
    if (blog_gallary.length > 0) {
      //Blog Gallary
      blog_gallary.owlCarousel({
        loop: true,
        autoHeight: true,
        nav: true,
        navText: [
          "<i class='fa-solid fa-angle-left'></i>",
          "<i class='fa-solid fa-angle-right'></i>",
        ],
        dots: false,
        items: 1,
      });
    }

    // sticky header active
    if ($("#header").length > 0) {
      $(window).on("scroll", function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header").removeClass("sticky");
        } else {
          $("#header").addClass("sticky");
        }
      });
    }

    
    // sticky header active
    if ($("#header2").length > 0) {
      $(window).on("scroll", function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header2").removeClass("sticky2");
        } else {
          $("#header2").addClass("sticky2");
        }
      });
    }

    //demo sidebar active
    const demosIcon = $("#demosIcon, .demos");
    const demoSidebar = $("#demo-sidebar");
    demosIcon.on("click", function (e) {
      e.preventDefault();
      demoSidebar.toggleClass("active-sidebar");
    });
  });

      // pricing-plan-tab
      $("#ce-toggle").click(function (event) {
        $(".plan-toggle-wrap").toggleClass("active");
      });
  
      $("#ce-toggle").change(function () {
        if ($(this).is(":checked")) {
          $(".tab-content #yearly").hide();
          $(".tab-content #monthly").show();
        } else {
          $(".tab-content #yearly").show();
          $(".tab-content #monthly").hide();
        }
      });
  
      $(".trusred-slider-all").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        // autoplay: true,
        // autoplayTimeout: 3000,
        items: 1,
        autoplay: true,
       autoplayTimeout: 5000,
      smartSpeed: 1000,
      slideSpeed: 600,
        navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
      });

        //owl-carousel-slider-aobut-page
        $(".slider-all").owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          dots: true,
          smartSpeed: 1000,
          slideSpeed: 600,
          responsive: {
            0: {
              items: 1,
            },
            900: {
              items: 4,
            },
          },
        });


     // home3 featured slider testimonial
     $(".featured-slider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 6000,
      smartSpeed: 1500,
      slideSpeed: 600,
      navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
      responsive: {
        0: {
          items: 1,
        },
        900: {
          items: 3.4,
        },
      },
    });

     // home3 tistimonial slider testimonial
     $(".testimonial-slider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      // autoplay: true,
      // autoplayTimeout: 6000,
      smartSpeed: 1500,
      slideSpeed: 600,
      navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
      responsive: {
        0: {
          items: 1,
        },
        900: {
          items: 2,
        },
      },
    });

         // home3 tistimonial rtl slider testimonial
         $(".testimonial-slider-rtl").owlCarousel({
          loop: true,
          margin: 10,
          nav: true,
          dots: false,
          // autoplay: true,
          // autoplayTimeout: 6000,
          
          smartSpeed: 1500,
          slideSpeed: 600,
          navText: ['<i class="fa-solid fa-arrow-right"></i>', '<i class="fa-solid fa-arrow-left"></i>'],
          rtl: true,
          responsive: {
            0: {
              items: 1,
            },
            900: {
              items: 2,
            },
          },
        });

    // home3 tistimonial slider testimonial
    $(".tes2-slider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      // autoplay: true,
      // autoplayTimeout: 6000,
      smartSpeed: 1500,
      slideSpeed: 600,
      navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
      responsive: {
        0: {
          items: 1,
        },
        900: {
          items: 2,
        },
      },
    });

    // home4 tistimonial slider testimonial
    $(".tes4-slider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      // autoplay: true,
      // autoplayTimeout: 6000,
      smartSpeed: 1500,
      slideSpeed: 600,
      navText: ['<i class="fa-solid fa-arrow-right"></i>', '<i class="fa-solid fa-arrow-left"></i>'],
      responsive: {
        0: {
          items: 1,
        },
        900: {
          items: 3,
        },
      },
    });


    // home5 tistimonial slider testimonial
    $(".testimonial5-slider-all").owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: true,
      // autoplay: true,
      // autoplayTimeout: 6000,
      smartSpeed: 1500,
      slideSpeed: 600,
      responsive: {
        0: {
          items: 1,
        },
        900: {
          items: 3,
        },
      },
    });

        // home5 tistimonial slider testimonial
        $(".tes7-slider-all").owlCarousel({
          loop: true,
          margin: 10,
          nav: false,
          dots: true,
          // autoplay: true,
          // autoplayTimeout: 6000,
          smartSpeed: 1000,
          slideSpeed: 600,
          responsive: {
            0: {
              items: 1,
            },
            900: {
              items: 2.7,
            },
          },
        });




                // home5 tistimonial slider testimonial
                $(".hero13-fram-slider").owlCarousel({
                  loop: true,
                  margin: 10,
                  nav: false,
                  dots: true,
                  // autoplay: true,
                  // autoplayTimeout: 6000,
                  smartSpeed: 1000,
                  slideSpeed: 600,
                  responsive: {
                    0: {
                      items: 1,
                    },
                    900: {
                      items: 1,
                    },
                  },
                });


  // jQuery('.stellarnav').stellarNav();

  $('.slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.foter-carousel',
    dots: false,
    loop:true,
    centerMode: false,
    focusOnSelect: true,
    arrows: false,
 });
 

 $('.foter-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: $('.testimonial-prev-arrow'),
    nextArrow: $('.testimonial-next-arrow'),
    fade: true,
    loop:true,
    asNavFor: '.slider-nav',
    autoplay: true,
    autoplaySpeed: 2000,
   });


    /*--------------------------------------------------------------
    17. Hover To Active
  --------------------------------------------------------------*/
    $('.cs_hover_active').hover(function () {
      $(this).addClass('active').siblings().removeClass('active');
    });


     // sticky header active
     if ($("#header").length > 0) {
      $(window).on("scroll", function (event) {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
          $("#header").removeClass("sticky");
        } else {
          $("#header").addClass("sticky");
        }
      });
    }

    // home page slider

    $('.homepage-slides').owlCarousel({
      items: 1,
      dots: true,
      nav: false,
      loop: true,
       autoplay: true,
       autoplayTimeout: 5000,
      smartSpeed: 2000,
      slideSpeed: 600,
       //animateOut: 'slideOutDown',
       //animateIn: 'flipInX',
      navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
      responsive: {
        0: {
          items: 1,
          nav: false,
          dots: false,
          
        },
        600: {
          items: 1,
          nav: false,
          dots: false,
          
        },
        768: {
          items: 1,
          
        },
        1100: {
          items: 1,					
        }
      }
    });

      // check redio
  const color = $(".checkout-input-selact");

  color.on("click", function () {
    $(".checkout-input-selact").removeClass("active");
    $(this).addClass("active");
  });

        // btn_theme
        $(function() {  
          $('.btn_theme')
            .on('mouseenter', function(e) {
                    var parentOffset = $(this).offset(),
                      relX = e.pageX - parentOffset.left,
                      relY = e.pageY - parentOffset.top;
                    $(this).find('span').css({top:relY, left:relX})
            })
            .on('mouseout', function(e) {
                    var parentOffset = $(this).offset(),
                      relX = e.pageX - parentOffset.left,
                      relY = e.pageY - parentOffset.top;
                $(this).find('span').css({top:relY, left:relX})
            });
        });
        
  
    $(".homepage-slides").on("translate.owl.carousel", function () {
      $(".single-slide-item h3")
              .removeClass("animated fadeInUp")
              .css("opacity", "1");
          $(".single-slide-item h1")
              .removeClass("animated fadeInDown")
              .css("opacity", "1");        
          $(".single-slide-item p")
              .removeClass("animated fadeInUp")
              .css("opacity", "1");
          $(".single-slide-item .main-btn")
              .removeClass("animated fadeInDown")
              .css("opacity", "1");
      });
  
      $(".homepage-slides").on("translated.owl.carousel", function () {
      $(".single-slide-item h3")
              .addClass("animated fadeInUp")
              .css("opacity", "1");
          $(".single-slide-item h1")
              .addClass("animated fadeInDown")
              .css("opacity", "1");        
          $(".single-slide-item p")
              .addClass("animated fadeInUp")
              .css("opacity", "1");
          $(".single-slide-item .main-btn")
              .addClass("animated fadeInDown")
              .css("opacity", "1");
      });
  


    

  // home4-header-video
  // new ModalVideo(".video-action-btn1");

  $('.popup-youtube').magnificPopup({
    type: 'iframe'
  });

  // pricing-plan-tab
  $("#ce-toggle").click(function (event) {
    $(".plan-toggle-wrap").toggleClass("active");
  });

  $("#ce-toggle").change(function () {
    if ($(this).is(":checked")) {
      $(".tab-content #yearly").hide();
      $(".tab-content #monthly").show();
    } else {
      $(".tab-content #yearly").show();
      $(".tab-content #monthly").hide();
    }
  });

  // minus

  // $(".minus").click(function () {
  //   var $input = $(this).parent().find("input");
  //   var count = parseInt($input.val()) - 1;
  //   count = count < 1 ? 1 : count;
  //   $input.val(count);
  //   $input.change();
  //   return false;
  // });

  // $(".plus").click(function () {
  //   var $input = $(this).parent().find("input");
  //   $input.val(parseInt($input.val()) + 1);
  //   $input.change();
  //   return false;
  // });

      //minus

      var buttonPlus = $(".qty-btn-plus");
      var buttonMinus = $(".qty-btn-minus");
  
      var incrementPlus = buttonPlus.click(function () {
        var $n = $(this).parent(".qty-container").find(".input-qty");
        $n.val(Number($n.val()) + 1);
      });
  
      var incrementMinus = buttonMinus.click(function () {
        var $n = $(this).parent(".qty-container").find(".input-qty");
        var amount = Number($n.val());
        if (amount > 0) {
          $n.val(amount - 1);
        }
      });



      //Product slider
      $(".product-slider-single").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: ".product-slider-nav",
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
      });
  
      $(".product-slider-nav").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
  
        focusOnSelect: true,
        asNavFor: ".product-slider-single",
      });

          //product colors
    const colors = $("ul.product-colors li");

    colors.on("click", function () {
      $("ul.product-colors li").removeClass("active");
      $(this).addClass("active");
    });

           //product colors
           const size = $("ul.product-sizes li");

           size.on("click", function () {
             $("ul.product-sizes li").removeClass("active");
             $(this).addClass("active");
           });
  

    // page-progress
    var progressPath = document.querySelector(".progress-wrap path");
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "none";
    progressPath.style.strokeDasharray = pathLength + " " + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition =
      "stroke-dashoffset 10ms linear";
    var updateProgress = function () {
      var scroll = $(window).scrollTop();
      var height = $(document).height() - $(window).height();
      var progress = pathLength - (scroll * pathLength) / height;
      progressPath.style.strokeDashoffset = progress;
    };
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > offset) {
        jQuery(".progress-wrap").addClass("active-progress");
      } else {
        jQuery(".progress-wrap").removeClass("active-progress");
      }
    });
    jQuery(".progress-wrap").on("click", function (event) {
      event.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, duration);
      return false;
    });

    

    AOS.init({
      offset: 100,
      duration: 50,
      easing: "ease-in-out",
      anchorPlacement: "top-bottom",
      disable: "mobile",
    });

    $('select').niceSelect();


     //preloader
  $(window).on("load", function (event) {

    setTimeout(function() {
      $('#ctn-preloader').addClass('loaded');
      // Una vez haya terminado el preloader aparezca el scroll
      $('body').removeClass('no-scroll-y');
  
      if ($('#ctn-preloader').hasClass('loaded')) {
        // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
        $('#preloader').delay(1000).queue(function() {
          $(this).remove();
        });
      }
    }, 3000);

    // $('.tlt').textillate();

  });




  function _drawAnimated(v) {
    $(canvas).stop(true, true).css({ value: 0 }).animate({ value: v }, $.extend({}, options.animation, {
          step: function(p) {
              _draw(p);
              $(canvas).trigger('circle-animation-progress', [p / v, p]);
          },
  
          complete: function() {
              $(canvas).trigger('circle-animation-end');
          }
      }));
  }
  



  // $(window).on('load', function() {
  //   $('#visafast-preloader').addClass('loaded');
  //   $("#loading").fadeOut(500);
  //   // Una vez haya terminado el preloader aparezca el scroll

  //   if ($('#consua-preloader').hasClass('loaded')) {
  //     // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
  //     $('#preloader').delay(900).queue(function() {
  //       $(this).remove();
  //     });
  //   }
  // });

  




  // preloader
  // $(window).on("load", function (event) {
  //   setTimeout(function () {
  //     $("#preloader").fadeToggle();
  //   }, 1500);
  // });

  // $("select").niceSelect();


})(jQuery);


//line progress bar

let progress = $('#progress1').LineProgressbar({
  percentage: 90
});

let progress2 = $('#progress2').LineProgressbar({
  percentage: 80
});

let progress3 = $('#progress3').LineProgressbar({
  percentage: 92
});

// document.getElementById("animate").onclick = function () {
//   tl.restart();
// };

// function animateFrom(elem, direction) {
//   direction = direction || 1;
//   var x = 0,
//       y = direction * 100;
//   if(elem.classList.contains("gs_reveal_fromLeft")) {
//     x = -100;
//     y = 0;
//   } else if (elem.classList.contains("gs_reveal_fromRight")) {
//     x = 100;
//     y = 0;
//   }else if (elem.classList.contains("gs_reveal_fromBottom")) {
//     x = 0;
//     y = -100;
//   }
  
//   elem.style.transform = "translate(" + x + "px, " + y + "px)";
//   elem.style.opacity = "0";
//   gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
//     duration: 1.25, 
//     x: 0,
//     y: 0, 
//     autoAlpha: 1, 
//     ease: "expo", 
//     overwrite: "auto"
//   });
// }

// function hide(elem) {
//   gsap.set(elem, {autoAlpha: 0});
// }

// document.addEventListener("DOMContentLoaded", function() {
//   gsap.registerPlugin(ScrollTrigger);
  
//   gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
//     hide(elem); // assure that the element is hidden when scrolled into view
    
//     ScrollTrigger.create({
//       trigger: elem,
//       markers: false,
//       onEnter: function() { animateFrom(elem) }, 
//       onEnterBack: function() { animateFrom(elem, -1) },
//       onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
//     });
//   });
// });


// gsap.registerPlugin (ScrollTrigger);

// gsap.to(".square", {
// x: 100,
// duration: 3,
// scrollTrigger: {
// trigger: ".square", start: "top center",
// markers: true,
// }

// })


    // Price filtering
     (function () {
      var parent = document.querySelector("#rangeSlider");
      if (!parent) return;
    
      var rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");
    
      rangeS.forEach(function (el) {
        el.oninput = function () {
          var slide1 = parseFloat(rangeS[0].value),
            slide2 = parseFloat(rangeS[1].value);
    
          if (slide1 > slide2) {
            [slide1, slide2] = [slide2, slide1];
          }
    
          numberS[0].value = slide1;
          numberS[1].value = slide2;
        };
      });
    
      numberS.forEach(function (el) {
        el.oninput = function () {
          var number1 = parseFloat(numberS[0].value),
            number2 = parseFloat(numberS[1].value);
    
          if (number1 > number2) {
            var tmp = number1;
            numberS[0].value = number2;
            numberS[1].value = tmp;
          }
    
          rangeS[0].value = number1;
          rangeS[1].value = number2;
        };
      });
    })();



AOS.init({ once: true })
$(document).ready(function() {
  // Get the current page URL
  var url = window.location.href;

  // Add the 'active' class to the appropriate navbar link
  $('.navbar-nav .nav-link').each(function() {
    if (url === (this.href)) {
      $(this).addClass('active');
    }
  });

  // Add the 'active' class to the appropriate dropdown menu link
  $('.dropdown-item').each(function() {
    if (url === (this.href)) {
      $(this).addClass('active');
      $(this).parents('.nav-item').find('.nav-link').first().addClass('active');
    }
  });
});
$(window).scroll(function (e) {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
});

// <!-- Apps development services Start -->

$(document).ready(function () {
  var $slider = $('.slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $('.slider__label');

  $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var calc = ((nextSlide) / (slick.slideCount - 1)) * 100;

    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc);

    $progressBarLabel.text(calc + '% completed');
  });

  $slider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    rows: 2,
    speed: 800
  });
});
// <!-- Apps development services End -->



// multiple steps
$(document).ready(function () {
  $(".step .next").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.next().addClass("active_step");
  });
  $(".step .back").click(function () {
    let a = $(this).parents(".step");
    a.removeClass("active_step");
    a.prev().addClass("active_step");
  });
});




// testimonial slider start
// testimonial slider end

// banner left  slider start **************************************************
$('.ban-left-slider').slick({
  dots: false,
  infinite: true,
  loop:true,
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  speed: 500,
  autoplaySpeed: 2500,
  pauseOnHover:true,
  responsive: [
    {
      breakpoint: 1198,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// banner left  slider end **************************************************
// banner right  slider start **************************************************
$('.ban-right-slider').slick({
  dots: false,
  infinite: true,
  arrows: false,
  pauseOnHover:true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// banner left  slider end **************************************************
// services slider start **************************************************
$('.serv-slider').slick({
  dots: false,
  infinite: true,
  arrows: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        dots:true,
        arrows:false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
        arrows:false,
      }
    }
  ]
});
// services slider end **************************************************
// testimonial slider start **************************************************
$('.testi-slider').slick({
  dots: false,
  infinite: true,
  arrows: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  pauseOnHover:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows:false,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        arrows:false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
  ]
});
// testimonial slider end **************************************************

// counter js start **********************************************************************
jQuery(window).scroll(startCounter);
function startCounter() {
  var hT = jQuery('.expertise-count').offset().top,
    hH = jQuery('.expertise-count').outerHeight(),
    wH = jQuery(window).height();
  if (jQuery(window).scrollTop() > hT + hH - wH) {
    jQuery(window).off("scroll", startCounter);
    jQuery('.count').each(function () {
      var $this = jQuery(this);
      jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
          $this.text(Math.ceil(this.Counter));
        }
      });
    });
  }
}
// counter js end**********************************************************************





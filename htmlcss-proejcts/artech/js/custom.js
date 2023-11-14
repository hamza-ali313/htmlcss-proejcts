// AOS.init({
//   once: true
// })
// $(document).ready(function () {
//   var url = window.location.pathname;
//   var filename = url.substring(url.lastIndexOf('/') + 1);
//   if (filename == "") {
//     filename = "index.php"
//   }
//   $("header .nav-item .nav-link").removeClass("active");
//   $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
// });
// $(window).scroll(function (e) {
//   var scroll = $(window).scrollTop();
//   if (scroll >= 100) {
//     $("header").addClass("scroll");
//   } else {
//     $("header").removeClass("scroll");
//   }
// });


// herosection

$(document).ready(function () {
  $('#slider1').slick({
    dots: false,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    speed: 500,
    cssEase: 'linear',
    adaptiveHeight: true,
  });

  $('.slide-button').click(function () {
    var slideIndex = $(this).data('slide');
    $('#slider1').slick('slickGoTo', slideIndex);
  });
});

///

// slider active slide active number start
$(document).ready(function () {
  // Initialize the Slick Slider
  $('.hs-slider').slick({
    dots: false, // Disable default Slick dots
  });

  // Listen for slide change events
  $('.hs-slider').on('afterChange', function (event, slick, currentSlide) {
    // Remove the 'active' class from all number spans
    $('.slider-buttons button').removeClass('active');

    // Add the 'active' class to the current slide's corresponding number
    $('.slider-buttons button').eq(currentSlide).addClass('active');
  });
});

// slider active slide active number end
// remodeling section 
$(document).ready(function () {
  $('#slider2').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    cssEase: 'linear',
    // variableWidth: true,
  });
  $('#slider2').on('afterChange', function (event, slick, currentSlide) {
    // Get the total number of slides
    var slideCount = slick.slideCount;

    // Update the image numbering
    $('.image-numbering').html(`<span>${currentSlide + 1}</span> / ${slideCount}`);
  });
});

///

// faq start

$(document).ready(function () {
  const $accordionItemHeaders = $(".accordion-item-header");

  $accordionItemHeaders.on("click", function () {
    const $this = $(this);
    const $accordionItem = $this.closest(".accordion-item");

    $accordionItemHeaders.not($this).removeClass("active bg-change")
      .next().css("max-height", 0);

    $this.toggleClass("active bg-change");
    const $accordionItemBody = $this.next();

    $accordionItemBody.css("max-height", $this.hasClass("active") ?
      $accordionItemBody[0].scrollHeight + "px" :
      0
    );
  });

  $accordionItemHeaders.first().click();
});


// faq end

// pakages start

$('.design-pakages').slick({
  slidesToShow: 4,
  slidesToScroll: 3,
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 1000,
  speed: 1000,
  infinite: true,
  cssEase: 'linear',
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 2,
    }
  },
  {
    breakpoint: 925,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 2,
      centerMode: false,

    }
  },
  {
    breakpoint: 840,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      centerMode: true,

    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: false,

    }
  }
    // {
    //   breakpoint: 561,
    //   settings: {
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     centerMode: false,

    //   }
    // }
    // // You can unslick at a given breakpoint now by adding:
    // // settings: "unslick"
    // // instead of a settings object
  ]
});

// pakages end


// project section example 2 

$(function () {
  $('#carousel1').slick({
    infinite: false,
    variableWidth: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    swipe: true,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    cssEase: 'linear',
    infinite: true,
    responsive: [{
      breakpoint: 650,
      settings: {
        infinite: true,
        variableWidth: true,
      }
    }
      // {
      //   breakpoint: 600,
      //   settings: {
      //     slidesToShow: 2,
      //     slidesToScroll: 2
      //   }
      // },
      // {
      //   breakpoint: 480,
      //   settings: {
      //     slidesToShow: 1,
      //     slidesToScroll: 1
      //   }
      // }
      // // You can unslick at a given breakpoint now by adding:
      // // settings: "unslick"
      // // instead of a settings object
    ]
  });

  $('#carousel1').on('afterChange', function (event, slick, currentSlide, nextSlide) {
    console.log(currentSlide);
  });

  // Add an event listener to update the image numbering
  $('#carousel1').on('afterChange', function (event, slick, currentSlide) {
    // Get the total number of slides
    var slideCount = slick.slideCount;

    // Update the image numbering
    $('.image-numbering1').html(`<span>${currentSlide + 1}</span> / ${slideCount}`);
  });
});

// 


// remodeling section 
$(document).ready(function () {
  $('#slider4').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    cssEase: 'linear',
    // variableWidth: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          // arrows: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        }
      }
    ]
  });

  $('#slider4').on('afterChange', function (event, slick, currentSlide) {
    // Get the total number of slides
    var slideCount = slick.slideCount;

    // Update the image numbering
    $('.image-numbering3').html(`<span>${currentSlide + 1}</span> / ${slideCount}`);
  });
});

///

$(document).ready(function () {
  $('#slider5').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    speed: 1000,
    cssEase: 'linear',
    // variableWidth: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          // arrows: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        }
      }
    ]
  });

  $('#slider5').on('afterChange', function (event, slick, currentSlide) {
    // Get the total number of slides
    var slideCount = slick.slideCount;

    // Update the image numbering
    $('.image-numbering3').html(`<span>${currentSlide + 1}</span> / ${slideCount}`);
  });
});


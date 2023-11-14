AOS.init({ once: true })
$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "index.php"
  }
  $("header .nav-item .nav-link").removeClass("active");
  $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
});
$(window).scroll(function (e) {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
});



// first slider start js

$('.first-slider').slick({
  slidesToShow: 1,
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 7,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

// first slider end js


// footer-up-slider start js

$('.footer-up-slider').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 1,
  cssEase: 'linear',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    }
  ]
});

// footer-up-slider end js

// faq table of contents js start
$(function () {
  $(".button").click(function (e) {
    e.preventDefault();
    $(".faq-dropdownList").slideToggle(500);
    $(".fa-chevron-down").toggleClass("active");
  });
});

// faq table of contents js end
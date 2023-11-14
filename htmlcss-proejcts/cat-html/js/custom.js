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


// Get the parent element with the class "main-heading"
const mainHeading = document.querySelector('.main-heading');

// Get all the <span> elements within the "main-heading" element
const spans = mainHeading.querySelectorAll('span');

let currentSpan = 0;

function setActiveClass() {
  // Remove the "active" class from the current span
  spans[currentSpan].classList.remove('active');

  // Move to the next span, wrapping around if needed
  currentSpan = (currentSpan + 1) % spans.length;

  // Add the "active" class to the new current span
  spans[currentSpan].classList.add('active');
}

// Initially set the "active" class on the first span
spans[currentSpan].classList.add('active');

// Call the setActiveClass function every second (1000 milliseconds)
setInterval(setActiveClass, 1500);

$('.testimonial-slide').slick({
  dots: true,
  infinite: false,
  speed: 1300,
  slidesToShow: 1,
  slidesToScroll: 1,
});


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


// what we do section

const section = document.getElementById('whatwe');
const card = document.getElementById('activeCard');

section.addEventListener('mouseenter', () => {
  card.classList.remove('active');
});

section.addEventListener('mouseleave', () => {
  card.classList.add('active');
});


// company logo

// JavaScript code for toggling detail elements
const comLogos = document.querySelectorAll('.com-logo');
const detailElements = document.querySelectorAll('.detail');

comLogos.forEach(comLogo => {
  comLogo.addEventListener('click', () => {
    const detailId = comLogo.getAttribute('data-detail');
    detailElements.forEach(detail => {
      if (detail.id === detailId) {
        detail.style.display = 'block';
      } else {
        detail.style.display = 'none';
      }
    });
  });
});

// testimonial slider start
// testimonial slider end
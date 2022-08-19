$(document).ready(function () {
  $('.faqPack .collapsible').collapsible();
  // start project section in home page
  $(".proSec .tabs").tabs();
  // end project section in home page
  $('.sidenav').sidenav();
  $('.dropdown-trigger').dropdown();
  $('.owl-carousel.packagingCaro').owlCarousel({
    loop: true,
    nav: true,
    margin: 30,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  $('.owl-carousel.logoCaro').owlCarousel({
    loop: true,
    nav: true,
    margin: 30,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });
  $('.owl-carousel.creativCaro').owlCarousel({
    loop: true,
    nav: true,
    margin: 30,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });
  $('#pkajingSlid').owlCarousel({
    loop: true,
    nav: true,
    margin: 20,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 4,
      },
      1200: {
        items: 6,
      },
    },
  });
  $('.serSec .owl-carousel').owlCarousel({
    center: true,
    loop: true,
    nav: true,
    margin: 30,
    lazyLoad: true,
    responsive: {
      0: {
        items: 3,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });
  $('.casStudSec .owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    margin: 30,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      768: {
        items: 3,
      },
      1201: {
        items: 4,
      },
    },
  });
  // start career
  $('#OpenImgUpload').click(function () {
    $('#imgupload').trigger('click');
  });
  // end career
  $(".marqSec .owl-carousel").owlCarousel({
    loop: true,
    margin: 150,
    nav: true,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
  if ($(window).width() < 600) {
    $(".fixedWhatsapp").hide();
  }
  if ($(window).width() < 991) {
    $(".navSticky").css("background", "transparent");
  }
  $('#queryModal').modal();
  $('#careerModal').modal();
  $('#txtaudit').formSelect();
  $('.creatingSlider .owl-carousel').owlCarousel({
    loop: true,
    nav: true,
    margin: 20,
    lazyLoad: true,
    autoplay: true,
    responsive: {
      0: {
        items: 3,
        margin: 5,
      },
      600: {
        items: 3,
        margin: 10,
      },
      1200: {
        items: 5,
      },
    },
  });
});
$(document).ready(function () {
  // start sticky header
  var stickyNavTop = $('.navSticky').offset().top;
  var stickyNav = function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) {
      $('.navSticky').addClass('sticky');
    } else {
      $('.navSticky').removeClass('sticky');
    }
  };
  stickyNav();
  $(window).scroll(function () {
    stickyNav();
  });
  // end sticky header
});
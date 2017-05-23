$(document).ready(function () {

  // FullPageJS init
  $('#fullpage').fullpage({
    anchors: ['page-products', 'page-about-us', 'page-locations', 'page-contact']
  })

  // Hamburger click actions
  var mainMenu = $('#menu'),
    menuItems = $('.menu--mobile__list__item'),
    menuTrigger = $('#menu-trigger')

  $(menuTrigger).click(function () {
    $(this).toggleClass('is-active')
    $(mainMenu).toggleClass('menu--open')

    if ($(mainMenu).hasClass('menu--open')) {
      $(menuItems).each(function (index) {
        var that = $(this)
        setTimeout(function () {
          that.addClass('animated')
        }, 25 * index)
      })
    } else {
      $(menuItems).removeClass('animated')
    }

    event.preventDefault()
  })

  // About us page slider
  $('.about-us__slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 2000,
    arrows: false,
    fade: true,
    dots: true,
    appendDots: '.about-us__navigation',
    appendArrows: '.about-us__navigation',
    customPaging: function (slider, i) {
      return '<a>0' + (i + 1) + '</a>'
    },
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          infinite: true,
          arrows: true,
          fade: false
        }
      }
    ]
  });

  // Popup tabs
  $('.tab-link').click(function () {
    var tab_id = $(this).attr('data-tab')

    $(this).siblings('.tab-link').removeClass('active')
    $(this).parent().siblings('.tab-content').removeClass('active')

    $(this).addClass('active')
    $('#' + tab_id).addClass('active')
  })

  // Products dynamic bubble effect
  // $('.stage').css('width', $('body').width()*2);
  // $('.stage').css('height', $('body').width()*2);

  // About us page slider
  $('.products-slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 2000,
    arrows: false,
    dots: true,
    fade: true,
    appendDots: '.products__navigation',
    appendArrows: '.products__navigation',
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          infinite: true,
          arrows: true,
          fade: false
        }
      }
    ],
    customPaging: function (slider, i) {
      return '<a>' + (i < 9 ? "0" : "") + (i + 1) + '</a>';
    }
  });

  $('.parallax').each(function(index, element) {
    var parallax = new Parallax(element);
  });


  $('.toggle').click(function() {
    var popupID = $(this).attr('data-popup');
    $('#popup-' + popupID).addClass('active').fadeIn();
  });

  $('.popup-close').click(function() {
    $(this).parents('.product-popup').fadeOut( function() {
      $(this).removeClass('active');
    });
  });


});
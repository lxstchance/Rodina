
//Отзывы
// $('.reviews__slider').slick({
//   dots: true,
//   infinite: true,
//   speed: 600,
//   slidesToShow: 3,
//   autoplay: true,
//   autoplaySpeed: 2000,
//   responsive: [
//    {
//      breakpoint: 900,
//      settings: {
//        slidesToShow: 2,
//        slidesToScroll: 2,
//        infinite: true,
//        dots: false
//      }
//    },
//    {
//      breakpoint: 768,
//      settings: {
//        slidesToShow: 1,
//        slidesToScroll: 1,
//        infinite: true,
//        dots: false,
//        arrows: false
//      }
//    }]
// })

//Отображение при прокрутке
$(document).on("scroll", window, function () {
    if ($(window).scrollTop()>600)
    {
        $(".scroll__top").show();
    }
    else
    {
        $(".scroll__top").hide();
    }
    });

//Скролл на верх
$(document).ready(function() {
    $('.scroll__top').click(function(e){
      e.preventDefault();
      $('html, body').animate({scrollTop: 0}, 'slow');
  })
});


// $('.work__items').on('init', function(event, slick){
//         AOS.init();
// });


//AOS
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 40, // offset (in px) from the original trigger point
  delay: 200, // values from 0 to 3000, with step 50ms
  duration: 2000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

const initializeScroll = function initializeScroll() {
  // Extend elements objects in $aosElements with their positions
  $aosElements = prepare($aosElements, options);
  // Perform scroll event, to refresh view and show/hide elements
  handleScroll($aosElements);

  /**
   * Handle scroll event to animate elements on scroll
   */
  window.addEventListener(
    'scroll',
    throttle(() => {
      handleScroll($aosElements, options.once);
    }, options.throttleDelay)
  );

  return $aosElements;
};

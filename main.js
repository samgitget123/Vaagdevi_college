/*****hero section carousel******* */
jQuery(document).ready(function(e){
    $slides = jQuery(".slide");
    var slideIndex = 0;
    var qtySlides = $slides.length;
    var maxSlideIndex = qtySlides - 1;
    var timeout;
    var $nextSlide;
    var $currentSlide;
    var transition = setInterval(function(e){
      $currentSlide = $slides.eq(slideIndex);
      $nextSlide = getNextSlide($slides, slideIndex, maxSlideIndex);
      $nextSlide.addClass("active");
      $currentSlide.removeClass("active");
      slideIndex = getNextSlideIndex(slideIndex, maxSlideIndex);
    }, 15000);
  });
  
  function getNextSlideIndex(currentSlideIndex, maxSlideIndex){
    var nextSlideIndex = currentSlideIndex + 1;
    if(nextSlideIndex > maxSlideIndex)
      nextSlideIndex = 0;
    return nextSlideIndex;
  }
  
  function getNextSlide($slides, currentSlideIndex, maxSlideIndex){
    return $slides.eq(getNextSlideIndex(currentSlideIndex, maxSlideIndex));
  }
  /*****hero section carousel end********************************************8888*/

/******************************************awards carousel javascript*************************************/
  
const leftSlide = document.querySelector(".left-slides");
const rightSlide = document.querySelector(".right-slides");
const leftBtn = document.querySelector(".left-btn");
const rightBtn = document.querySelector(".right-btn");
const slidesLength = leftSlide.querySelectorAll("div").length;

let currentSlide = 0;

rightSlide.style.transform = `translateY(-${(slidesLength - 1) * 100}%)`;

leftBtn.addEventListener("click", () => changeSlide("left"));
rightBtn.addEventListener("click", () => changeSlide("right"));

function changeSlide(btn) {
  if (btn == "right") {
    currentSlide++;

    if (currentSlide > slidesLength - 1) {
      currentSlide = 0;
    }
  } else if (btn == "left") {
    currentSlide--;

    if (currentSlide < 0) {
      currentSlide = slidesLength - 1;
    }
  }

  rightSlide.style.transform = `translateY(-${
    (slidesLength - 1 - currentSlide) * 100
  }%)`;
  leftSlide.style.transform = `translateY(-${currentSlide * 100}%)`;
}

setInterval(autoChangeSlide, 3000);

function autoChangeSlide() {

  currentSlide++;

  if (currentSlide > slidesLength - 1) {
    currentSlide = 0;
  }

  rightSlide.style.transform = `translateY(-${
    (slidesLength - 1 - currentSlide) * 100
  }%)`;
  leftSlide.style.transform = `translateY(-${currentSlide * 100}%)`;
}


/******************owl carousel for cards***************** */
$('.owl-carousel').owlCarousel({
    loop: false,
    margin:10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        },
        1400:{
            items:4
        },
        1800:{
            items:4
        }
    }
})


/***************swiper slides initialisation for collaborations*************/
var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    autoplay: {
        delay: 2000,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
        loop: true,
        
    }
  });

  /**********jsstu sucess stories********************* */
  function myPlugin({ swiper, extendParams, on }) {
    extendParams({
      debugger: false,
    });

    on('init', () => {
      if (!swiper.params.debugger) return;
      console.log('init');
    });
    on('click', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('click');
    });
    on('tap', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('tap');
    });
    on('doubleTap', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('doubleTap');
    });
    on('sliderMove', (swiper, e) => {
      if (!swiper.params.debugger) return;
      console.log('sliderMove');
    });
    on('slideChange', () => {
      if (!swiper.params.debugger) return;
      console.log(
        'slideChange',
        swiper.previousIndex,
        '->',
        swiper.activeIndex
      );
    });
    on('slideChangeTransitionStart', () => {
      if (!swiper.params.debugger) return;
      console.log('slideChangeTransitionStart');
    });
    on('slideChangeTransitionEnd', () => {
      if (!swiper.params.debugger) return;
      console.log('slideChangeTransitionEnd');
    });
    on('transitionStart', () => {
      if (!swiper.params.debugger) return;
      console.log('transitionStart');
    });
    on('transitionEnd', () => {
      if (!swiper.params.debugger) return;
      console.log('transitionEnd');
    });
    on('fromEdge', () => {
      if (!swiper.params.debugger) return;
      console.log('fromEdge');
    });
    on('reachBeginning', () => {
      if (!swiper.params.debugger) return;
      console.log('reachBeginning');
    });
    on('reachEnd', () => {
      if (!swiper.params.debugger) return;
      console.log('reachEnd');
    });
  }


  // Init Swiper
  var swiper = new Swiper('.swiper', {
    // Install Plugin To Swiper
    modules: [myPlugin],
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Enable debugger
    debugger: true,
  });


  /*******mobile nav icon************** */
  

$(document).ready(function(){
  $("#nav_icon").click(function(){
    $("#menu-icon").slideToggle();
  });
});
/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/carousel.js ***!
  \**********************************/
//carousel auto play, pause hover
var slider = new Glider(document.querySelector('.glider'), {
  slidesToScroll: 1,
  slidesToShow: 1,
  dots: '.dots',
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  },
  rewind: true,
  scrollLock: true
});
slideAutoPaly(slider, '.glider');

function slideAutoPaly(glider, selector) {
  var delay = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 3000;
  var repeat = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;
  var autoplay = null;
  var slidesCount = glider.track.childElementCount;
  var nextIndex = 1;
  var pause = true;

  function slide() {
    autoplay = setInterval(function () {
      if (nextIndex >= slidesCount) {
        if (!repeat) {
          clearInterval(autoplay);
        } else {
          nextIndex = 0;
        }
      }

      glider.scrollItem(nextIndex++);
    }, delay);
  }

  slide();
  var element = document.querySelector(selector);
  element.addEventListener('mouseover', function (event) {
    if (pause) {
      clearInterval(autoplay);
      pause = false;
    }
  }, 300);
  element.addEventListener('mouseout', function (event) {
    if (!pause) {
      slide();
      pause = true;
    }
  }, 300);
}
/******/ })()
;
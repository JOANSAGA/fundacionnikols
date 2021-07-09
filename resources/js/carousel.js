//carousel auto play, pause hover

var slider = new Glider(document.querySelector('.carousel'), {
    slidesToScroll: 1,
    slidesToShow: 1,
    dots: '.dots',
    arrows: {
        prev: '.carousel-prev',
        next: '.carousel-next'
    },
    rewind: true,
    scrollLock: true,
    skipTrack: true
})

slideAutoPaly(slider, '.carousel');

function slideAutoPaly(glider, selector, delay = 3000, repeat = true) {
    let autoplay = null;
    const slidesCount = glider.track.childElementCount;
    let nextIndex = 1;
    let pause = true;

    function slide() {
        autoplay = setInterval(() => {
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
    element.addEventListener('mouseover', (event) => {
        if (pause) {
            clearInterval(autoplay);
            pause = false;
        }
    }, 300);

    element.addEventListener('mouseout', (event) => {
        if (!pause) {
            slide();
            pause = true;
        }
    }, 300);
}

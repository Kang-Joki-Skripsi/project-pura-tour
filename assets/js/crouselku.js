
function updateCarousel(carouselSlide, size, counter) {
    carouselSlide.style.transform = `translateX(-${size * counter}px)`;
}

function initCrousel() {
    // let countPrev = parseInt($(this).data('counter'));
    $('button.next').on('click', function () {
        const carouselSlide = $(this).siblings('.crousel-slide');
        const carouselImages = carouselSlide.find('img');
        let size = carouselImages[0].clientWidth;
        let counter = parseInt(carouselSlide.attr('data-counter'));
        if (counter >= carouselImages.length - 1) return;
        counter++;
        carouselSlide.attr('data-counter', counter);

        updateCarousel(carouselSlide[0], size, counter);
    });

    $('button.prev').on('click', function () {
        const carouselSlide = $(this).siblings('.crousel-slide');
        const carouselImages = carouselSlide.find('img');
        let size = carouselImages[0].clientWidth;
        let counter = parseInt(carouselSlide.attr('data-counter'));

        if (counter <= 0) return;
        counter--;
        carouselSlide.attr('data-counter', counter);

        updateCarousel(carouselSlide[0], size, counter);
    })
}

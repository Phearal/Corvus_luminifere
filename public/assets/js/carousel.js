new Glide('.glide1', {
    type: 'carousel',
    startAt: 0,
    perView: 3,
    breakpoints: {
        1000: {
            perView: 2
        },
        750: {
            perView: 1
        }
    }
}).mount();

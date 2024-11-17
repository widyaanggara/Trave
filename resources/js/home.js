// 


// Coba

// Coba end


// Slider untuk Explore Beautiful Bali
const exploreSwiper = new Swiper('.explore-slider', {
    direction: 'horizontal',
    loop: false,
    allowTouchMove: true,
    speed:700,
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5, 
            spaceBetween: 12,
        },
        640:{
            slidesPerView:2,
            spaceBetween:12,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 12,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 12,
        },
    },
    spaceBetween: 12,
    on: {
        slideChange: function () {
            const isBeginning = this.isBeginning;
            const isEnd = this.isEnd;

            document.querySelector('.swiper-prev').style.display = isBeginning ? 'none' : 'flex';
            document.querySelector('.swiper-next').style.display = isEnd ? 'none' : 'flex';
        },
        init: function () {
            // Menyembunyikan tombol prev pada saat inisialisasi jika di awal
            document.querySelector('.swiper-prev').style.display = this.isBeginning ? 'none' : 'flex';
        }
    }
});




// Slider untuk Recently Viewed
const recentlyViewedSwiper = new Swiper('.recently-viewed-slider', {
    direction: 'horizontal',
    loop: false,
    allowTouchMove: true,
    speed:700,
    grid: {
        rows: 1, // Jumlah baris
        fill: 'row', // Isi berdasarkan baris
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5, 
            spaceBetween: 12,
        },
        640:{
            slidesPerView:2,
            spaceBetween:12,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 12,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 12,
        },
    },
});

// Slider untuk TopDestination next
const explorenextSwiper = new Swiper('.explore-next-slider', {
    direction: 'horizontal',
    loop: false,
    allowTouchMove: true,
    speed:800,
    navigation: {
        nextEl: '.swiper-nexts',
        prevEl: '.swiper-prevs',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5, 
            spaceBetween: 12,
        },
        640:{
            slidesPerView:2,
            spaceBetween:12,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 12,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 12,
        },
    },
    spaceBetween: 12,
    on: {
        slideChange: function () {
            const isBeginning = this.isBeginning;
            const isEnd = this.isEnd;

            document.querySelector('.swiper-prevs').style.display = isBeginning ? 'none' : 'flex';
            document.querySelector('.swiper-nexts').style.display = isEnd ? 'none' : 'flex';
        },
        init: function () {
            // Menyembunyikan tombol prev pada saat inisialisasi jika di awal
            document.querySelector('.swiper-prevs').style.display = this.isBeginning ? 'none' : 'flex';
        }
    }
});

// const buttons = document.querySelectorAll('.option');
// const inputField = document.querySelector('input[type="text"]'); 
// const titleText = document.getElementById('title-text');

// buttons.forEach(button => {
//     button.addEventListener('click', function() {
//         buttons.forEach(btn => btn.classList.remove('active'));
//         this.classList.add('active');

//         const destination = this.querySelector('p').textContent; 
//         let placeholderText = '';
//         let title = '';

//         switch (destination) {
//             case 'Search All':
//                 placeholderText = 'Temukan objek wisata anda...';
//                 title = 'Ingin ke mana?';
//                 break;
//             case 'Pantai':
//                 placeholderText = 'Temukan pantai kesukaan anda...';
//                 title = 'Temukan Keindahan Pantai';
//                 break;
//             case 'Pura':
//                 placeholderText = 'Temukan pura favorit anda...';
//                 title = 'Jelajahi Keagungan Pura';
//                 break;
//             case 'Pasar Seni':
//                 placeholderText = 'Temukan pasar seni yang menarik...';
//                 title = 'Eksplorasi Pasar Seni Otentik';
//                 break;
//             case 'Wisata Alam':
//                 placeholderText = 'Temukan wisata alam yang menakjubkan...';
//                 title = 'Nikmati Keajaiban Alam';
//                 break;
//             case 'Wisata Bahari':
//                 placeholderText = 'Temukan pengalaman wisata bahari anda...';
//                 title = 'Selami Serunya Wisata Bahari';
//                 break;
//         }

//         inputField.placeholder = placeholderText;
//         titleText.textContent = title;
//     });
// });

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

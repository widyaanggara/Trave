// faq
const accordionHeaders = document.querySelectorAll('.faq-container > div');

accordionHeaders.forEach(accordionHeader => {
    accordionHeader.addEventListener("click", event => {
        const accordionBody = accordionHeader.querySelector('.accordion-body');
        const icon = accordionHeader.querySelector('.material-symbols-outlined');

        accordionHeader.classList.toggle("active");

        if (accordionHeader.classList.contains("active")) {
            accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
            icon.textContent = "keyboard_arrow_up"; // Change icon to "up"
        } else {
            accordionBody.style.maxHeight = 0;
            icon.textContent = "keyboard_arrow_down";
        }
    });
});


// Modal
// const openModalBtn = document.getElementById('open-modal');
// const modal = document.getElementById('modal');
// const updateSearchBtn = document.getElementById('update-search');
// const closeModalArea = document.getElementById('modal');

// openModalBtn.addEventListener('click', () => {
//     modal.classList.remove('hidden');
//     openModalBtn.classList.add('border-gray-800');
//     openModalBtn.classList.remove('border-gray-300');
//     openModalBtn.classList.add('border-2');
//     openModalBtn.classList.remove('border');
// });

// updateSearchBtn.addEventListener('click', () => {
//     modal.classList.add('hidden');
//     openModalBtn.classList.remove('border-gray-800');
//     openModalBtn.classList.add('border-gray-300');
//     openModalBtn.classList.remove('border-2');
//     openModalBtn.classList.add('border');

// });

// window.addEventListener('click', (e) => {
//     if (e.target === modal) {
//         modal.classList.add('hidden');
//         openModalBtn.classList.remove('border-gray-800');
//         openModalBtn.classList.add('border-gray-300');
//         openModalBtn.classList.remove('border-2');
//         openModalBtn.classList.add('border');
//     }
// });
// Modal End


// DOT
const radioButtons = document.querySelectorAll('input[name="packages"]');
const cards = [document.getElementById('package-card-1'), document.getElementById('package-card-2')];
const dots = [document.getElementById('inner-dot-1'), document.getElementById('inner-dot-2')];

cards.forEach((card, index) => {
    card.addEventListener('click', function () {
        radioButtons[index].checked = true;

        cards.forEach((c, i) => {
            c.classList.replace('border-gray-800', 'border-gray-300');
            dots[i].style.visibility = 'hidden';
        });

        card.classList.replace('border-gray-300', 'border-gray-800');
        dots[index].style.visibility = 'visible';
    });
});


// Slider untuk Recently Viewed
const recentlyViewedSwiper = new Swiper('.recently-viewed-slider', {
    direction: 'horizontal',
    loop: true,
    allowTouchMove: true,
    speed:700,
    navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
    },
    grid: {
        rows: 1, // Jumlah baris
        fill: 'row', // Isi berdasarkan baris
    },
    breakpoints: {
        476: {
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

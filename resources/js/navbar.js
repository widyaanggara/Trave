const hamburger = document.getElementById('hamburger');
const sidebar = document.getElementById('sidebar');
const closeSidebar = document.getElementById('close-sidebar');

// Event listener untuk hamburger
hamburger.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full'); // Menampilkan/menyembunyikan sidebar
});

// Event listener untuk tombol close
closeSidebar.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full'); // Menyembunyikan sidebar
});

// Menangani klik di luar sidebar untuk menutup sidebar
window.addEventListener('click', (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target);
    const isClickOnHamburger = hamburger.contains(event.target);

    // Jika klik di luar sidebar dan tidak pada tombol hamburger, tutup sidebar
    if (!isClickInsideSidebar && !isClickOnHamburger) {
        sidebar.classList.add('-translate-x-full'); // Menyembunyikan sidebar
    }
});
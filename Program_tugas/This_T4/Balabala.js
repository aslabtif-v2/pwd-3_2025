// Ambil elemen tombol kembali keatas
const backToTopButton = document.getElementById('backToTop');

// Event listener untuk scroll
window.addEventListener('scroll', function() {
    // Jika scroll lebih dari 500px, tombol ditampilakan
    if (window.pageYOffset > 500) {
        backToTopButton.classList.add('show');
    } else {
        backToTopButton.classList.remove('show');
    }
});

// Event listener untuk klik tombol
backToTopButton.addEventListener('click', function() {
    // Scroll ke atas dengan animasi halus
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
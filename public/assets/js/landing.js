/* Extracted interactive JS from app/Views/landing/index.php */
// Micro-interactions for header
window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    if (window.scrollY > 20) {
        nav.classList.add('shadow-md', 'py-2');
        nav.classList.remove('py-4');
    } else {
        nav.classList.remove('shadow-md', 'py-2');
        nav.classList.add('py-4');
    }
});

// Add to cart animation feedback
document.querySelectorAll('button').forEach(btn => {
    if (btn.innerText.includes('Tambah ke Keranjang')) {
        btn.addEventListener('click', function() {
            const originalText = this.innerHTML;
            this.innerHTML = '<span class="material-symbols-outlined">check_circle</span> <span>Berhasil!</span>';
            this.classList.replace('bg-on-surface', 'bg-secondary');
            setTimeout(() => {
                this.innerHTML = originalText;
                this.classList.replace('bg-secondary', 'bg-on-surface');
            }, 2000);
        });
    }
});

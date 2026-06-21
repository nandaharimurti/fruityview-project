// Micro-interactions
document.querySelectorAll('button').forEach(button => {
    button.addEventListener('mousedown', () => {
        button.classList.add('scale-95');
    });
    button.addEventListener('mouseup', () => {
        button.classList.remove('scale-95');
    });
});

// Floating Navbar background transition
window.addEventListener('scroll', () => {
    const nav = document.querySelector('nav');
    if (window.scrollY > 20) {
        nav.classList.add('shadow-md');
    } else {
        nav.classList.remove('shadow-md');
    }
});
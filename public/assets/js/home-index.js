// Simple micro-interaction for product cards
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.group').forEach(card => {
        const img = card.querySelector('img');
        if (!img) return;
        card.addEventListener('mouseenter', () => {
            img.style.transform = 'scale(1.05)';
        });
        card.addEventListener('mouseleave', () => {
            img.style.transform = 'scale(1)';
        });
    });
});

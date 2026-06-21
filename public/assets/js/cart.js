// Quantity management (simplified visual feedback)
document.querySelectorAll('button').forEach(button => {
    button.addEventListener('mousedown', function() {
        this.classList.add('scale-95');
    });
    button.addEventListener('mouseup', function() {
        this.classList.remove('scale-95');
    });
});

// Cart items removal (simplified visual)
document.querySelectorAll('[data-icon="delete"]').forEach(btn => {
    btn.closest('button').addEventListener('click', function() {
        const card = this.closest('.bg-surface-container-lowest');
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        setTimeout(() => {
            card.style.display = 'none';
        }, 300);
    });
});

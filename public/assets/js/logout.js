document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('button');
    button.addEventListener('click', () => {
        // Mock redirect effect
        button.innerHTML = '<span class="flex items-center gap-2">Memuat... <span class="animate-spin text-xl">◌</span></span>';
        setTimeout(() => {
            // Logic for actual navigation would go here
        }, 1000);
    });
});

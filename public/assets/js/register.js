// Micro-interactions for form inputs
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('ring-2', 'ring-primary/20');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('ring-2', 'ring-primary/20');
            });
        });

        // Floating fruit effect on the left side (Visual flair)
        const leftSide = document.querySelector('.lg\\:flex');
        if(leftSide) {
            for(let i=0; i<5; i++) {
                const bubble = document.createElement('div');
                bubble.className = 'absolute bg-white/10 rounded-full blur-xl';
                const size = Math.random() * 100 + 50;
                bubble.style.width = size + 'px';
                bubble.style.height = size + 'px';
                bubble.style.left = Math.random() * 100 + '%';
                bubble.style.top = Math.random() * 100 + '%';
                bubble.style.animation = `pulse ${Math.random() * 4 + 3}s infinite ease-in-out`;
                leftSide.appendChild(bubble);
            }
        }
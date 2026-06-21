// Simple Interaction logic for shipping selection
const shippingOptions = document.querySelectorAll('input[name="shipping"]');
shippingOptions.forEach(option => {
    option.addEventListener('change', (e) => {
        shippingOptions.forEach(opt => {
            const parent = opt.closest('label');
            const icon = parent.querySelector('.material-symbols-outlined');
            if (opt.checked) {
                parent.classList.add('border-primary-container', 'bg-primary-fixed/20');
                parent.classList.remove('border-outline-variant');
                icon.textContent = 'check_circle';
                icon.style.fontVariationSettings = "'FILL' 1";
                icon.classList.replace('text-outline-variant', 'text-primary');
            } else {
                parent.classList.remove('border-primary-container', 'bg-primary-fixed/20');
                parent.classList.add('border-outline-variant');
                icon.textContent = 'radio_button_unchecked';
                icon.style.fontVariationSettings = "'FILL' 0";
                icon.classList.replace('text-primary', 'text-outline-variant');
            }
        });
    });
});

// Payment method selection
const paymentMethods = document.querySelectorAll('.grid-cols-2.md\\:grid-cols-4 > div');
paymentMethods.forEach(method => {
    method.addEventListener('click', () => {
        paymentMethods.forEach(m => {
            m.classList.remove('border-primary', 'bg-primary/5');
            m.classList.add('border-outline-variant', 'bg-white');
        });
        method.classList.add('border-primary', 'bg-primary/5');
        method.classList.remove('border-outline-variant', 'bg-white');
    });
});

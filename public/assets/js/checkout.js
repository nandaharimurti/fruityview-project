// Simple Interaction logic for shipping selection
const shippingOptions = document.querySelectorAll('input[name="shipping"]');
const shippingAmounts = {
    reguler: 15000,
    express: 35000,
};

function parseRupiah(text) {
    if (!text) return 0;
    // expects: "Rp 109.000" -> 109000
    const onlyDigits = String(text).replace(/[^0-9]/g, '');
    return onlyDigits ? parseInt(onlyDigits, 10) : 0;
}

const subtotalAmountEl = document.getElementById('subtotal-amount');
const shippingAmountEl = document.getElementById('shipping-amount');
const shippingLabelEl = document.getElementById('shipping-label');
const totalAmountEl = document.getElementById('total-amount');

function recalcSubtotalFromUI() {
    return parseRupiah(subtotalAmountEl && subtotalAmountEl.textContent);
}


function formatRupiah(amount) {
    return 'Rp ' + Number(amount || 0).toLocaleString('id-ID');
}

function updateTotalsForShipping(shippingKey) {
    const shippingCost = shippingAmounts[shippingKey] || 0;
    if (shippingLabelEl) {
        shippingLabelEl.textContent = `Biaya Pengiriman (${shippingKey === 'express' ? 'Express' : 'Reguler'})`;
    }
    if (shippingAmountEl) shippingAmountEl.textContent = formatRupiah(shippingCost);

    // recalc subtotal dari UI agar konsisten dengan render ulang (PHP + sessionStorage render)
    const uiSubtotal = recalcSubtotalFromUI();
    if (totalAmountEl) totalAmountEl.textContent = formatRupiah(uiSubtotal + shippingCost);
}


function getSelectedShippingKey() {
    // Map selected label position/order: first option => reguler (default), second => express
    const selected = document.querySelector('input[name="shipping"]:checked');
    if (!selected) return 'reguler';

    const all = Array.from(shippingOptions);
    const idx = all.indexOf(selected);
    return idx === 1 ? 'express' : 'reguler';
}

shippingOptions.forEach(option => {
    option.addEventListener('change', () => {
        shippingOptions.forEach(opt => {
            const parent = opt.closest('label');
            const icon = parent.querySelector('.material-symbols-outlined');
            if (opt.checked) {
                parent.classList.add('border-primary-container', 'bg-primary-fixed/20');
                parent.classList.remove('border-outline-variant');
                icon.textContent = 'check_circle';
                icon.style.fontVariationSettings = "'FILL' 1";
                icon.classList.className = icon.className.replace('text-outline-variant', 'text-primary');
            } else {
                parent.classList.remove('border-primary-container', 'bg-primary-fixed/20');
                parent.classList.add('border-outline-variant');
                icon.textContent = 'radio_button_unchecked';
                icon.style.fontVariationSettings = "'FILL' 0";
                icon.className = icon.className.replace('text-primary', 'text-outline-variant');
            }
        });

        updateTotalsForShipping(getSelectedShippingKey());
    });
});

// Initialize totals on page load
updateTotalsForShipping(getSelectedShippingKey());

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

// Pay now popup + redirect
const payNowBtn = document.getElementById('pay-now');
const paymentPopup = document.getElementById('payment-popup');

if (payNowBtn && paymentPopup) {
    payNowBtn.addEventListener('click', () => {
        paymentPopup.classList.remove('hidden');
        paymentPopup.classList.add('flex');

        setTimeout(() => {
            // clear selection (optional) then redirect
            window.location.href = '/app/Views/home/index.php';
        }, 3000);
    });
}


// Cart page interactions: render items from localStorage (synced with catalog),
// manage quantity, hitung subtotal/ongkir/total, dan update badge cart di navbar.

function getCart() {
    try {
        return JSON.parse(localStorage.getItem('fv_cart') || '[]');
    } catch (error) {
        return [];
    }
}

function saveCart(cart) {
    localStorage.setItem('fv_cart', JSON.stringify(cart));
}

function formatRupiah(value) {
    return 'Rp ' + Math.round(value || 0).toLocaleString('id-ID');
}

// Estimasi ongkir flat. Ganti logikanya kalau nanti mau berdasarkan berat/kota.
const SHIPPING_FEE = 15000;

function updateHeaderCartCount() {
    const cart = getCart();
    const totalQty = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
    const badge = document.querySelector('#cart-count');
    if (badge) badge.textContent = totalQty.toString();
}

function renderCartItem(item) {
    const subtotal = item.price * (item.quantity || 1);
    const card = document.createElement('div');
    card.className = 'bg-surface-container-lowest p-6 rounded-xl flex items-center gap-6 custom-shadow transition-transform hover:scale-[1.01] duration-300';
    card.innerHTML = `
        <div class="w-32 h-32 rounded-lg overflow-hidden bg-surface-container flex-shrink-0">
            <img class="w-full h-full object-cover" src="${item.image || ''}" alt="${item.name}"
                 onerror="this.src='../../../public/assets/images/placeholder.jpg'">
        </div>
        <div class="flex-grow">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="font-headline-sm text-lg text-on-surface">${item.name}</h3>
                    <p class="text-on-surface-variant font-body-md">${item.tag ? item.tag + ' • ' : ''}${item.weight || ''}</p>
                </div>
                <button class="remove-button text-on-surface-variant hover:text-error transition-colors p-1" data-id="${item.id}" aria-label="Hapus item">
                    <span class="material-symbols-outlined">delete</span>
                </button>
            </div>
            <div class="flex justify-between items-end mt-6">
                <div class="flex items-center bg-surface-container rounded-full p-1 border border-outline-variant">
                    <button class="quantity-button w-8 h-8 flex items-center justify-center hover:bg-surface-container-highest rounded-full transition-colors" data-action="decrease" data-id="${item.id}">
                        <span class="material-symbols-outlined text-sm">remove</span>
                    </button>
                    <span class="px-4 font-label-bold text-on-surface">${item.quantity || 1}</span>
                    <button class="quantity-button w-8 h-8 flex items-center justify-center hover:bg-surface-container-highest rounded-full transition-colors" data-action="increase" data-id="${item.id}">
                        <span class="material-symbols-outlined text-sm">add</span>
                    </button>
                </div>
                <span class="font-headline-sm text-primary">${formatRupiah(subtotal)}</span>
            </div>
        </div>
    `;
    return card;
}

function renderEmptyState(container) {
    container.innerHTML = `
        <div class="bg-surface-container-lowest p-12 rounded-xl flex flex-col items-center text-center gap-4 custom-shadow">
            <span class="material-symbols-outlined text-5xl text-on-surface-variant">shopping_cart</span>
            <p class="text-on-surface-variant font-body-md">Keranjang Anda masih kosong.</p>
            <a href="../catalog/index.php" class="bg-primary-container text-white px-6 py-3 rounded-full font-label-bold hover:brightness-105 transition-all">
                Lihat Katalog
            </a>
        </div>
    `;
}

function renderCart() {
    const container = document.querySelector('#cart-items');
    const summaryText = document.querySelector('#cart-summary-text');
    const subtotalEl = document.querySelector('#cart-subtotal');
    const shippingEl = document.querySelector('#cart-shipping');
    const totalEl = document.querySelector('#cart-total');
    const checkoutButton = document.querySelector('#checkout-button');

    if (!container) return;

    const cart = getCart();
    container.innerHTML = '';
    updateHeaderCartCount();

    if (cart.length === 0) {
        renderEmptyState(container);
        if (summaryText) summaryText.textContent = 'Keranjang Anda kosong.';
        if (subtotalEl) subtotalEl.textContent = formatRupiah(0);
        if (shippingEl) shippingEl.textContent = formatRupiah(0);
        if (totalEl) totalEl.textContent = formatRupiah(0);
        if (checkoutButton) checkoutButton.disabled = true;
        return;
    }

    let subtotal = 0;
    cart.forEach(item => {
        subtotal += item.price * (item.quantity || 1);
        container.appendChild(renderCartItem(item));
    });

    const shipping = SHIPPING_FEE;
    const total = subtotal + shipping;
    const totalQty = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);

    if (summaryText) summaryText.textContent = `Anda memiliki ${totalQty} item di keranjang Anda`;
    if (subtotalEl) subtotalEl.textContent = formatRupiah(subtotal);
    if (shippingEl) shippingEl.textContent = formatRupiah(shipping);
    if (totalEl) totalEl.textContent = formatRupiah(total);
    if (checkoutButton) checkoutButton.disabled = false;

    container.querySelectorAll('.quantity-button, .remove-button').forEach(button => {
        button.addEventListener('click', () => {
            const action = button.dataset.action;
            const id = button.dataset.id;
            const updatedCart = getCart();
            const index = updatedCart.findIndex(p => p.id === id);
            if (index === -1) return;

            if (action === 'decrease') {
                updatedCart[index].quantity = Math.max(1, (updatedCart[index].quantity || 1) - 1);
            } else if (action === 'increase') {
                updatedCart[index].quantity = (updatedCart[index].quantity || 1) + 1;
            } else if (action === 'remove') {
                updatedCart.splice(index, 1);
            }

            saveCart(updatedCart);
            renderCart();
        });
    });
}

// ─── Checkout & navigasi navbar ────────────────────────────────────────────
// ─── Checkout & navigasi navbar ────────────────────────────────────────────
const checkoutButton = document.querySelector('#checkout-button');
if (checkoutButton) {
    checkoutButton.addEventListener('click', () => {
        if (checkoutButton.disabled) return;

        const cart = getCart();
        if (cart.length === 0) return;

        // Hitung ringkasan untuk dikirim
        const subtotal = cart.reduce((sum, item) => sum + item.price * (item.quantity || 1), 0);
        const shipping = SHIPPING_FEE;
        const total = subtotal + shipping;

        // Simpan ke sessionStorage supaya bisa dibaca di checkoutpage.php
        sessionStorage.setItem('fv_checkout_cart', JSON.stringify(cart));
        sessionStorage.setItem('fv_checkout_summary', JSON.stringify({ subtotal, shipping, total }));

        window.location.href = '../checkout/checkoutpage.php';
    });
}

const profileButton = document.querySelector('#profile-button');
if (profileButton) {
    profileButton.addEventListener('click', () => {
        window.location.href = (window.fvApp && window.fvApp.profilePage) || '../profile/profile.php';
    });
}

const promoButton = document.querySelector('#promo-button');
if (promoButton) {
    promoButton.addEventListener('click', () => {
        alert('Kode promo belum bisa diproses. Fitur ini belum tersedia.');
    });
}

renderCart();
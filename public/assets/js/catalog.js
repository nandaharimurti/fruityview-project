// Catalog page interactions: search, pagination, cart, and login gating
const searchInput = document.querySelector('#search-input');
const productGrid = document.querySelector('#product-grid');
const pagerButtons = Array.from(document.querySelectorAll('.page-btn'));
const prevButton = document.querySelector('#prev-page');
const nextButton = document.querySelector('#next-page');
const cartButton = document.querySelector('#cart-button');
const profileButton = document.querySelector('#profile-button');
const cartCount = document.querySelector('#cart-count');
const productCount = document.querySelector('#product-count');

const products = Array.from(document.querySelectorAll('.product-card'));
let currentPage = 1;
const perPage = 6;

const isLoggedIn = window.fvApp?.isLoggedIn === true;
const loginPage = window.fvApp?.loginPage || '../login/login.php';
const cartPage = window.fvApp?.cartPage || '../cart/index.php';
const profilePage = window.fvApp?.profilePage || '../profile/profile.php';

// ─── Toast notification ───────────────────────────────────────────────────────
function showToast(message) {
    const existing = document.querySelector('.fv-toast');
    if (existing) existing.remove();

    const toast = document.createElement('div');
    toast.className = 'fv-toast';
    toast.innerHTML = `<span class="material-symbols-outlined" style="font-size:18px">check_circle</span> ${message}`;
    Object.assign(toast.style, {
        position: 'fixed',
        bottom: '32px',
        left: '50%',
        transform: 'translateX(-50%) translateY(20px)',
        background: '#914c00',
        color: '#fff',
        padding: '12px 24px',
        borderRadius: '999px',
        fontFamily: 'Plus Jakarta Sans, sans-serif',
        fontWeight: '700',
        fontSize: '14px',
        display: 'flex',
        alignItems: 'center',
        gap: '8px',
        boxShadow: '0 4px 24px rgba(0,0,0,0.18)',
        zIndex: '9999',
        opacity: '0',
        transition: 'opacity 0.3s ease, transform 0.3s ease',
        pointerEvents: 'none',
        whiteSpace: 'nowrap',
    });
    document.body.appendChild(toast);

    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            toast.style.opacity = '1';
            toast.style.transform = 'translateX(-50%) translateY(0)';
        });
    });

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(-50%) translateY(20px)';
        setTimeout(() => toast.remove(), 350);
    }, 2500);
}

// ─── Flying image animation ───────────────────────────────────────────────────
function flyToCart(button, imageSrc) {
    const cartIcon = document.querySelector('#cart-button');
    if (!cartIcon) return;

    const btnRect = button.getBoundingClientRect();
    const cartRect = cartIcon.getBoundingClientRect();

    // Create flying image
    const flyer = document.createElement('img');
    flyer.src = imageSrc || '';
    Object.assign(flyer.style, {
        position: 'fixed',
        width: '64px',
        height: '64px',
        borderRadius: '50%',
        objectFit: 'cover',
        border: '2px solid #ff8a00',
        zIndex: '9998',
        pointerEvents: 'none',
        top: `${btnRect.top + btnRect.height / 2 - 32}px`,
        left: `${btnRect.left + btnRect.width / 2 - 32}px`,
        transition: 'none',
        opacity: '1',
        transform: 'scale(1)',
        boxShadow: '0 4px 16px rgba(145,76,0,0.3)',
    });

    // Fallback jika gambar kosong
    if (!imageSrc) {
        flyer.style.background = '#ffdcc4';
        const icon = document.createElement('span');
        icon.className = 'material-symbols-outlined';
        icon.textContent = 'nutrition';
        Object.assign(icon.style, {
            position: 'fixed',
            width: '64px',
            height: '64px',
            borderRadius: '50%',
            background: '#ffdcc4',
            color: '#914c00',
            fontSize: '32px',
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
            zIndex: '9998',
            pointerEvents: 'none',
            top: flyer.style.top,
            left: flyer.style.left,
        });
        document.body.appendChild(icon);
        animateFlyer(icon, cartRect, cartIcon);
        return;
    }

    document.body.appendChild(flyer);
    animateFlyer(flyer, cartRect, cartIcon);
}

function animateFlyer(flyer, cartRect, cartIcon) {
    const destX = cartRect.left + cartRect.width / 2 - 16;
    const destY = cartRect.top + cartRect.height / 2 - 16;

    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            Object.assign(flyer.style, {
                transition: 'top 0.65s cubic-bezier(0.4, 0, 0.2, 1), left 0.65s cubic-bezier(0.4, 0, 0.2, 1), width 0.65s ease, height 0.65s ease, opacity 0.65s ease, transform 0.65s ease',
                top: `${destY}px`,
                left: `${destX}px`,
                width: '32px',
                height: '32px',
                opacity: '0.2',
                transform: 'scale(0.3)',
            });
        });
    });

    setTimeout(() => {
        flyer.remove();
        // Cart icon bounce
        if (cartIcon) {
            cartIcon.style.transition = 'transform 0.15s ease';
            cartIcon.style.transform = 'scale(1.4)';
            setTimeout(() => {
                cartIcon.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    cartIcon.style.transform = 'scale(1)';
                }, 150);
            }, 150);
        }
    }, 680);
}

// ─── Button loading state ─────────────────────────────────────────────────────
function setButtonLoading(button, loading) {
    if (loading) {
        button.disabled = true;
        button.dataset.originalHtml = button.innerHTML;
        button.innerHTML = `
            <span class="material-symbols-outlined" style="animation: fv-spin 0.7s linear infinite; display:inline-block">progress_activity</span>
            Menambahkan...
        `;
    } else {
        button.disabled = false;
        if (button.dataset.originalHtml) {
            button.innerHTML = button.dataset.originalHtml;
        }
    }
}

// Inject spin keyframe once
if (!document.querySelector('#fv-spin-style')) {
    const style = document.createElement('style');
    style.id = 'fv-spin-style';
    style.textContent = `@keyframes fv-spin { to { transform: rotate(360deg); } }`;
    document.head.appendChild(style);
}

// ─── Cart logic ───────────────────────────────────────────────────────────────
function getCartFromStorage() {
    try {
        return JSON.parse(localStorage.getItem('fv_cart') || '[]');
    } catch (error) {
        return [];
    }
}

function saveCartToStorage(cart) {
    localStorage.setItem('fv_cart', JSON.stringify(cart));
}

function updateCartCount() {
    const cart = getCartFromStorage();
    const totalCount = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
    if (cartCount) {
        cartCount.textContent = totalCount.toString();
        // Pulse badge
        cartCount.style.transform = 'scale(1.5)';
        cartCount.style.transition = 'transform 0.2s ease';
        setTimeout(() => {
            cartCount.style.transform = 'scale(1)';
        }, 200);
    }
}

function getFilteredProducts(query) {
    const normalized = query.trim().toLowerCase();
    if (!normalized) return products;
    return products.filter(card => {
        const searchString = [card.dataset.name, card.dataset.description, card.dataset.search]
            .filter(Boolean)
            .join(' ')
            .toLowerCase();
        return searchString.includes(normalized);
    });
}

function updatePagination(filteredLength) {
    const pageCount = Math.max(1, Math.ceil(filteredLength / perPage));
    pagerButtons.forEach((button, index) => {
        const pageNumber = index + 1;
        button.style.display = pageNumber <= pageCount ? 'inline-flex' : 'none';
        button.classList.toggle('bg-primary', pageNumber === currentPage);
        button.classList.toggle('text-on-primary', pageNumber === currentPage);
        button.classList.toggle('font-bold', pageNumber === currentPage);
        button.classList.toggle('border', pageNumber !== currentPage);
    });
    prevButton.disabled = currentPage <= 1;
    nextButton.disabled = currentPage >= pageCount;
}

function renderProducts() {
    const query = searchInput?.value || '';
    const filtered = getFilteredProducts(query);
    const pageCount = Math.max(1, Math.ceil(filtered.length / perPage));
    currentPage = Math.min(currentPage, pageCount);

    products.forEach(card => card.style.display = 'none');

    const start = (currentPage - 1) * perPage;
    filtered.slice(start, start + perPage).forEach(card => {
        card.style.display = 'flex';
    });

    if (productCount) productCount.textContent = filtered.length.toString();
    updatePagination(filtered.length);
}

function addItemToCart(item, button) {
    if (!isLoggedIn) {
        window.location.href = loginPage;
        return;
    }

    setButtonLoading(button, true);

    // Simulasi delay kecil supaya animasi terasa natural
    setTimeout(() => {
        const cart = getCartFromStorage();
        const existing = cart.find(product => product.id === item.id);
        if (existing) {
            existing.quantity += 1;
        } else {
            cart.push({ ...item, quantity: 1 });
        }
        saveCartToStorage(cart);
        updateCartCount();
        setButtonLoading(button, false);
        flyToCart(button, item.image);
        showToast(`${item.name} ditambahkan ke keranjang`);
    }, 300);
}

function setupAddButtons() {
    const addButtons = document.querySelectorAll('.add-to-cart');
    addButtons.forEach(button => {
        button.addEventListener('click', () => {
            const item = {
                id: button.dataset.productId,
                name: button.dataset.productName,
                price: parseInt(button.dataset.productPrice || '0', 10),
                weight: button.dataset.productWeight,
                image: button.dataset.productImage,
            };
            addItemToCart(item, button);
        });
    });
}

// ─── Event listeners ──────────────────────────────────────────────────────────
if (searchInput) {
    searchInput.addEventListener('input', () => {
        currentPage = 1;
        renderProducts();
    });
}

pagerButtons.forEach(button => {
    button.addEventListener('click', () => {
        const page = parseInt(button.dataset.page, 10);
        if (!Number.isNaN(page)) {
            currentPage = page;
            renderProducts();
        }
    });
});

if (prevButton) {
    prevButton.addEventListener('click', () => {
        currentPage = Math.max(1, currentPage - 1);
        renderProducts();
    });
}

if (nextButton) {
    nextButton.addEventListener('click', () => {
        currentPage += 1;
        renderProducts();
    });
}

if (cartButton) {
    cartButton.addEventListener('click', () => {
        window.location.href = isLoggedIn ? cartPage : loginPage;
    });
}

if (profileButton) {
    profileButton.addEventListener('click', () => {
        window.location.href = isLoggedIn ? profilePage : loginPage;
    });
}

setupAddButtons();
updateCartCount();
renderProducts();
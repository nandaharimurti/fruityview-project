// Helper function to check if user is logged in
async function isUserLoggedIn() {
    try {
        const response = await fetch('/api/check-session.php');
        const data = await response.json();
        return data.isLoggedIn;
    } catch (error) {
        console.error('Error checking login status:', error);
        return false;
    }
}

// Navigate to URL
function navigateTo(url) {
    window.location.href = url;
}

// Add to cart API call
async function addToCartAPI(productId, productName, productPrice, quantity = 1) {
    try {
        const response = await fetch('/api/add-to-cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                product_id: productId,
                name: productName,
                price: productPrice,
                quantity: quantity
            })
        });
        
        const data = await response.json();
        return data.success;
    } catch (error) {
        console.error('Error adding to cart:', error);
        return false;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // 1. Simple micro-interaction for product cards
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

    // 2. Search functionality
    const searchInput = document.querySelector('input[placeholder*="Cari buah"]');
    if (searchInput) {
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                const query = searchInput.value.trim();
                if (query) {
                    // Navigate to catalog with search query
                    navigateTo(`/app/Views/catalog/index.php?search=${encodeURIComponent(query)}`);
                }
            }
        });
    }

    // 3. Cart icon button
    const cartButton = document.querySelector('button[aria-label="Keranjang"]');
    if (cartButton) {
        cartButton.addEventListener('click', async () => {
            const loggedIn = await isUserLoggedIn();
            if (loggedIn) {
                navigateTo('/app/Views/cart/index.php');
            } else {
                navigateTo('/app/Views/login/login.php');
            }
        });
    }

    // 4. User/Account icon button
    const userButton = document.querySelector('button[aria-label="Akun"]');
    if (userButton) {
        userButton.addEventListener('click', async () => {
            const loggedIn = await isUserLoggedIn();
            if (loggedIn) {
                navigateTo('/app/Views/profile/profile.php');
            } else {
                navigateTo('/app/Views/login/login.php');
            }
        });
    }

    // 5. "Mulai Belanja" button - find it in the hero section
    const allButtons = document.querySelectorAll('button');
    let startShoppingBtn = null;
    
    allButtons.forEach(btn => {
        const text = btn.textContent.trim();
        if (text.includes('Mulai Belanja')) {
            startShoppingBtn = btn;
        }
    });

    if (startShoppingBtn) {
        startShoppingBtn.addEventListener('click', async () => {
            const loggedIn = await isUserLoggedIn();
            if (loggedIn) {
                navigateTo('/app/Views/catalog/index.php');
            } else {
                navigateTo('/app/Views/login/login.php');
            }
        });
    }

    // 6. "Tambah ke Keranjang" buttons on product cards
    const addToCartButtons = document.querySelectorAll('button');
    let productIndex = 1;
    
    addToCartButtons.forEach((btn) => {
        const text = btn.textContent.trim();
        if (text.includes('Tambah ke Keranjang')) {
            btn.addEventListener('click', async (e) => {
                e.preventDefault();
                const loggedIn = await isUserLoggedIn();
                
                if (loggedIn) {
                    // Get product info from the card
                    const productCard = btn.closest('.group') || btn.closest('.bg-surface');
                    let productName = 'Product';
                    let productPrice = '0';
                    let productId = productIndex;
                    
                    if (productCard) {
                        const nameEl = productCard.querySelector('h4');
                        const priceEl = productCard.querySelector('.text-primary.font-bold');
                        
                        if (nameEl) productName = nameEl.textContent.trim();
                        if (priceEl) {
                            // Extract just the price number
                            const priceText = priceEl.textContent.trim();
                            productPrice = priceText.split(' ')[0]; // Get first part (Rp 45.000)
                        }
                    }
                    
                    // Add to cart via API
                    const success = await addToCartAPI(productId, productName, productPrice, 1);
                    
                    if (success) {
                        // Show feedback
                        const originalText = btn.innerHTML;
                        btn.innerHTML = '<span class="material-symbols-outlined text-[20px]">check</span> Ditambahkan!';
                        btn.style.backgroundColor = '#006e1c'; // secondary color
                        btn.style.color = '#ffffff';
                        
                        setTimeout(() => {
                            btn.innerHTML = originalText;
                            btn.style.backgroundColor = '';
                            btn.style.color = '';
                        }, 2000);
                    }
                } else {
                    navigateTo('/app/Views/login/login.php');
                }
            });
            productIndex++;
        }
    });

    // 7. "Lihat Semua" button
    let seeAllBtn = null;
    
    allButtons.forEach(btn => {
        const text = btn.textContent.trim();
        if (text === 'Lihat Semua') {
            seeAllBtn = btn;
        }
    });

    if (seeAllBtn) {
        seeAllBtn.addEventListener('click', () => {
            navigateTo('/app/Views/catalog/index.php');
        });
    }
});

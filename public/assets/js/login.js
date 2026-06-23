// ==========================================
// 1. MICRO-INTERACTION FOR INPUT EFFECTS
// ==========================================
const inputs = document.querySelectorAll('input');
inputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.parentElement.parentElement.classList.add('scale-[1.01]');
    });
    input.addEventListener('blur', () => {
        input.parentElement.parentElement.classList.remove('scale-[1.01]');
    });
});

// ==========================================
// 2. TOGGLE PASSWORD VISIBILITY
// ==========================================
const passwordInput = document.getElementById('password');
const togglePasswordBtn = document.querySelector('button[type="button"]');

if (togglePasswordBtn && passwordInput) {
    togglePasswordBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const isPassword = passwordInput.type === 'password';
        const icon = togglePasswordBtn.querySelector('.material-symbols-outlined');
        
        if (isPassword) {
            passwordInput.type = 'text';
            icon.textContent = 'visibility_off';
            togglePasswordBtn.classList.add('text-primary');
        } else {
            passwordInput.type = 'password';
            icon.textContent = 'visibility';
            togglePasswordBtn.classList.remove('text-primary');
        }
    });
}

// ==========================================
// 3. NOTIFICATION SYSTEM
// ==========================================
function showNotification(message, type = 'error', duration = 4000) {
    // Remove existing notifications
    const existing = document.querySelector('.notification-toast');
    if (existing) existing.remove();

    const notification = document.createElement('div');
    notification.className = `notification-toast fixed top-20 right-4 md:right-8 z-50 px-6 py-4 rounded-xl font-label-bold text-label-bold flex items-center gap-3 shadow-lg animate-bounce transition-all ${
        type === 'error' ? 'bg-error text-on-error' : 
        type === 'success' ? 'bg-secondary text-on-secondary' : 
        'bg-tertiary-fixed text-on-surface'
    }`;
    
    const icon = document.createElement('span');
    icon.className = 'material-symbols-outlined';
    icon.textContent = type === 'error' ? 'error' : 
                      type === 'success' ? 'check_circle' : 
                      'info';
    
    const text = document.createElement('span');
    text.textContent = message;
    
    notification.appendChild(icon);
    notification.appendChild(text);
    document.body.appendChild(notification);

    setTimeout(() => {
        notification.classList.add('opacity-0');
        setTimeout(() => notification.remove(), 300);
    }, duration);
}

// ==========================================
// 4. LOGIN FUNCTIONALITY
// ==========================================
const loginForm = document.querySelector('form');
const loginBtn = document.querySelector('button.w-full.bg-primary-container');
const emailInput = document.getElementById('email');

if (loginForm && loginBtn) {
    loginBtn.addEventListener('click', async (e) => {
        e.preventDefault();
        
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        // Validation
        if (!email || !password) {
            showNotification('Email dan kata sandi harus diisi', 'error');
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showNotification('Email tidak valid', 'error');
            return;
        }

        // Show loading state
        const originalText = loginBtn.innerHTML;
        loginBtn.disabled = true;
        loginBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">hourglass_bottom</span> <span>Sedang masuk...</span>';

        try {
            // Send login request to backend with AJAX header
            const formData = new FormData();
            formData.append('action', 'login');
            formData.append('email', email);
            formData.append('password', password);

            const response = await fetch('/app/Controllers/AuthController.php', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                showNotification('Login berhasil! Mengalihkan...', 'success', 2000);
                setTimeout(() => {
                    window.location.href = data.redirect || '/app/Views/home/index.php';
                }, 1500);
            } else {
                showNotification(data.message || 'Email atau kata sandi salah!', 'error');
                loginBtn.disabled = false;
                loginBtn.innerHTML = originalText;
            }
        } catch (error) {
            console.error('Login error:', error);
            showNotification('Terjadi kesalahan saat login. Silakan coba lagi.', 'error');
            loginBtn.disabled = false;
            loginBtn.innerHTML = originalText;
        }
    });

    // Allow login with Enter key
    passwordInput?.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            loginBtn.click();
        }
    });
}

// ==========================================
// 5. FORGOT PASSWORD LINK
// ==========================================
const forgotPasswordLink = document.querySelector('a.forgot-password');
if (forgotPasswordLink) {
    forgotPasswordLink.addEventListener('click', (e) => {
        e.preventDefault();
        showNotification('Fitur lupa kata sandi sedang dalam pengembangan', 'info');
        // Uncomment untuk redirect ke halaman ganti password
        // window.location.href = '/app/Views/forgot-password/index.php';
    });
}

// ==========================================
// 6. GOOGLE LOGIN
// ==========================================
const googleLoginBtn = document.querySelector('button:has(img[alt="Google Logo"])');
if (googleLoginBtn) {
    googleLoginBtn.addEventListener('click', (e) => {
        e.preventDefault();
        showNotification('Fitur login dengan Google sedang dalam pengembangan', 'info');
        // TODO: Integrate Google Sign-In SDK
        // Referensi: https://developers.google.com/identity/sign-in/web
    });
}

// ==========================================
// 7. REGISTER LINK
// ==========================================
const registerLink = document.querySelector('a.register-link');
if (registerLink) {
    registerLink.addEventListener('click', (e) => {
        e.preventDefault();
        window.location.href = '/app/Views/register/register.php';
    });
}

// ==========================================
// 8. CLOSE BUTTON (Mobile)
// ==========================================
const closeBtn = document.querySelector('button.md\\:hidden');
if (closeBtn) {
    closeBtn.addEventListener('click', () => {
        window.history.back();
    });
}

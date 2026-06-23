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

// Toggle password visibility
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

function showNotification(message, type = 'error', duration = 3500) {
    const existing = document.querySelector('.notification-toast');
    if (existing) existing.remove();

    const notification = document.createElement('div');
    notification.className = `notification-toast fixed top-6 right-6 z-50 px-5 py-4 rounded-2xl shadow-lg font-label-bold text-label-bold flex items-center gap-3 transition-all ${
        type === 'success' ? 'bg-secondary text-on-secondary' : type === 'info' ? 'bg-tertiary-fixed text-on-tertiary-fixed' : 'bg-error text-on-error'
    }`;

    const icon = document.createElement('span');
    icon.className = 'material-symbols-outlined';
    icon.textContent = type === 'success' ? 'check_circle' : type === 'info' ? 'info' : 'error';

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

// Register form submission
const registerForm = document.getElementById('register-form');
const signUpBtn = document.getElementById('signup-btn');
if (registerForm && signUpBtn) {
    registerForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        signUpBtn.disabled = true;

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = passwordInput.value.trim();
        const phone = document.getElementById('phone').value.trim();
        const dob = document.getElementById('dob').value.trim();
        const address = document.getElementById('address').value.trim();
        const zip = document.getElementById('zip').value.trim();

        if (!name || !email || !password || !phone || !dob || !address || !zip) {
            showNotification('Semua kolom harus diisi.', 'error');
            signUpBtn.disabled = false;
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showNotification('Email tidak valid.', 'error');
            signUpBtn.disabled = false;
            return;
        }

        if (password.length < 8) {
            showNotification('Password harus minimal 8 karakter.', 'error');
            signUpBtn.disabled = false;
            return;
        }

        const originalText = signUpBtn.innerHTML;
        signUpBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">hourglass_bottom</span> <span>Memproses...</span>';

        try {
            const formData = new FormData();
            formData.append('action', 'register');
            formData.append('name', name);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('phone', phone);
            formData.append('dob', dob);
            formData.append('address', address);
            formData.append('zip', zip);

            const response = await fetch('/app/Controllers/AuthController.php', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            });

            const text = await response.text();
            let data;
            try {
                data = JSON.parse(text);
            } catch (parseError) {
                throw new Error(`Server response bukan JSON: ${text}`);
            }

            if (data.success) {
                showNotification(data.message || 'Pendaftaran berhasil.', 'success');
                setTimeout(() => {
                    const redirectPath = data.redirect && data.redirect.startsWith('/') ? data.redirect : '/app/Views/login/login.php';
                    window.location.href = redirectPath;
                }, 1400);
            } else {
                showNotification(data.message || 'Gagal mendaftar.', 'error');
                signUpBtn.disabled = false;
                signUpBtn.innerHTML = originalText;
            }
        } catch (error) {
            console.error('Register error:', error);
            showNotification(error.message || 'Terjadi kesalahan saat mendaftar.', 'error');
            signUpBtn.disabled = false;
            signUpBtn.innerHTML = originalText;
        }
    });
}

const googleRegisterBtn = document.getElementById('google-register-btn');
if (googleRegisterBtn) {
    googleRegisterBtn.addEventListener('click', (e) => {
        e.preventDefault();
        showNotification('Melanjutkan login dengan Google...', 'info');
        setTimeout(() => {
            window.location.href = '/app/Views/login/login.php';
        }, 600);
    });
}

// Floating fruit effect on the left side (Visual flair)
const leftSide = document.querySelector('.lg\\:flex');
if(leftSide) {
    for(let i = 0; i < 5; i++) {
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

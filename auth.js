// auth.js
document.addEventListener('DOMContentLoaded', function() {
    // Login form handling
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;
            
            // Add your login logic here
            console.log('Login attempt:', { email, password, remember });
            
            // Example validation
            if (email && password) {
                // Show success message
                alert('Login berhasil!');
                // Redirect to home page
                window.location.href = 'index.html';
            } else {
                alert('Mohon isi semua field');
            }
        });
    }

    // Signup form handling
    const signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const fullname = document.getElementById('fullname').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            
            // Add your signup logic here
            console.log('Signup attempt:', { fullname, email, password, terms });
            
            // Example validation
            if (password !== confirmPassword) {
                alert('Password tidak cocok');
                return;
            }
            
            if (!terms) {
                alert('Anda harus menyetujui syarat dan ketentuan');
                return;
            }
            
            if (fullname && email && password && confirmPassword && terms) {
                // Show success message
                alert('Pendaftaran berhasil! Silakan login.');
                // Redirect to login page
                window.location.href = 'login.html';
            } else {
                alert('Mohon isi semua field');
            }
        });
    }
});
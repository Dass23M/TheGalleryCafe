document.getElementById('register-form').addEventListener('submit', function(event) {
    const password = event.target.password.value;
    if (password.length < 6) {
        event.preventDefault();
        alert('Password must be at least 6 characters long');
    }
});
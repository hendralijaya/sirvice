    const eyeIcons = document.querySelectorAll('.eye-icon');

eyeIcons.forEach(icon => {
    const passwordField = document.getElementById(icon.previousElementSibling.getAttribute('id'));
    if (passwordField) { // Only modify password fields that exist
        icon.innerHTML = '<i class="bi bi-eye-fill"></i>';
        icon.addEventListener('click', () => {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
            } else {
                passwordField.type = 'password';
                icon.innerHTML = '<i class="bi bi-eye-fill"></i>';
            }
        });
    }
});
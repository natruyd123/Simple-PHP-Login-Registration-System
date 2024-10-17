function togglePasswordVisibility(fieldId, iconId) {
    const passwordField = document.getElementById(fieldId);
    const icon = document.getElementById(iconId);

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
    } else {
        passwordField.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
    }
}

// Show the icon when the user starts typing
function showIconWhenTyping(fieldId, iconId) {
    const passwordField = document.getElementById(fieldId);
    const iconContainer = document.getElementById(iconId + '-container');

    passwordField.addEventListener('input', function () {
        if (passwordField.value.length > 0) {
            iconContainer.style.display = 'inline'; // Show the icon when user types
        } else {
            iconContainer.style.display = 'none'; // Hide the icon if the field is empty
        }
    });
}

// Initialize the showIconWhenTyping functionality for password fields
document.addEventListener('DOMContentLoaded', function () {
    showIconWhenTyping('password', 'password-icon');
});

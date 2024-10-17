// Password Strength Meter
const passwordField = document.getElementById('password');
const passwordStrengthBar = document.getElementById('password-strength-meter');

passwordField.addEventListener('input', function () {
    const password = this.value;
    let strength = 'weak';
    let width = '0%';

    // Check password strength
    if (password.length >= 15 && /[A-Za-z]/.test(password) && /[0-9]/.test(password) && /[^A-Za-z0-9]/.test(password)) {
        strength = 'strong';
        width = '100%';
    } else if (password.length >= 10 && /[A-Za-z]/.test(password) && /[0-9]/.test(password)) {
        strength = 'medium';
        width = '60%';
    } else if (password.length >= 5) {
        strength = 'weak';
        width = '30%';
    }

    // Update progress bar style
    passwordStrengthBar.className = 'progress-bar ' + strength;
    passwordStrengthBar.style.width = width;
    passwordStrengthBar.textContent = strength.charAt(0).toUpperCase() + strength.slice(1); // Capitalize first letter
});

// Toggle password visibility for specific fields
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
    showIconWhenTyping('confirm_password', 'confirm-password-icon'); // Add this line for confirm password
});

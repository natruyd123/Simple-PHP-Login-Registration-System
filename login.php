<?php
session_start(); // Start the session

$error_message = '';

// Show the error if it exists
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Clear the error message after displaying it
}



$title = 'Login ┃ Cybersecurity';

$content = '

    <h1 class="mb-3 text-center">Login</h1>

    <!-- Flash message for errors -->
    ' . ($error_message ? '<div style="color: red;">' . htmlspecialchars($error_message) . '</div>' : '') . '

    <!-- Login Form -->
    <form method="POST" action="./includes/login_process.php"> 
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating mb-3 position-relative">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            <label for="password">Password</label>

            <!-- Icon container initially hidden -->
            <span class=" position-absolute top-50 end-0 translate-middle-y" id="password-icon-container" style="display: none; cursor: pointer;" onclick="togglePasswordVisibility(\'password\', \'password-icon\')">
                <i class="bi bi-eye me-3" id="password-icon"></i>
            </span>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block" id="loginbtn" style="background-color: #222D32; color: white;">Log In</button>
        </div>

        <hr class="center-hr mb-4">

        <div class="mt-3 text-center">
            <p>Don\'t have an account? <a style="text-decoration: none; color: #397392" href="./register.php">Register</a></p> 
        </div>
    </form>

    <!-- Link to external JavaScript -->
    <script src="./public/js/showpass.js"></script>
';



include 'templatess/base.php';
?>

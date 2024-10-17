<?php
session_start();  // Ensure the session is started

// Check if there is an error message in the session
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);  // Clear the error message after displaying it
} else {
    $error_message = '';
}

$title = 'Register ┃ Cybersecurity';
$content = '

    <h1 class="mb-3 text-center">Register</h1>

    <!-- Flash messages -->
    ' . ($error_message ? '<div style="color: red;">' . htmlspecialchars($error_message) . '</div>' : '') . '

    <!-- Registration Form -->
    <form method="POST" action="./includes/register_process.php">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="First name" name="fname" required>
            <label for="floatingInput">First name</label>
        
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Last name" name="lname" required>
            <label for="floatingInput">Last name</label>
         
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
          <label for="floatingInput">Email address</label>
        
        </div>
        
        <div class="form-floating mb-3 position-relative">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            <label for="password">Password</label>

            <!-- Icon container initially hidden -->
            <span class="position-absolute top-50 end-0 translate-middle-y" id="password-icon-container" style="display: none; cursor: pointer;" onclick="togglePasswordVisibility(\'password\', \'password-icon\')">
                <i class="bi bi-eye me-3" id="password-icon"></i>
            </span>
        </div>

        <div class="form-floating mb-3 position-relative">
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required>
            <label for="confirm_password">Confirm Password</label>
            
            <!-- Icon container initially hidden -->
            <span class="position-absolute top-50 end-0 translate-middle-y" id="confirm-password-icon-container" style="display: none; cursor: pointer;" onclick="togglePasswordVisibility(\'confirm_password\', \'confirm-password-icon\')">
                <i class="bi bi-eye me-3" id="confirm-password-icon"></i>
            </span>
        </div>

        <!-- Password Strength Progress Bar -->
        <div class="progress-bar-container mb-1">
            <div class="progress-bar weak" id="password-strength-meter" style="width: 0%;">
                <!-- Initial state, will be updated by JavaScript -->
            </div>
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-block" id="loginbtn" style="background-color: #222D32; color: white;">Register</button>
        </div>

        <hr class="center-hr mb-4"> 

        <div class="mt-3 text-center">
            <p>Have an account? <a style="text-decoration: none; color: #397392" href="./login.php">Sign-in</a></p> 
        </div>
    </form>

    <!-- Link to external JavaScript -->
    <script src="./public/js/script.js"></script>

';



include 'templatess/base.php';
?>

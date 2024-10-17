<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit; // Stop script execution
}


$error_message = '';

// Show the error if it exists
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Clear the error message after displaying it
}

$title = 'Home Page ┃ Cybersecurity';

$contenthomepage = '
    <p class="fs-4 text-center">Welcome back chief, </p>

    <div class="profile-container text-center">
        <div class="profile-header">
            <img src="./public/images/Natruyd.png" alt="Profile Picture" class="profile-pic">
            <p class="profile-email mt-3">' . htmlspecialchars($_SESSION['email']) . '</p>
        </div>
        <div class="profile-details">

            <p><strong>Bio:</strong></p>
            <p>It Works! I finally invent something that works!</p>
        </div>

        <button class="btn btn-dark " style="backgroud-color: #222D32">
           <a class="font-weight-bold text-decoration-none text-white" href="./includes/logout.php">Logout</a>
        </button>
    </div>
';




include 'templatess/homebase.php';
?>

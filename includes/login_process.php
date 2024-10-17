<?php
require './db.php'; // call the DB connection from includes folder

session_start(); // Start the session

$pepper = "Iparryeverythingnat"; 
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Get user details from the database
    $stmt = $conn->prepare("SELECT password_hash, salt FROM php_users WHERE email = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($dbPasswordHash, $salt);
    $stmt->fetch();

    // Check if the email exists
    if ($dbPasswordHash !== null) {
        
        // Verify password with salt and pepper
        $hashedPassword = hash('sha256', $salt . $password . $pepper);

        if ($hashedPassword === $dbPasswordHash) {
            $_SESSION['email'] = $username; // Set session variable
            header('Location: ../home.php'); 
            exit;
        } else {
            $error = "Incorrect password! Please try again.";
        }
    } else {
        $error = "Email does not exist! Please check your email.";
    }

    $_SESSION['error_message'] = $error;

    $stmt->close();
    $conn->close();

    header('Location: ../login.php'); // Redirect to login to display the error
    exit;
}
?>

<?php
session_start();

// Include database connection
include 'db.php';

// pepper value
$pepper = "Iparryeverythingnat";

$strength = ''; 
$errors = []; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conPassword = $_POST['confirm_password'];

    // Validate input fields
    if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($conPassword)) {
        $errors[] = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } elseif ($password !== $conPassword) {
        $errors[] = "Passwords do not match, please try again.";
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password) || strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long, and include one uppercase letter, one lowercase letter, one number and";
    }

    // Password strength validation
    if (!preg_match('/[^A-Za-z0-9]/', $password)) {
        $errors[] = "include at least one special character.";
        $strength = 'weak';
    } else {
        if (strlen($password) >= 8) {
            $strength = 'strong';
        } elseif (strlen($password) >= 5) {
            $strength = 'medium';
        } else {
            $strength = 'weak';
        }
    }

    // Check if there are validation errors
    if (!empty($errors)) {
        $_SESSION['error_message'] = implode(' ', $errors);  // Store all errors in session
        header('Location: ../register.php'); 
        exit;
    }

    // If no validation errors, continue to check if email exists
    $stmt = $conn->prepare("SELECT email FROM php_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['error_message'] = "This email is already registered.";
        header('Location: ../register.php'); 
        exit;
    }

    // Generate salt and hash password with salt and pepper
    $salt = bin2hex(random_bytes(32));
    $hashedPassword = hash('sha256', $salt . $password . $pepper);

    // Insert user into the database
    $stmt = $conn->prepare("INSERT INTO php_users (firstname, lastname, email, password_hash, salt) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('sssss', $firstName, $lastName, $email, $hashedPassword, $salt);

    if ($stmt->execute()) {
        // Successful registration, redirect to login page
        $_SESSION['email'] = $email; 
        unset($_SESSION['error_message']);  // Clear any previous error messages
        header('Location: ../home.php');  
        exit;
    } else {
        $_SESSION['error_message'] = "Registration failed. Please try again.";
        header('Location: ../register.php');
        exit;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

?>
<?php
session_start();
include './includes/db.php'; // Include the database connection

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
    exit;
}

// Query to fetch all users
$sql = "SELECT id, firstName, lastName, email, password_hash, salt FROM php_users";
$result = $conn->query($sql);

$title = 'User List ┃ Cybersecurity';

$contentuserlist = '
    <p class="text-start fs-4">User List</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password hashed</th>
                <th>Salt</th>
            </tr>
        </thead>
        <tbody>';

// Check if there are results
if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        $contentuserlist .= '
            <tr>
                <td>' . htmlspecialchars($row['id']) . '</td>
                <td>' . htmlspecialchars($row['firstName']) . '</td>
                <td>' . htmlspecialchars($row['lastName']) . '</td>
                <td>' . htmlspecialchars($row['email']) . '</td>
                <td>' . htmlspecialchars($row['password_hash']) . '</td>
                <td>' . htmlspecialchars($row['salt']) . '</td>
            </tr>';
    }
} else {
    $contentuserlist .= '
        <tr>
            <td colspan="5" class="text-center">No users found</td>
        </tr>';
}

$contentuserlist .= '
        </tbody>
    </table>';

include 'templatess/userlistbase.php'; // Use your existing layout from templatess
?>


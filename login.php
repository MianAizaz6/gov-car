<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "gov-car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    // Query to fetch user
    $stmt = $conn->prepare("SELECT * FROM user WHERE `user-email` = ? AND `user-password` = ?");
    $stmt->bind_param("ss", $user_email, $user_password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        // Login success: Redirect to main.php
        $_SESSION['user_email'] = $user_email; // Store user email in session
        header("Location: main.php");
        exit();
    } else {
        // Login failed: Show error message
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: index.php");
        exit();
    }
}

// Close connection
$conn->close();
?>

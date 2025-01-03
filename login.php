<?php
session_start();

include('./admin/inc/conn.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get email and password from the form
    $user_email = $_POST['user_email'];
    $user_password = $_POST['Password'];

    // Prepare query to fetch the user
    $stmt = $conn->prepare("SELECT * FROM user WHERE Username = ? AND Password = ?");
    $stmt->bind_param("ss", $user_email, $user_password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user is found
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['Username'];
        $_SESSION['user_type'] = $user['type'];

        // Redirect based on user type
        if ($user['type'] === 'admin') {
            header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        } else {
            header("Location: main.php"); // Redirect to user dashboard
        }
        exit();
    } else {
        // Login failed
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: index.php");
        exit();
    }
}

// Close connection
$conn->close();

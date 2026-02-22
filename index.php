<?php
session_start(); // Start the "memory" of the browser
include 'db.php'; // Bring in the database bridge

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Search for a user with this name and password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        
        // Save user info into SESSIONS (Variables that stay active across pages)
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role']; // 'admin' or 'staff'
        
        header("Location: dashboard.php"); // Send them to the dashboard
    } else {
        echo "Invalid username or password!";
    }
}
?>
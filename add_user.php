<?php
session_start();
include 'db.php';

// Security: If the person logged in is NOT an admin, kick them out
if ($_SESSION['role'] != 'admin') {
    die("Access Denied! You are not an Admin.");
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // Get role from the dropdown menu

    $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New user created successfully!";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    
    <select name="role">
        <option value="staff">Staff (Inventory)</option>
        <option value="admin">Admin (Full Access)</option>
    </select>
    
    <button type="submit" name="register">Create User</button>
</form>
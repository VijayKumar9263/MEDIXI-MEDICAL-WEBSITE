<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT user_id, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($user_id, $hashed_password);
$stmt->fetch();

if (password_verify($password, $hashed_password)) {
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;  // Set this session variable
    header('Location: index.php');
} else {
    echo "<script>alert('Invalid username or password'); window.location.href = 'login.php';</script>";
}

$stmt->close();
$conn->close();
?>

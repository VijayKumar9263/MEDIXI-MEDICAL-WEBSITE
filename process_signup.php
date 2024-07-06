<?php
include 'config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "<script>alert('Signup successful!'); window.location.href = 'login.php';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href = 'signup.php';</script>";
}

$stmt->close();
$conn->close();
?>

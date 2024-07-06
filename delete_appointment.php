<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'config.php'; // Database connection

$appointment_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("DELETE FROM appointments WHERE appointment_id = ? AND user_id = ?");
$stmt->bind_param("ii", $appointment_id, $user_id);

if ($stmt->execute()) {
    echo "<script>alert('Appointment canceled successfully'); window.location.href = 'dashboard.php';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href = 'dashboard.php';</script>";
}

$stmt->close();
$conn->close();
?>

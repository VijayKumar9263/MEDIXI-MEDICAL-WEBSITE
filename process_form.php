<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'config.php'; // Database connection

$user_id = $_SESSION['user_id'];
$service = $_POST['service'];
$doctor = $_POST['doctor'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$appointment_date = $_POST['appointment_date'];

$stmt = $conn->prepare("INSERT INTO appointments (user_id, service, doctor, name, email, phone, appointment_date) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssss", $user_id, $service, $doctor, $name, $email, $phone, $appointment_date);

if ($stmt->execute()) {
    echo "<script>alert('New appointment booked successfully'); window.location.href = 'dashboard.php';</script>";
} else {
    echo "<script>alert('Error: " . $stmt->error . "'); window.location.href = 'appointment.php';</script>";
}

$stmt->close();
$conn->close();
?>

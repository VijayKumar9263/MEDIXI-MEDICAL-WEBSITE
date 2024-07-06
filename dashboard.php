<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'config.php'; // Database connection

$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT appointment_id, service, doctor, name, email, phone, appointment_date FROM appointments WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($appointment_id, $service, $doctor, $name, $email, $phone, $appointment_date);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f8ff; 
            margin: 0; 
            padding: 0; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
        }
        .container { 
            width: 80%; 
            max-width: 1200px; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            margin-top: 20px;
            position: relative;
        }
        h2, h3 { 
            text-align: center; 
            color: #333; 
        }
        table { 
            width: 100%; 
            margin: 20px 0; 
            border-collapse: collapse; 
            background-color: #fff; 
        }
        table, th, td { 
            border: 1px solid #ccc; 
        }
        th { 
            background-color: #4CAF50; 
            color: white; 
            padding: 10px; 
        }
        td { 
            padding: 10px; 
            text-align: center; 
            color: #333; 
        }
        a { 
            color: #4CAF50; 
            text-decoration: none; 
        }
        a:hover { 
            text-decoration: underline; 
        }
        .logout { 
            background-color: #f44336; 
            color: white; 
            text-decoration: none; 
            padding: 10px 20px; 
            border-radius: 4px; 
            position: absolute; 
            top: 40px; 
            right:20px; 
            font-weight: bold;
        }
        .logout:hover { 
            background-color: #d32f2f; 
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <div class="container">
        <a class="logout" href="index.php">Go Back To Home</a>
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <h3>Your Appointments:</h3>
        <table>
            <thead>
                <tr>
                    <th>Appointment ID</th>
                    <th>Service</th>
                    <th>Doctor</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Appointment Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($stmt->fetch()) {
                    echo "<tr>
                        <td>$appointment_id</td>
                        <td>$service</td>
                        <td>$doctor</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$appointment_date</td>
                        <td>
                            <a href='edit_appointment.php?id=$appointment_id'>Edit</a> |
                            <a href='delete_appointment.php?id=$appointment_id' onclick='return confirm(\"Are you sure you want to cancel this appointment?\");'>Cancel</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
$stmt->close();
$conn->close();
?>

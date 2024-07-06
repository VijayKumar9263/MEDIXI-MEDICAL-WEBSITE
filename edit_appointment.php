<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include 'config.php'; // Database connection

$appointment_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service = $_POST['service'];
    $doctor = $_POST['doctor'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $appointment_date = $_POST['appointment_date']; // Assuming this is formatted correctly for MySQL datetime

    // Validate date to ensure it's not in the past
    $today = date('Y-m-d');
    if ($appointment_date < $today) {
        echo "<script>alert('Please select a future date for the appointment.'); window.location.href = 'edit_appointment.php?id=$appointment_id';</script>";
        exit();
    }

    $stmt = $conn->prepare("UPDATE appointments SET service = ?, doctor = ?, name = ?, email = ?, phone = ?, appointment_date = ? WHERE appointment_id = ? AND user_id = ?");
    $stmt->bind_param("ssssssii", $service, $doctor, $name, $email, $phone, $appointment_date, $appointment_id, $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('Appointment updated successfully'); window.location.href = 'dashboard.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.location.href = 'edit_appointment.php?id=$appointment_id';</script>";
    }
} else {
    $stmt = $conn->prepare("SELECT service, doctor, name, email, phone, appointment_date FROM appointments WHERE appointment_id = ? AND user_id = ?");
    $stmt->bind_param("ii", $appointment_id, $user_id);
    $stmt->execute();
    $stmt->bind_result($service, $doctor, $name, $email, $phone, $appointment_date);
    $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Appointment</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f8ff; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        .container { 
            width: 100%; 
            max-width: 400px; 
            background-color: #fff; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            margin-top: 20px; 
            position: relative; /* Ensure relative positioning for absolute elements */
        }
        h2 { 
            text-align: center; 
            color: #333; 
        }
        form { 
            display: flex; 
            flex-direction: column; 
        }
        label { 
            margin-bottom: 5px; 
            color: #555; 
        }
        input, select { 
            margin-bottom: 15px; 
            padding: 8px; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            width: 100%; /* Ensure all inputs have the same width */
            box-sizing: border-box; /* Include padding and border in the element's total width */
        }
        button { 
            padding: 10px; 
            background-color: #4CAF50; 
            color: white; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            width: 100%; /* Button takes full width of its container */
        }
        button:hover { 
            background-color: #45a049; 
        }

        /* Styling for Go Back To Home button */
        .go-back { 
            background-color: #f44336; 
            color: white; 
            text-decoration: none; 
            padding: 10px 20px; 
            border-radius: 4px; 
            position: absolute; 
            top: 50px; 
            right: 40px; 
            font-weight: bold;
            z-index: 999; /* Ensure it appears above other content */
        }
        .go-back:hover { 
            background-color: #d32f2f; 
            text-decoration: none; 
        }
    </style>
    <!-- Include jQuery and Bootstrap DateTimePicker -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <a class="go-back" href="dashboard.php">Cancel Edit</a> <!-- Go Back To Home button outside container -->
    <div class="container">
        <h2>Edit Appointment</h2>
        <form action="edit_appointment.php?id=<?php echo $appointment_id; ?>" method="post">
            <label for="service">Service:</label>
            <select id="service" name="service" required>
                <option value="Aerospace Medicine" <?php if ($service == "Aerospace Medicine") echo "selected"; ?>>Aerospace Medicine</option>
                <option value="Bariatric Surgery" <?php if ($service == "Bariatric Surgery") echo "selected"; ?>>Bariatric Surgery</option>
                <option value="Infectious Diseases" <?php if ($service == "Infectious Diseases") echo "selected"; ?>>Infectious Diseases</option>
                <option value="Laboratory Medicine" <?php if ($service == "Laboratory Medicine") echo "selected"; ?>>Laboratory Medicine</option>
            </select>
            <label for="doctor">Doctor:</label>
            <select id="doctor" name="doctor" required>
                <option value="Dr. Smith" <?php if ($doctor == "Dr. Smith") echo "selected"; ?>>Dr. Smith</option>
                <option value="Dr. Johnson" <?php if ($doctor == "Dr. Johnson") echo "selected"; ?>>Dr. Johnson</option>
                <option value="Dr. Brown" <?php if ($doctor == "Dr. Brown") echo "selected"; ?>>Dr. Brown</option>
                <option value="Dr. Taylor" <?php if ($doctor == "Dr. Taylor") echo "selected"; ?>>Dr. Taylor</option>
            </select>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" pattern="[0-9]{10}" title="Please enter a 10-digit numeric phone number" required>
            <label for="appointment_date">Appointment Date:</label>
            <div class="input-group date" data-provide="datepicker">
                <input type="text" id="appointment_date" name="appointment_date" value="<?php echo $appointment_date; ?>" class="form-control" style="width: 100%;" required>
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
            <button type="submit">Update Appointment</button>
        </form>
    </div>

    <script>
    // Initialize DateTimePicker
    $(document).ready(function(){
        $('.input-group.date').datepicker({
            format: 'yyyy-mm-dd', // Adjust date format as needed
            autoclose: true,
            startDate: '+0d', // Prevent past dates
            todayHighlight: true
        });
    });
    </script>
</body>
</html>
<?php
$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Reservation Booking System</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background for the entire page */
        body {
            background-color: #f0f6ff;
        }

        /* Background for the form container */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        /* Header text */
        h2 {
            color: #007bff;
        }

        /* Background color for confirmation message */
        .alert-success {
            background-color: #e6ffed;
            color: #155724;
        }

        /* Button styling */
        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Hotel Room Reservation</h2>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture and sanitize form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $roomType = htmlspecialchars($_POST['roomType']);
        $checkIn = htmlspecialchars($_POST['checkIn']);
        $checkOut = htmlspecialchars($_POST['checkOut']);

        // Display confirmation message
        echo "<div class='alert alert-success' role='alert'>";
        echo "<h4 class='alert-heading'>Reservation Confirmed!</h4>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Room Type: $roomType</p>";
        echo "<p>Check-In Date: $checkIn</p>";
        echo "<p>Check-Out Date: $checkOut</p>";
        echo "</div>";
    } else {
    ?>

    <!-- Reservation Form -->
    <div class="form-container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="roomType">Room Type</label>
                <select class="form-control" id="roomType" name="roomType" required>
                    <option value="Single">Single Room</option>
                    <option value="Double">Double Room</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="checkIn">Check-In Date</label>
                <input type="date" class="form-control" id="checkIn" name="checkIn" required>
            </div>
            <div class="form-group">
                <label for="checkOut">Check-Out Date</label>
                <input type="date" class="form-control" id="checkOut" name="checkOut" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Book Now</button>
        </form>
    </div>

    <?php } ?>

</div>


</body>
</html>

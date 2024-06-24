<?php
// Connect to your database
include("connect.php");

$alertMessage = ""; // Initialize the alert message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $alertMessage = "Invalid email format";
        exit();
    } else {
        // Check if email already exists
        $sql = "SELECT * FROM deals WHERE email = '$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $alertMessage = "User with this email has already registered!";
        } else {
            // Insert email into the database
            $sql = "INSERT INTO deals (email) VALUES ('$email')";
            if ($conn->query($sql) === TRUE) {
                $alertMessage = "Email registered successfully";
            } else {
                $alertMessage = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
.foot-cont input[type="email"]:hover{
    background-color: #ab0b0b;
}
.foot-cont button:hover {
    background-color: #ab0b0b;
}
.foot-cont button {
    padding: 10px 20px;
    background-color: #f8f6f3;
    color: #000000;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
    </style>
</head>
<body>
    <div class="foot-cont" style="background-color: #151313;color: white;">
        <h1>Want Special Discount Coupons For Special Discounts</h1>
        <h3>Register Your Email</h3>
        <form action="" method="post">
            <label for="email">Email : </label><input type="email" id="email" name="email">
            <button type="submit" >Submit</button><br>
            
        </form>
        <a href="../Admin/admin-login.php"><button type="submit" >Log-In-As-Admin</button></a>
    </div>
    <script>
        // Display the alert message if it's not empty
        var alertMessage = "<?php echo $alertMessage; ?>";
        if (alertMessage !== "") {
            alert(alertMessage);
        }
    </script>
</body>
</html>

<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card Container</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body {
            font-family: Roboto;
            margin: 0;
            padding: 0;
            /* background-color: #f4f4f4; */
        }

        .contact-form-container button {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form-container button:hover {
            background-color: #990000;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="wrap1"><img src="../Images/contact-us.gif" alt=""></div>
    <div class="contact-container">
        <div class="card">
            <h2>Address</h2>
            <p>123 Street, Jalandhar,Punjab</p>
        </div>
        <div class="card">
            <h2>E-mail</h2>
            <p>Grocery@yahoo.com</p>
        </div>
        <div class="card">
            <h2>Mobile</h2>
            <p>+2468135790</p>
        </div>
    </div>
    <div class="contact-wrap">
        <img height="500px" width="500px" src="../Images/cart2.jpg" alt="">
        <div class="contact-form-container">
            <h1>Raise a Query</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>

<!-- PHP -->
<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $check_query = "SELECT * FROM contact WHERE email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "<script>alert('User has already raise d a query!');</script>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO contact (name, email,message)
                VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Query Raised Successfully!');</script>";
            // header("Location: contactus.php?name=$name");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
<?php
include("footer.php")
    ?>
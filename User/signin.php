<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Roboto;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background-image: url('https://source.unsplash.com/1600x1000/?grocerystore');
            background-repeat: no-repeat;
        }

        .signinimg .signin-form input[type="email"]:hover,
        .signinimg .signin-form input[type="password"]:hover {
            background-color: #990000;
            color: white;
        }

        .signinimg .signin-form button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            color: white;
            background-color:black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signinimg .signin-form button:hover {
            background-color: #990000;
            color: black;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <div class="signinimg">
        <div class="image-container">
            <form action="signin.php" method="POST" class="signin-form">
                <h2>Sign In</h2>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Sign In</button>
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
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the user exists
    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            // Password is correct, login successful
            // echo "<script>alert('Login successful');</script>";
            header("location:index.php");
        } else {
            // Password is incorrect
            echo "<script>alert('Incorrect password');</script>";
        }
    } else {
        // User does not exist
        echo "<script>alert('User not found');</script>";
    }
}

// Close connection
$conn->close();
?>
<?php include("footer.php") ?>
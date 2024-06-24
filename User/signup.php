<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Roboto;
            /* background-color: #f2f2f2; */
            background-image: url('https://source.unsplash.com/1600x1000/?grocerystore');
            background-repeat: no-repeat;
        }
        .container4 .input-group {
    margin-bottom: 15px;
}

.container4 .input-group label {
    display: block;
    margin-bottom: 5px;
}

.container4 .input-group input,
.container4 .input-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

.container4 .input-group input:hover {
    background-color: #990000;
    color: white;
}

.container4 button {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    color:white;
    background-color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.container4 button:hover {
    background-color:#990000;
    color: black;
    font-weight: bold;
}
    </style>
</head>
<body>
    <div class="container4">
        <form action="signup.php" method="POST">
            <h2>Sign Up</h2>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group">
                <label for="mobile">Mobile No.</label>
                <input type="number" id="mobile" name="mobile" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>

</html>

<!--  php -->
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
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "<script>alert('User with this email already exists!');</script>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, date_of_birth, gender,mobile, password)
                VALUES ('$name', '$email', '$dob', '$gender','$mobile', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // header("Location:signin.php?name=$name");
            echo "<script>window.location.href = 'signin.php?name=$name';</script>";

            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>
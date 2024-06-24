<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Roboto;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="ad-cont">
        <h1>Admin</h1>
        <form method="post" action="">
            <label for="username">
                <input class="i1" type="text" name="username" placeholder="Enter Your Username">
            </label><br>
            <label for="password">
                <input class="i1" type="password" name="password" placeholder="Enter Password">
            </label><br>
            <input type="submit" class="btn" value="Login">
        </form>
        <?php
        // Hardcoded admin credentials
        $adminUsername = "admin";
        $adminPassword = "admin123";

        //Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get user input
            $inputUsername = $_POST["username"];
            $inputPassword = $_POST["password"];

            //Check if the input matches the hardcoded credentials
            if ($inputUsername == $adminUsername && $inputPassword == $adminPassword) {
                header("Location: admin.php");

            } else if ($inputUsername == "" && $inputPassword == "") {
                echo "provide details";
            } else if ($inputUsername == "") {
                echo "provide username";
            } else if ($inputPassword == "") {
                echo "provide password";
            } else {
                echo "invalid credentials";
            }
        }
        ?>
    </div>
</body>
</html>
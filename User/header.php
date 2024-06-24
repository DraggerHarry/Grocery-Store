<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .navbar .nav-links li a:hover {
    color: #ab0b0b;
}

    </style>
</head>

<body>
    <nav class="navbar" style="background-color: black;">
        <div class="logo">
           <a href="index.php"> <img src="../Images/logo.png" alt="Logo"></a>
           <?php
           if(isset($_SESSION['email'])){
            echo '<span style="color: white;margin-bottom:-50px;">' . $_SESSION['email'] . '</span>';
            
           }
    
            ?>
        </div>
        <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            
            <li><a href="Menu.php">Menu</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
           
            <?php
            if(isset($_SESSION['email'])){
              echo  "";
            } else {
                // If the user is not logged in, show the "Sign In" link
                echo " <li><a href='signin.php'>Sign In</a></li>";
            }
            ?>
            

            <?php
            if(isset($_SESSION['email'])){
                echo "<li><a href='logout.php'>Logout</a></li>";
            } else {
                // If the user is not logged in, show the "Sign In" link
                echo " <li><a href='signup.php'>Sign Up</a></li>";
            }
            ?>
            <?php
            if(isset($_SESSION['email'])){
           echo '<li> <a href="cartdisplay.php">
        <svg style="background-color: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-cart3" viewBox="0 0 16 16" fill="your_desired_color">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg>
    </a>
</li>';
            }
            else{
                echo "<li></li>";
            }
?>

    
        </ul>
    </nav>
</body>

</html>
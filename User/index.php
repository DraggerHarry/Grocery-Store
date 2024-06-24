<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            font-family:Roboto; 
        }
.services {
    padding: 20px;
    background-color: #f5f5f5;
}

.services-text {
    text-align: center;
    margin-bottom: 30px;
}

.flex-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.services .service-box {
    text-align: center;
    padding: 20px;
    background-color: black; /* Changed background color */
    color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    flex: 1;
    transition: background-color 0.3s ease; /* Added transition for hover effect */
}

.services .service-box:hover {
    background-color: #990000; /* Hover background color */
    color:white;
}

.service-box h3 {
    margin-bottom: 10px;
}

.service-box p {
    margin-bottom: 0;
}

.service-box svg {
    width: 50px;
    height: 50px;
}

@media screen and (max-width: 768px) {
    .service-box {
        flex-basis: calc(50% - 20px);
    }
}
.container2 .cont2-more-categories {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
}
.container2 .cont2-more-categories:hover {
    background-color: #990000;
    transition: 0.5s;
    color: black;
}

    </style>
</head>

<body>
    <!-- carousel start -->
    <div class="cont1-text">
        <marquee behavior="alternate" direction="left" style="color: #FFCC33;"><code class="marq-text">&#128165;Get your Groceries delivered at home&#128165;</code> 
        </marquee>
    </div>
    <div class="cont1">
        <div class="cont1-img"><img class="cont1-img" src="../Images/cart2.jpg" alt="Grocery Store"></div>
        <!-- <div class="cont1-text">Get your Groceries delivered at home</div> -->
        <div class="cont1-svg">
            <img src="../Images/available.jpg" alt="">
        </div>
    </div>
    <!-- carousel ends -->
    <!-- Items Section starts -->
    <div class="container2">
        <div class="cont2-content">
            <h1>
                <center>More than 2000 items to order!</center>
            </h1>
            <p>
                <center>Welcome to Your Virtual Store </center>
            </p>

            <div class="cont2-cards">
                <div class="card">
                    <img src="../Images/condiments.jpeg" alt="Dish 1">
                    <h2>Condiments</h2>
                    <p>Served with well cooked chana</p>
                </div>
                <div class="card">
                    <img src="../Images/grains.jpg" alt="Dish 2">
                    <h2>Grains</h2>
                    <p>Served with two sizzling sauces</p>
                </div>
                <div class="card">
                    <img src="../Images/vegetables.jpg" alt="Dish 3">
                    <h2>Vegetables</h2>
                    <p>With extra dopings</p>
                </div>
                <div class="card">
                    <img src="../Images/eggs.jpg" alt="Dish 4">
                    <h2>Eggs</h2>
                    <p>Served with Tandoori Naan</p>
                </div>
            </div>

            <a style="text-decoration: none;" href="Store.php"><center><button class="cont2-more-categories">More Products</button></center></a>
        </div>
    </div>
    <!-- Item section ends -->

    <!-- Services section starts -->
    <div class="services">
        <h2 class="services-text">OUR SERVICES</h2>
        <div class="flex-container">
            <div class="service-box">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584l.013-.012.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354-.012.012A6.97 6.97 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0" />
                    </svg></h3>
                <p>24/7 services</p>
            </div>
            <div class="service-box">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-phone-fill" viewBox="0 0 16 16">
                        <path
                            d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0" />
                    </svg></h3>
                <p>Online booking</p>
            </div>
            <div class="service-box">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-gift-fill" viewBox="0 0 16 16">
                        <path
                            d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z" />
                    </svg></h3>
                <p>Gift cards</p>
            </div>
            <div class="service-box">
                <h3><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-car-front-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg></h3>
                <p>Fast delivery</p>
            </div>
             
        </div>
          
    </div>
    <!-- Service section ends -->

   

    <!-- Footer Start -->
    <?php
include("footer.php");
?>
    <!-- Footer Ends -->
</body>

</html>
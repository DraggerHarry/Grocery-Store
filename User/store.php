<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card Container</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family:Roboto;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}
.store-pretext{
    font-family: Roboto;
    font-size: 20px;
    letter-spacing: 2px;
    word-spacing: 2px;
    background-color: yellow;
    color: red;
}
    </style>
    <link rel="stylesheet" href="../User/style.css">
</head>
<body>

    <div class="store-container1">
        <h1 class="heading">Patanjali Products</h1>
        <div class="card">
            <img src="../Images/patanjalihoney.jpg" alt="Product 1">
            <h2>Patanjali Honey</h2>
            
        </div>
        <div class="card">
            <img src="../Images/patanjalieyedrops.jpg" alt="Product 2">
            <h2>Patanjali EyeDrops</h2>        </div>
        <div class="card">
            <img src="../Images/patanjaligel.jpg" alt="Product 3">
            <h2>Patanjali Aloevera Gel</h2>
        </div>
        <div class="card">
            <img src="../Images/patanjalifacewash.jpg" alt="Product 4">
            <h2>Patanjali Facewash</h2>
        </div>
    </div>
    <marquee behavior="alternate" direction="left"><span class="store-pretext">&#128165;For Placing Your Order Kindly! <a href="signin.php">Login&#128165;</a></span></marquee>
    <div class="store-container2">
        <h1 class="heading">MDH Spices</h1>
        <div class="card">
            <img src="../Images/mdhchunky.jpg" alt="Product 1">
            <h2>MDH Chunky Chaat Masala</h2>
        </div>
        <div class="card">
            <img src="../Images/mdhpav.jpg" alt="Product 2">
            <h2>MDH Pav BHaji Masala</h2>
        </div>
        <div class="card">
            <img src="../Images/mdhsambhar.jpg" alt="Product 3">
            <h2>MDH Sambhar Masala</h2>
        </div>
        <div class="card">
            <img src="../Images/mdhmeat.jpg" alt="Product 4">
            <h2>MDH Meat Masala</h2>
        </div>
    </div>
    <marquee behavior="alternate" direction="right"><span class="store-pretext">&#128165;For Placing Your Order Kindly! <a href="signin.php">Login&#128165;</pre></a></marquee>
    <div class="store-container3">
        <h1 class="heading">Basmati Rice</h1>
        <div class="card">
            <img src="../Images/kohinoor.jpg" alt="Product 1">
            <h2>Koshinoor Basmati Rice</h2>
        </div>
        <div class="card">
            <img src="../Images/daawat.jpg" alt="Product 2">
            <h2>Daawat Basmati Rice</h2>
        </div>
        <div class="card">
            <img src="../Images/indiagate.jpg" alt="Product 3">
            <h2>India Gate Basmati Rice</h2>
        </div>
        <div class="card">
            <img src="../Images/zeeba.png" alt="Product 4">
            <h2>Zeeba Basmati Rice</h2>
        </div>
    </div>
</body>
</html>
<?php
include("footer.php")
?>
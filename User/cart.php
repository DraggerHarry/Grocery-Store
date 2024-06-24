<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productname = $_POST["productname"];
    $image = $_POST["image"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];

    // Assuming you have a "carts" table with columns: id, productname, image, quantity, price
    $insertQuery = "INSERT INTO cart (productname, image, quantity, price) 
                    VALUES ('$productname', '$image', $quantity, $price)";
    
    if (mysqli_query($conn, $insertQuery)) {
        echo "Product added to cart successfully";
    } else {
        echo "Error adding product to cart: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}
?>

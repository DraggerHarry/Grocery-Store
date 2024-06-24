<?php
include("header.php");
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file if needed -->
    <style>
        body{
            font-family: Roboto;
        }
        h2 {
    text-align: center;
    font-family: Roboto;
    text-transform:uppercase;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color:black;
    color: white;
}

img {
    max-width: 100px;
    max-height: 100px;
    display: block;
    margin: 0 auto;
}

/* Add some styling for the total column */
td:nth-child(6) {
    font-weight: bold;
    color: #ff4500; /* Dark Orange */
}

.order-button{
    display: flex;
    justify-content: center;
    text-decoration: none;
    background: black;
    width: fit-content;
    margin-inline: auto;
    color: white;
    padding: 1rem;
    border-radius: 4px;
    margin-top: 2rem;
    margin-bottom: 20px;
}

.order-button:hover{
    color: white;
    background-color: #990000;
    transition: 0.5s;
    margin-bottom: 40px;
}
.button2{
    background-color: #989999;
    color: white;
    padding: 6px 8px;
    font-family: Roboto;
    border-radius: 6px;
    border: none;
}
.button2:hover{
    color:white;
    transition: 0.5s;
    background-color: #980000;

}

    </style>
</head>
<body>

    <h2>Shopping Cart</h2>

    <?php
    $sql = "SELECT  id,productname, image, quantity, price FROM cart";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Product Name</th><th>Image</th><th>Quantity</th><th>Price</th><th>Total</th><th>Delete</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
           
            echo "<td>" . $row["productname"] . "</td>";
            echo "<td><img src='" . $row["image"] . "' alt='product image' style='max-width: 100px; max-height: 100px;'></td>";
            echo "<td>" . $row["quantity"] . "</td>";
            echo "<td>&#8377;" . $row["price"] . "</td>";
            
            // Calculate total price
            $total = $row["quantity"] * $row["price"];
            echo "<td>&#8377;" . $total . "</td>";
            echo "<td class='td'><a href='del.php?id=".$row["id"]."'><button class='button2'>Delete</button></a>
            </td>";
                       

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No items in the cart.</p>";
    }
    ?>

    <a class="order-button" href="order.php">Place order</a>

</body>
</html>
<?php
include("footer.php");
?>
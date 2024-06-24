<?php
include("header.php");
include("connect.php");

// Fetch cart items
$sql = "SELECT productname, quantity, price FROM cart";
$result = mysqli_query($conn, $sql);

// Calculate total bill and net quantity
$totalBill = 0;
$netQuantity = 0;

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $totalBill += $row["quantity"] * $row["price"];
        $netQuantity += $row["quantity"];
    }
}

// Store values in the session

$_SESSION["totalBill"] = $totalBill;
$_SESSION["netQuantity"] = $netQuantity;
?>
<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve address details
    $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
    $Name=$_POST["Name"];
    
    // Retrieve total bill and net quantity from the session (or calculate it again if necessary)
    $totalBill = isset($_SESSION["totalBill"]) ? $_SESSION["totalBill"] : 0;
    $netQuantity = isset($_SESSION["netQuantity"]) ? $_SESSION["netQuantity"] : 0;

    // Insert data into the 'order' table
    $insertQuery = "INSERT INTO `placeorder`(Name,Address,  Bill, Quantity) 
                    VALUES ('$Name', '$Address',  $totalBill, $netQuantity)";

    if (mysqli_query($conn, $insertQuery)) {
        // Order placed successfully, you may want to clear the cart or perform other actions here
        echo "Order placed successfully!";
    } else {
        echo "Error placing order: " . mysqli_error($conn);
        exit();
    }
} else {
    // echo "Invalid request";
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file if needed -->
    <style>
        body {
    font-family: Roboto;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    color: #333;
    background-image: url(../Images/grocerystore.jpg);
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

form {
    
    max-width: 400px;
    margin: 20px auto;
    padding: 15px;
    background-color: #fff;
    opacity: 0.9;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

p {
    margin: 10px 0;
    font-weight: bold;
}

input[type="submit"] {
    background-color: #FFCC33;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Responsive styles */
@media (max-width: 768px) {
    form {
        max-width: 90%;
    }
    h3 {
        text-align: center;
    }
}

</style>
</head>
<body>

   

    <div>
        
        <form action="#" method="post">
        <h2>Place Order</h2>
        <h3><center>Shipping Address</center></h3>
            <!-- Add input fields for address (e.g., street, city, zip code, etc.) -->
            <label for="Name">Name : </label>
            <input type="text" id="Name" name="Name" required><br>
            <label for="Address">Address:</label>
            <input type="text" id="Address" name="Address" required><br>


            

            <!-- Display total bill and net quantity -->
            <p>Total Bill: &#8377;<?php echo $totalBill; ?></p>
            <p>Net Quantity: <?php echo $netQuantity; ?></p>

            <input type="submit" value="Place Order">
        </form>
    </div>

</body>
</html>
<!-- <?php
include("footer.php");
?> -->
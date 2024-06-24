<?php
include("header.php");
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style2.css">
    <style>
              body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.card-container {
    margin-top: 50px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.card {
    width: 250px;
    padding: 20px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.product-image {
    width: 100%;
    height: 200px; /* Adjust the height as needed */
    border-radius: 8px;
    object-fit: cover; /* Ensure the image covers the entire container */
}


.product-info {
    margin-top: 15px;
}

.product-info p {
    margin: 0;
    font-size: 16px;
    color: #333;
}

.product-name {
    font-weight: bold;
}

.product-price {
    color: #007bff;
    font-weight: bold;
}

.add-to-cart {
    display: block;
    margin-top: 15px;
    padding: 10px 0;
    background-color: #007bff;
    color: #fff;
    text-align: center;
    text-decoration: none;
    border-radius: 6px;
    transition: background-color 0.3s ease;
}
.card-container .add{
    background-color: black;
    color: white;
    border: none;
    padding: 8px 6px;
    border-radius: 8px;
    margin:20px 70px;
}
.card-container .add:hover{
    background-color: #990000;
    color: white;
    transition: 0.5s;
    font-weight: bold;
}
/* .add-to-cart:hover {
    background-color: #0056b3;
} */


@media screen and (max-width: 768px) {
    .card {
        width: 45%;
    }
}

@media screen and (max-width: 480px) {
    .card {
        width: 90%;
    }
}

    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function(){
        $(document).on('click', '.add', function(){
            console.log('trigger');
            var productname = $(this).data('productname');
            var image = $(this).data('image');
            var quantity = $(this).closest('.card').find('.qu').val();
            var price = $(this).data('price');

            $.ajax({
                type: "POST",
                url: "cart.php",
                data: {
                    productname: productname,
                    image: image,
                    quantity: quantity,
                    price: price
                },
                success: function(response){
                    alert(response); // You can handle the response as needed
                }
            });
        });
    });
</script>

</head>
<body>
    <div class="card-container">
        <?php
        $sql = "SELECT id, productname, price, image FROM addproduct";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<img src='" . $row["image"] . "' alt='product image' class='product-image'>";
                echo "<p><strong>" . $row["productname"] . "</strong></p>";
                echo "<p>Price: &#8377;" . $row["price"] . "</p>";
                echo "<input type='number' id='quantity' name='quantity' class='qu' value='1' min='1'>";
                echo "<button class='add' data-productname='" . $row["productname"] . "' 
                                               data-image='" . $row["image"] . "' 
                                               data-price='" . $row["price"] . "'>Add Cart</button>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found</p>";
        }
        ?>
    </div>
</body>
</html>
<?php
include("footer.php");
?>
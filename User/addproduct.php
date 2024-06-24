<?php
include('connect.php');
include('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $code = $_POST['code'];

    // File upload handling
    $targetDirectory = "uploads/";  
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
        $sql = "INSERT INTO addproduct (productname, price, code,image) 
                VALUES ('$productname', '$price', '$code', '$imagePath')";
        $query_run = mysqli_query($conn, $sql);

        if ($query_run) {
            header("Location: addproduct.php"); // Redirect to the same page
            exit;
        } else {
            echo "Failed to add product";
        }
    } else {
        echo "Error uploading image";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<!-- <a href="index.php"><button class="bp">Back</button></a> -->
<div class="content">
<div class="form-container">
<h1><center>ADD PRODUCT</center></h1><br>
    <form method="post" enctype="multipart/form-data">
    <label for="productID">Product ID:</label>
      <input type="text" id="productName" name="id" required>

      <label for="productName">Product Name:</label>
      <input type="text" id="productName" name="productname" required>

      <label for="price">Price:</label>
      <input type="number" id="price" name="price"  required>

      <label for="code">Code:</label>
      <input type="text" id="code" name="code" required>

      <label for="image">Attach Image:</label>
      <input type="file" id="image" name="image">

      <button type="submit">Add Product</button>
    </form>
  </div><br><br>
  
  <h1><center>The uploaded values are:</center></h1><br>
    <table class="table">
        <tr>
          
            <th>Product Name</th>
            <th>Price</th>
            <th>Code</th>
            <th>Image</th>
            <th>operations</th>
        </tr>
        <?php
        $sql = "SELECT * FROM addproduct";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr class='tr'>";
            
                echo "<td class='td'>" . $row["productname"] . "</td>";
                echo "<td class='td'>" . $row["price"] . "</td>";
                echo "<td class='td'>" . $row["code"] . "</td>";
                echo "<td class='td'><img src='" . $row["image"] . "' alt='product image' class='product-image'></td>";
                
                echo "<td class='td'><a href='edit.php?id=" . $row["id"] . "'><button class='button'>Edit</button></a>
                <a href='delete.php?source=addproduct&id=".$row["id"]."'><button class='button2'>Delete</button></a>
                </td>";
                echo "</tr class='tr'>";
            }
        } else {
            echo "<tr><td colspan='4'>No products found</td></tr>";
        }
        ?>
        
    </table><br><br>
    </div>
    
</body>
</html>
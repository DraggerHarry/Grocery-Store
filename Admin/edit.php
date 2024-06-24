<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $code = $_POST['code'];

    // File upload handling
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;

        // Update the database with image path
        $sql = "UPDATE addproduct SET productname='$productname', price='$price', code='$code', image='$imagePath' WHERE id='$id'";
        $query_run = mysqli_query($conn, $sql);

        if ($query_run) {
            // Redirect to the addproduct.php page after successful update
            header("Location: addproduct.php");
            exit;
        } else {
            echo "Failed to update product";
        }
    } else {
        echo "Error uploading image";
    }
}

// Fetch product details based on the ID passed in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM addproduct WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    // Redirect to addproduct.php if ID is not provided
    header("Location: addproduct.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Roboto;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="form-container">
            <h1><center>EDIT PRODUCT</center></h1><br>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productname" value="<?php echo $row['productname']; ?>" required>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" value="<?php echo $row['price']; ?>" required>

                <label for="code">Unique Code:</label>
                <input type="text" id="code" name="code" value="<?php echo $row['code']; ?>" required>

                <label for="image">Attach Image:</label>
                <input type="file" id="image" name="image">

                <button type="submit">Update Product</button>
            </form>
        </div>
    </div>
</body>
</html>


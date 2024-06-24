<?php
// Include database connection
include('connect.php');

// Check if the product ID is provided and valid
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Sanitize the ID to prevent SQL injection
    $id = $_GET['id'];

    // SQL query to delete the product with the specified ID
    $sql = "DELETE FROM addproduct WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Product deleted successfully
        mysqli_close($conn); // Close database connection
        echo "<script>alert('Entry deleted successfully');</script>"; // Display alert
        echo "<script>window.location.href='addproduct.php';</script>"; // Redirect to addproduct.php
        exit;
    } else {
        // Error deleting product
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Invalid or missing product ID
    echo "Invalid product ID";
}

// Close database connection
mysqli_close($conn);
?>

<?php
include 'connect.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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

<div class="order-content">
        <h2 class='h'><center>Orders</center></h2>
        <?php
        

        $sql = "SELECT * FROM placeorder";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table2'>
                <tr>
                <th class='th'>Name</th>
                    <th class='th'>Address</th>
                    <th class='th'>Bill</th>
                    <th class='th'>Quantity</th>
                </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr class='tr'>
                        <td class='td'>".$row["Name"]."</td>
                        <td class='td'>".$row["Address"]."</td>
                        <td class='td'>".$row["Bill"]."</td>
                        <td class='td'>".$row["Quantity"]."</td>
                        
                        </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <!-- <a href="index.php"><button class="btn">Back</button></a> -->
</div>
</body>
</html>
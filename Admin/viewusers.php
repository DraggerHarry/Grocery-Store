<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="style.css">
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
    <div class="view-container">
        <h1>USERS</h1>
        <?php
        include("connect.php");

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                <tr>
                   
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>mobile</th>
                    
                    
                    
                </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td class='link'><a href='user.php?email=" . $row["email"] . "'>" . $row["name"] . "</a></td>
                      
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["date_of_birth"] . "</td>
                        <td>" . $row["gender"] . "</td>
                        <td>" . $row["mobile"] . "</td>
                        </tr>";

                // $email = $row["email"];
                // $query = "SELECT * FROM markstable WHERE email='$email'";
                // $data = $conn->query($query);
                // $total = $data->num_rows;
        
                // if ($total == 1) {
                // echo "<a href='edit.php?email=" . $row["email"] . "'><button class='button'>Edit</button></a>";
                // } else {
                // echo "<a href='marks.php?email=" . $row["email"] . "'><button class='button1'>Addmarks</button></a>";
                // }
        
                // echo "<a href='delete.php?email=".$row["email"]."'><button class='button2'>Delete</button></a>
                //   </td>
                //           </tr>";
        

            }
            echo "</table>";
        } else {
            echo "<p>No results found.</p>";
        }
        $conn->close();
        ?>
    </div>
    <a href="admin-login.php"><center><button class="btn">Back</button></center></a>
</body>

</html>
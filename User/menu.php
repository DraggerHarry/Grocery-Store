<?php
include("header.php");
?>

<?php
session_start();

if(isset($_SESSION['email'])){
    header('location:menu1.php');
} else {
    header('location:store.php');
}
?>
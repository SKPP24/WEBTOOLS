<?php 
include 'dbconnect.php';

$IDnumber = $_POST['IDnumber'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$query = mysqli_query($connect, "INSERT INTO product(Product_ID, Product_Name, Product_Quantity, Product_Price) VALUES('$IDnumber', '$name', '$quantity', '$price') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

?>
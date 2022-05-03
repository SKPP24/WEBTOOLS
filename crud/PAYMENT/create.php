<?php 
include 'dbconnect.php';

$CustIDnumber = $_POST['CustIDnumber'];
$OrdIDnumber = $_POST['OrdIDnumber'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$pay = $_POST['pay'];

$query = mysqli_query($connect, "INSERT INTO payment (Cust_ID, Order_ID, Pay_Date, Pay_Amount, Pay_Method) VALUES('$CustIDnumber', '$OrdIDnumber', '$date', '$amount', '$pay') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

?>
<?php 
include 'dbconnect.php';

$CustIDnumber_ord = $_POST['CustIDnumber_ord'];
$OrdIDnumber_ord = $_POST['OrdIDnumber_ord'];
$date_ord = $_POST['date_ord'];
$amount_ord = $_POST['amount_ord'];
$pay_ord = $_POST['pay_ord'];

$query = mysqli_query($connect, "INSERT INTO payment (Cust_ID, Order_ID, Pay_Date, Pay_Amount, Pay_Method) VALUES('$CustIDnumber_ord', '$OrdIDnumber_ord', '$date_ord', '$amount_ord', '$pay_ord') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

?>
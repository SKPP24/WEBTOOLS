<?php 
include 'dbconnect.php';

$IDnumber_emp = $_POST['IDnumber_emp'];
$username_emp = $_POST['username_emp'];
$password_emp = $_POST['password_emp'];
$gender_emp = $_POST['gender_emp'];
$position_emp = $_POST['position_emp'];
$address_emp = $_POST['address_emp'];

$query = mysqli_query($connect, "INSERT INTO employee(Emp_ID, Emp_Username, Emp_Password, Emp_Gender, Emp_Position, Emp_Address) VALUES('$IDnumber_emp', '$username_emp', '$password_emp', '$gender_emp', '$position_emp', '$address_emp') ");

    if ($query) {
        echo "<script> alert('You have successfully inserted the data.');</script>";
        echo "<script> document.location='index.php';</script>";
    }
    else{
        echo "<script> alert('Something went wrong. Please try again!');</script>";
    }

?>
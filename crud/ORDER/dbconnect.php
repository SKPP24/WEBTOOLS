<?php 
$connect=mysqli_connect("localhost", "root", "", "beans&creams");

if (mysqli_connect_errno()) {
    echo "Connection Fail ".mysqli_connect_errno();
}
 ?>
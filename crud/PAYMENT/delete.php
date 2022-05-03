<?php 
include 'dbconnect.php';
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($connect,"DELETE FROM payment WHERE Cust_ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'index.php'</script>";     
} 
?>
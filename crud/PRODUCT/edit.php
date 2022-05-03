<?php
include 'dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM product WHERE Product_ID='$eid'");
while ($row = mysqli_fetch_array($query)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <title>Update User</title>
    </head>

    <body>
        <div class="container">
            <h3>Update Record</h3>
            <form method="post">
                <div class=" form-group">
                    <label>ID Number</label>
                    <input type="text" class="form-control" placeholder="Enter your ID Number" name="IDnumber" <?php echo $row['Product_ID']; ?>">
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Order" name="name" <?php echo $row['Product_Name']; ?>">
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" placeholder="Enter the Quantity" name="quantity" <?php echo $row['Product_Quantity']; ?>">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" placeholder="Enter the Price" name="price" <?php echo $row['Product_Price']; ?>">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Update Record">
            </form>
        </div>
    </body>

    </html>

<?php
}
if (isset($_POST['submit'])) {
    $eid = $_GET['editid'];
    //Getting Post Values
    $IDnumber = $_POST['IDnumber'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $update = mysqli_query($connect, "UPDATE product SET Product_ID='$IDnumber', Product_Name='$name', Product_Quantity='$quantity', Product_Price='$price' WHERE Product_ID='$eid'");

    if ($update) {
        echo "<script>alert('You have successfully update the data');</script>";
        echo "<script > document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
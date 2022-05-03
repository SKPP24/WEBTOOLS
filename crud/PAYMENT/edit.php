<?php
include 'dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM payment WHERE Cust_ID='$eid'");
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
        <title>Payment</title>
    </head>

    <body>
        <div class="container">
            <h3>Payment Record</h3>
            <form method="post">
                <div class=" form-group">
                    <label>Customer ID Number</label>
                    <input type="text" class="form-control" placeholder="Enter the Cutsomer ID Number" name="CustIDnumber" <?php echo $row['Cust_ID']; ?>>
                </div>
                <div class="form-group">
                    <label>Order ID Number</label>
                    <input type="text" class="form-control" placeholder="Enter your Order ID Number" name="OrdIDnumber" <?php echo $row['Order_ID']; ?>>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" placeholder="Enter the Date" name="date" <?php echo $row['Pay_Date']; ?>>
                </div>
                <div class="form-group">
                    <label>Total Amount</label>
                    <input type="text" class="form-control" placeholder="Total" name="amount" <?php echo $row['Pay_Amount']; ?>>
                </div>
                <div class="form-group">
                    <label for="pay">Choose a Payment Method: </label>
                    <select name="pay" id="pay" <?php echo $row['Pay_Method']; ?>>
                        <option value="gcash">GCASH</option>
                        <option value="card">Credit/Debit Card</option>
                        <option value="cod">COD</option>
                        <option value="gift">Gift Card</option>
                    </select>
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
    $CustIDnumber = $_POST['CustIDnumber'];
    $OrdIDnumber = $_POST['OrdIDnumber'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $pay = $_POST['pay'];


    $update = mysqli_query($connect, "UPDATE payment SET Cust_ID='$CustIDnumber', Order_ID='$OrdIDnumber', Pay_Date='$date', Pay_Amount='$amount', Pay_Method='$pay' WHERE Cust_ID='$eid'");

    if ($update) {
        echo "<script>alert('You have successfully update the data');</script>";
        echo "<script > document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
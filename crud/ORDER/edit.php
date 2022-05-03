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
                    <input type="text" class="form-control" placeholder="Enter the Cutsomer ID Number" name="CustIDnumber_ord" <?php echo $row['Cust_ID']; ?>>
                </div>
                <div class="form-group">
                    <label>Order ID Number</label>
                    <input type="text" class="form-control" placeholder="Enter your Order ID Number" name="OrdIDnumber_ord" <?php echo $row['Order_ID']; ?>>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" placeholder="Enter the Date" name="date_ord" <?php echo $row['Pay_Date']; ?>>
                </div>
                <div class="form-group">
                    <label>Total Amount</label>
                    <input type="text" class="form-control" placeholder="Total" name="amount_ord" <?php echo $row['Pay_Amount']; ?>>
                </div>
                <div class="form-group">
                    <label for="pay">Choose a Payment Method: </label>
                    <select name="pay_ord" id="pay" <?php echo $row['Pay_Method']; ?>>
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
    $CustIDnumber_ord = $_POST['CustIDnumber_ord'];
    $OrdIDnumber_ord = $_POST['OrdIDnumber_ord'];
    $date_ord = $_POST['date_ord'];
    $amount_ord = $_POST['amount_ord'];
    $pay_ord = $_POST['pay_ord'];


    $update = mysqli_query($connect, "UPDATE payment SET Cust_ID='$CustIDnumber_ord', Order_ID='$OrdIDnumber_ord', Pay_Date='$date_ord', Pay_Amount='$amount_ord', Pay_Method='$pay_ord' WHERE Cust_ID='$eid'");

    if ($update) {
        echo "<script>alert('You have successfully update the data');</script>";
        echo "<script > document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
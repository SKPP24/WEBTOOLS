<?php include('partials/menu.php')?>

<!-- Main Content Section Starts -->
<div class="main-content">
            <div class="wrapper">
                <h2>Manage Payment Method</h2>
            </div>
        </div>
        <!-- Main Content Ends -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Product Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: auto;
        }

        button {
            text-align: center;
        }
        /* Add a black background color to the top navigation */
        .form-group {
            width: 600px;
            margin: 10px;
        }
        
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5">Payment Method</h3>
                    <p>Please fill this form and submit the record to the database.</p>
                    <form method="post" action="create.php">
                        <div class="form-group">
                            <label>Customer ID Number</label>
                            <input type="text" class="form-control" placeholder="Enter the Customer ID Number" name="CustIDnumber">
                        </div>
                        <div class="form-group">
                            <label>Order ID Number</label>
                            <input type="text" class="form-control" placeholder="Enter your Order ID Number" name="OrdIDnumber">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" placeholder="Enter the Date" name="date">
                        </div>
                        <div class="form-group">
                            <label>Total Amount</label>
                            <input type="text" class="form-control" placeholder="Total" name="amount">
                        </div>
                        <div class="form-group">
                            <label for="pay">Choose a Payment Method: </label>
                            <select name="pay" id="pay">
                            <option value="gcash">GCASH</option>
                            <option value="card">Credit/Debit Card</option>
                            <option value="cod">COD</option>
                            <option value="gift">Gift Card</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<?php include('partials/footer.php')?>
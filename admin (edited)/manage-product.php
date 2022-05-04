<?php include('partials/menu.php')?>

<!-- Main Content Section Starts -->
<div class="main-content">
            <div class="wrapper">
                <h2>Manage Product</h2>
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
            margin: 0 auto;
        }

        button {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-5">Product Record</h3>
                    <p>Please fill this form and submit the record to the database.</p>
                    <form method="post" action="create.php">
                        <div class=" form-group">
                            <label>ID Number</label>
                            <input type="text" class="form-control" placeholder="Enter your ID Number" name="IDnumber">
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" placeholder="Enter your Order" name="name">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" class="form-control" placeholder="Enter the Quantity" name="quantity">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" placeholder="Enter the Price" name="price">
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
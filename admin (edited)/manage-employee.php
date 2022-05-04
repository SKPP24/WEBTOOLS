<?php include('partials/menu.php')?>

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h2>Manage Employee</h2>
            </div>
        </div>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
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
                    <h3 class="mt-5">Employee Create Record</h3>
                    <p>Please fill this form and submit to add representative record to the database.</p>
                    <form method="post" action="create.php">
                        <div class=" form-group">
                            <label>ID Number</label>
                            <input type="text" class="form-control" placeholder="Enter your ID Number" name="IDnumber_emp">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter your Username" name="username_emp">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Enter your Password" name="password_emp">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" class="form-control" placeholder="Enter your Gender" name="gender_emp">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" placeholder="Enter your Position" name="position_emp">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter your Address" name="address_emp">
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
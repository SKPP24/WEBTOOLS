<?php
include 'dbconnect.php';
$eid = $_GET['editid'];

$query = mysqli_query($connect, "SELECT * FROM employee WHERE EMP_ID='$eid'");
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
            <h3>Update User</h3>
            <form method="post">
                <div class="form-group">
                    <label>Employee ID Number</label>
                    <input type="text" class="form-control" placeholder="Enter your Name" name="IDnumber_emp" value="<?php echo $row['Emp_ID']; ?>">
                </div>
                <div class="form-group">
                    <label>Employee Username</label>
                    <input type="text" class="form-control" placeholder="Enter your Username" name="username_emp" value="<?php echo $row['Emp_Username']; ?>">
                </div>
                <div class="form-group">
                    <label>Employee Password</label>
                    <input type="text" class="form-control" placeholder="Enter your Password" name="password_emp" value="<?php echo $row['Emp_Password']; ?>">
                </div>
                <div class="form-group">
                    <label>Employee Gender</label>
                    <input type="text" class="form-control" placeholder="Enter your Gender" name="gender_emp" value="<?php echo $row['Emp_Gender']; ?>">
                </div>
                <div class="form-group">
                    <label>Employee Position</label>
                    <input type="text" class="form-control" placeholder="Enter your Position" name="position_emp" value="<?php echo $row['Emp_Position']; ?>">
                </div>
                <div class="form-group">
                    <label>Employee Address</label>
                    <input type="text" class="form-control" placeholder="Enter your Address" name="address_emp" value="<?php echo $row['Emp_Address']; ?>">
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
    $IDnumber_emp = $_POST['IDnumber_emp'];
    $username_emp = $_POST['username_emp'];
    $password_emp = $_POST['password_emp'];
    $gender_emp = $_POST['gender_emp'];
    $position_emp = $_POST['position_emp'];
    $address_emp = $_POST['address_emp'];

    $update = mysqli_query($connect, "UPDATE employee SET Emp_ID='$IDnumber_emp', Emp_Username='$username_emp', Emp_Password='$password_emp', Emp_Gender='$gender_emp', Emp_Position='$position_emp', Emp_Address='$address_emp' WHERE Emp_ID='$eid'");

    if ($update) {
        echo "<script>alert('You have successfully update the data');</script>";
        echo "<script > document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
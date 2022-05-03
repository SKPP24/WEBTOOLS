<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Employees Records</title>
</head>

<body>
    <div class="container">
        <h3>Employees Records</h3>
        <h4><a href="add_form.html">Add New Record</a></h4>
        <table border="1">
            <tr>
                <th>Cutsomer ID Number</th>
                <th>Order ID Number</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Payment</th>
                <th>Action</th>
            </tr>
            <?php
            include 'dbconnect.php';
            $query = mysqli_query($connect, "SELECT * from payment");
            $ctr = 1;
            $oneRecord = mysqli_num_rows($query);
            if ($oneRecord > 0) {
                while ($oneRecord = mysqli_fetch_array($query)) {
            ?>
                    <tr>
                        <td><?php echo $oneRecord['Cust_ID']; ?> </td>
                        <td><?php echo $oneRecord['Order_ID']; ?> </td>
                        <td><?php echo $oneRecord['Pay_Date']; ?> </td>
                        <td><?php echo $oneRecord['Pay_Amount']; ?> </td>
                        <td><?php echo $oneRecord['Pay_Method']; ?> </td>
                        <td>
                            <a href="edit.php?editid=<?php echo htmlentities($oneRecord['Cust_ID']); ?>">Edit</a>
                            <a href="delete.php?delid=<?php echo htmlentities($oneRecord['Cust_ID']); ?>" onclick="return confirm('Do you really want to Delete?')">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
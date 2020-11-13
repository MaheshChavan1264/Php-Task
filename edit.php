<?php

//making the connection to the database using the connection configuration php file
include "connection.php";

//get the id from the row from which we need to update the data
$id = $_GET['id'];

//check the email is set or not
if (isset($_POST['update'])) {

    //get the email which we need to update in the database
    $email = $_POST['email'];

    //update sql querry to update email
    $edit = mysqli_query($con, "update users set email='$email' where id='$id'");
    if ($edit) {
        mysqli_close($con); // Close connection
        header("location:welcome.php"); // redirects to all records page
        exit;
    } else {
        echo mysqli_error();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ellite Collections</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Update Email</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="">New Email</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="email" required
                    placeholder="Enter your New Email">
                <input type="submit" id="button" name="update" value="Update">
            </div>
        </form>
    </div>
    <script src="index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
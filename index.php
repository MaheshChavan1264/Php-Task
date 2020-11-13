<?php
include "connection.php";
if (isset($_POST['name'])) {
    $dob = $_POST['dob'];
    function getAge($dob)
    {
        $age = (date('Y') - date('Y', strtotime($dob)));
        return $age;
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = getAge($dob);
    $sql = "INSERT INTO users(name,email,phone,age,dt) values('$name','$email',   '$phone', '$age',current_timestamp());";
    if (!$con->query($sql) == true) {
        echo "fail: $sql <br> $con->error";
    }
    header('Location: welcome.php');
    $con->close();
}
$_POST = array();
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
        <h1>Welcome to the Ellite Collections Task</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                    placeholder="Enter your Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="email" required
                    placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone No</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="phone" required
                    placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label>Date Of Birth </label>
                <input type="text" class="form-control" name="dob" id="dob"
                    placeholder="Enter your BirthDate as dd/mm/yyyy" required />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
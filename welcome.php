<?php
//include connection php file to make a connection with the database
include 'connection.php';
//sql querry to fetch all the from the database table users
$sql = "SELECT * FROM users";
//store the data into the result variable array
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1>Welcome Users</h1>
        <a href="index.php" id="button">Home</a>
        <br>
        <br>
        <div class="table-responsice-sm.">
            <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                    //show all the data into the tables on the html pages
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <?php //edit and delete buttons for the edit and delete the row from the table?>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>" id="button">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" id="button">Delete</a></td>
                    </tr>
                </tbody>
                <?php
                }}?>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>

</html>

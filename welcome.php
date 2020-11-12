<?php
include 'connection.php';
$sql = "SELECT * FROM users";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Welcome Users</h1>
        <a href="index.php">Home</a>
        <table border="2">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Age</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php
}
}
?>
        </table>
    </div>
</body>

</html>
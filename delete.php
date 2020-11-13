<?php

//making the connection to the database using connection configuration file
include "connection.php";

// get id to delete the row from the table
$id = $_GET['id'];

//sql querry to delete the row from the table
$del = mysqli_query($con, "delete from users where id = '$id'"); // delete query
if ($del) {
    // Close connection
    mysqli_close($con);
    // redirects to all users data page
    header("location:welcome.php");
    exit;
} else {
    // display error message if not delete
    echo "Error deleting record";
}
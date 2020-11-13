<?php

//server name of the database
$server = "localhost";

//username and password of the MySql database
$username = "root";
$password = "";

//database name
$dbname = "goodluck";

//connection to the database
$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    //if connection fails shows the error
    die("connection failed due to " . mysqli_connect_error($con));
}
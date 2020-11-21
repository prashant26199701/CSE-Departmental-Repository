<?php

$host = "localhost";    /* Host name */
$user = "root";         /* User */
$password = "";         /* Password */
$dbname = "uploadfile";   /* Database name */

// Create connection
$conn = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


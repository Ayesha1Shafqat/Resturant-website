<?php
$host = "localhost";   // Usually same on XAMPP/live
$user = "root";        // On XAMPP, it's root. On live server, it may be different
$password = "";        // On XAMPP, empty. On live server, you'll have one
$database = "foodnest_db";  // Your shared DB name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

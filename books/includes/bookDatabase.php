<?php
$servername = "172.16.12.18";
$username = "ocuser";
$password = "admin";
$dbname = "bookstore";

$bookconn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$bookconn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

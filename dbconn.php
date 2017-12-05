<?php
$servername = "localhost";
$username = "id3433133_hall";
$password = "12071994";
$dbname = "id3433133_seminar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
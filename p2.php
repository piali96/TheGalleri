<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "create table pix (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
URL VARCHAR(100) NOT NULL UNIQUE,
descrip VARCHAR(100) NOT NULL)";
		
if (mysqli_query($conn, $sql)) {
    //echo "Table pix created successfully";
} else {
    //echo "Error creating table: " . mysqli_error($conn);
}

?>
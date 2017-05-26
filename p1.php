<?php
$servername = "localhost";
$username = "root";
$password = "";

//Connecting to server
$conn = mysqli_connect($servername, $username, $password);

//Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$sql = "create database gallery";
if (mysqli_query($conn, $sql)) {
    //echo "<br>";
    //echo "Database created successfully";
} else {
	//echo "<br>";
    //echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
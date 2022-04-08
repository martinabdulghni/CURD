<?php
$host = "localhost";
$dbUserName = "root";
$dbPwd = "";
$dbName = "cstmr";

// create connection..
$conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);
$uid = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM acc WHERE id=$uid"); 
mysqli_fetch_assoc($query);

header( "Location: index.php" );
?>
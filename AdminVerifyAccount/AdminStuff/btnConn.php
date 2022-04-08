<?php
$host = "localhost";
$dbUserName = "root";
$dbPwd = "";
$dbName = "cstmr";

// create connection..
$conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);

// getting data from acc table..

$result = mysqli_query($conn, "SELECT id FROM acc");
$theData = array();
while($row = mysqli_fetch_assoc($result)) {
    $theData[] = $row;
}
echo json_encode($theData);

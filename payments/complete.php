<?php 

$host = "localhost";
$dbUserName = "root";
$dbPwd = "";
$dbName = "cstmr";
    $conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);



    if(mysqli_connect_error()) {

        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());

    } else {

        // making connection to database..

        $conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);

         //get userID

        $query = mysqli_query($conn, "SELECT id FROM pay"); 



        while($row = mysqli_fetch_assoc($query)) {

            $uId = $row['id'];

        }

        $id= $_GET['verifyPayment'];

        $result = mysqli_query($conn, "SELECT * FROM pay WHERE id=$id");

        $row = mysqli_fetch_array($result);

        $fName = $row['firstName'];

        $lName = $row['lastName'];

        $emil = $row['emil'];

        $aPrice = $row['price'];

        $aItem = $row['item'];

        $aDate = $row['theDate'];

        $aTime = $row['theTime'];

        $email = $row['emil'];

    

    }















?>
<?php
$host = "localhost";
$dbUserName = "root";
$dbPwd = "";
$dbName = "cstmr";

// add accepted info to another database and the account site will query just the new database..
$conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);
$uid = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM acc WHERE id=$uid"); 
$row = mysqli_fetch_assoc($query);

// variables.
$squadWin = $row['squadWin'];
$soloWin = $row['soloWin'];
$duoWin = $row['duoWin'];
$skin = $row['skin'];
$pickaxe = $row['pickaxe'];
$glider = $row['glider'];
$dance = $row['dance'];
$blings = $row['blings'];
$sAge = $row['sAge'];
$email = $row['email'];
$fullName = $row['fullName'];
$faS = $row['faS'];
$aEmail = $row['aEmail'];
$price = $row['price'];
$platform = $row['platform'];
$aPwd = $row['aPwd'];
$userName = $row['userName'];

//<!--skin Images-->
$sImageName = $row['sImage']; 
//<!--pickaxe Images--> 
$pImageName = $row['pImage']; 
//<!--backBlings Images-->
$bImageName = $row['bImage']; 
//<!--glider Images-->
$gImageName = $row['gImage'];  
//<!--emotes Images-->
$eImageName = $row['eImage'];

$INSERT = "INSERT Into accepted (squadWin, soloWin, duoWin, skin, 
pickaxe, glider, dance, blings, sAge, email, fullName, faS, aEmail, price, platform, aPwd, userName, sImage, pImage, bImage, gImage, eImage) 
values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


// prepare statmnet
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("iiiiiiiiissssdssssssss", $squadWin, $soloWin, $duoWin, $skin, $pickaxe, $glider, $dance, 
$blings, $sAge, $email, $fullName, $faS, $aEmail, $price, $platform, $aPwd, $userName, 
$sImageName, $pImageName, $bImageName, $gImageName, $eImageName);
$stmt->execute();
$stmt->close();
$sql = "DELETE FROM acc WHERE id=$uid";
if ($conn->query($sql) === TRUE) {
    header( "Location: index.php" );
}
?>
<?php
   
    // connect to data base
    if(isset($_POST['submit']))  {

        $host = "localhost";
        $dbUserName = "root";
        $dbPwd = "";
        $dbName = "cstmr";
        $conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);

        if(mysqli_connect_error()) {
            die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {

            // variables.
            $squadWin = $_POST['squadWin'];
            $soloWin = $_POST['soloWin'];
            $duoWin = $_POST['duoWin'];
            $skin = $_POST['skin'];
            $pickaxe = $_POST['pickaxe'];
            $glider = $_POST['glider'];
            $dance = $_POST['dance'];
            $blings = $_POST['blings'];
            $sAge = $_POST['sAge'];
            $email = $_POST['email'];
            $fullName = $_POST['fullName'];
            $faS = $_POST['faS'];
            $FAsec = implode($faS);
            $aEmail = $_POST['aEmail'];
            $price = $_POST['price'];
            $platform = $_POST['platform'];
            $toPlatform = implode(', ',$platform);
            $aPwd = $_POST['aPwd'];
            $userName = $_POST['userName'];

            //<!--skin Images-->
            $sImageName = $_FILES['sImage']['name'];
            $sImageType = $_FILES['sImage']['type'];
            $sImageTmp = $_FILES['sImage']['tmp_name'];  
            $sImagePath = 'pImgsAccForUsrsEightAtLeast/'.uniqid().$sImageName;
            move_uploaded_file($sImageTmp, $sImagePath);
            //<!--pickaxe Images--> 
            $pImageName = $_FILES['pImage']['name'];
            $pImageType = $_FILES['pImage']['type'];
            $pImageTmp = $_FILES['pImage']['tmp_name'];  
            $pImagePath = 'pImgsAccForUsrsEightAtLeast/'.uniqid().$pImageName;
            move_uploaded_file($pImageTmp, $pImagePath);
            //<!--backBlings Images-->
            $bImageName = $_FILES['bImage']['name'];
            $bImageType = $_FILES['bImage']['type'];
            $bImageTmp = $_FILES['bImage']['tmp_name'];  
            $bImagePath = 'pImgsAccForUsrsEightAtLeast/'.uniqid().$bImageName;
            move_uploaded_file($bImageTmp, $bImagePath);
            //<!--glider Images-->
            $gImageName = $_FILES['gImage']['name'];
            $gImageType = $_FILES['gImage']['type'];
            $gImageTmp = $_FILES['gImage']['tmp_name'];  
            $gImagePath = 'pImgsAccForUsrsEightAtLeast/'.uniqid().$gImageName;
            move_uploaded_file($gImageTmp, $gImagePath);
            //<!--emotes Images-->
            $eImageName = $_FILES['eImage']['name'];
            $eImageType = $_FILES['eImage']['type'];
            $eImageTmp = $_FILES['eImage']['tmp_name'];  
            $eImagePath = 'pImgsAccForUsrsEightAtLeast/'.uniqid().$eImageName;
            move_uploaded_file($eImageTmp, $eImagePath);

            $INSERT = "INSERT Into acc (squadWin, soloWin, duoWin, skin, 
            pickaxe, glider, dance, blings, sAge, email, fullName, faS, aEmail, price, platform, aPwd, userName, sImage, pImage, bImage, gImage, eImage) 
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            
            // prepare statmnet
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("iiiiiiiiissssdssssssss", $squadWin, $soloWin, $duoWin, $skin, $pickaxe, $glider, $dance, 
            $blings, $sAge, $email, $fullName, $FAsec, $aEmail, $price, $toPlatform, $aPwd, $userName, 
            $sImagePath, $pImagePath, $bImagePath, $gImagePath, $eImagePath);
            $stmt->execute();

            // when submit button clicked take all information pass it to genrator to genrate a html page..
            $stmt->close();
            $conn->close();

            // create connection.. again..
            $conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);
    
            // getting data from acc table..

            $query = mysqli_query($conn, "SELECT id FROM acc"); 

            while($row = mysqli_fetch_assoc($query)) {
                $uId = $row['id'];
            }
            echo $uId;
            $conn->close();
            //header("Location: ../AccountsByCustomers/Account-Details/index.php?accountId=$uId");
        }
    } else {
        echo 'please fill in everything';
        return;
    }

?>
 <?php


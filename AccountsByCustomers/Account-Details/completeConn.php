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
        
        // getting the id of account from acc table..
        $query = mysqli_query($conn, "SELECT id FROM accepted"); 
        while($row = mysqli_fetch_assoc($query)) {
            $uId = $row['id'];
        }


        $id = $_GET['accountId'];
        $result = mysqli_query($conn, "SELECT * FROM accepted WHERE id=$id");
        $row = mysqli_fetch_array($result);
        $totalWins = $row['squadWin']+$row['soloWin']+$row['duoWin'];
        $thePrice = $row['price']+"0.49";
        $skinImage = $row['sImage'];
        $pickaxeImage = $row['pImage'];
        $gliderImage = $row['gImage'];
        $blingImage = $row['bImage'];
        $emoteImage = $row['eImage'];

        $thePlatforms = mysqli_query($conn, "SELECT platform FROM accepted WHERE id=$id");
        $fetchPlatforms = mysqli_fetch_array($thePlatforms);
        $platformFiles = "";
        $platforms = $fetchPlatforms['platform'];
        if(strstr($platforms, 'ps4')) {
            $platformFiles .= '<img src="../../imgs/playicons/ps4.png" class="platform-img">';
        }
        if(strstr($platforms, 'pc')) {
            $platformFiles .= '<img src="../../imgs/playicons/pc.png" class="platform-img">';
        }
        if(strstr($platforms, 'mobile')) {
            $platformFiles .= '<img src="../../imgs/playicons/mobile.png" class="platform-img">';
        }
        if(strstr($platforms, 'xbox')) {
            $platformFiles .= '<img src="../../imgs/playicons/xbox.png" class="platform-img">';
        }
        if(strstr($platforms, 'switch')) {
            $platformFiles .= '<img src="../../imgs/playicons/switch.png" class="platform-img">';
        }

    }
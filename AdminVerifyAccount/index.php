<?php
$host = "localhost";
$dbUserName = "root";
$dbPwd = "";
$dbName = "cstmr";

// create connection..
$conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);
$sql = mysqli_query($conn, "SELECT * FROM acc");
$row = mysqli_fetch_assoc($sql)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="AdminStuff/holyD.js"></script>
    <title>FORTNITEBOX ADMIN</title>
</head>
<body>

    <div id="container">
          <div class="container">
          <a href="../">BACK HOME</a>
          </div>
    </div>

<!--scripts-->
<script language="javascript">


    function deleteme(id){
        if(confirm("Confirm Delete!")) {
            window.location.href='delete.php?id=' +id+'';
            return true;
        }
    }
    function accept(id){
        if(confirm("Sure to accept user: " + id)) {
            window.location.href='accept.php?id=' +id+'';
            return true;
        }
    }

</script>
<!--end of scripts--> 
    </body>
</html>
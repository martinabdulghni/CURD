<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;






require("vendor/autoload.php"); 

\Stripe\Stripe::setApiKey('sk_test_NAP51i2tqGRqa9KDfqoe01Ud00DhaDsvgQ');

// Sanitaize Post Array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];
$price = $_COOKIE["price"];
$items = $_COOKIE["InamesAxXXs"];
$date = date("Y/m/d");
$time = date("h:i:sa");

// create customer in Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token


));

$charge = \Stripe\charge::create([
    "amount" => $price,
    "currency" => "usd",
    "description" => $items,
    "customer" => $customer->id,

    ]);



// send email to Customer.. by Consept and get to the Account owner as well that someone has bought his account. 
$host = "localhost";
$dbUserName = "root";
$dbPwd = "";
$dbName = "cstmr";

// create connection..
$conn = new mysqli($host, $dbUserName, $dbPwd, $dbName);

    $INSERT = "INSERT INTO pay (firstName, lastName, emil, price, item, theDate, theTime) 
            VALUES (?,?,?,?,?,?,?)";

            
    // prepare statmnet
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssdsss", $first_name, $last_name, $email, $price, $items, $date, $time);
    $stmt->execute();
    //get userID
    $query = mysqli_query($conn, "SELECT id FROM pay"); 
    while($row = mysqli_fetch_assoc($query)) {
        $uId = $row['id'];
    }
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer(true);

try {                     
    $mail->isSMTP();                                      
    $mail->Host = "localhost";  
    $mail->SMTPAuth   = false;
    $mail->SMTPAutoTLS = false;                              
    $mail->Username   = 'online@fortnitebox.net'; 
    $mail->Password   = 'Mohamed@11112';                  
    $mail->SMTPSecure = "tls";
    $mail->Port       = 21; //465  //587                      

    //Recipients
    $mail->setFrom("online@fortnitebox.net","Fortnite Box");
    $mail->addAddress($email);

    // Content
    $mail->isHTML(true);  
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//header("Location: ./success.php?verifyPayment=".$uId);
?>
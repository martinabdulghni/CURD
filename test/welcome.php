<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

    $to = $_POST['email'];
    $mail = new PHPMailer(true);
    $mail->isSMTP();    
    $mail->Host = 'mail.fortnitebox.net';
    $mail->Port = '587';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username ='sell@fortnitebox.net';
    $mail->Password = 'eseOF3A2kBAx';

    $mail->setFrom('sell@fortnitebox.net','Fortnite BOX');
    $mail->addAddress($to);
    
    $mail->isHTML(true);
    $mail->Subject='FortniteBox';
    $mail->Body= file_get_contents("theEmail.php");
    if(!$mail->send()) {
        echo $mail->error;
    } else {
         echo "done";
    }
?>
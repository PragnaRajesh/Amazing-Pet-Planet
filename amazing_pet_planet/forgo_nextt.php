<?php
include('db_connect/db_connect.php');
$email_id=$_POST['email_id'];



$sql1="select * from login where user_name='$email_id'";
$res1=mysqli_query($conn,$sql1);
if($row1=mysqli_fetch_array($res1))
{

//$email_id=$row1['user_name'];
$use_rname=$row1['user_name'];
$password=$row1['password'];


require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vtechprojectmail@gmail.com';                 // SMTP username
$mail->Password = 'ttnftyfthdlaoohy';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('vtechprojectmail@gmail.com', 'Mailer');
 $mail->addAddress($email_id, 'AMAZING PET');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Forgot Password ';
$mail->Body    = '<div style="background-color:#FFFF99; font-size:36px;" align="center">Username : '.$use_rname.'<br><b style="font-size:36px; "> Password :'. $password .'</b></div>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>

<script>
alert('Your Username and Password Sent To Your Email Address');
document.location="login.php";
</script>
<?php
}
else
{
?>

<script>
alert('Email Address Invalid');
history.back();
</script>
<?php

}
?>
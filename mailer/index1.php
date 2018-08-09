<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail1 = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ravikumarem123@gmail.com';                 // SMTP username
    $mail->Password = '9448942568';                           // SMTP password

    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '587';                                    // TCP port to connect to
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
   $mail1->isSMTP();                                      // Set mailer to use SMTP
    $mail1->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail1->SMTPAuth = true;                               // Enable SMTP authentication
    $mail1->Username = 'ravikumarem123@gmail.com';                 // SMTP username
    $mail1->Password = '9448942568';                           // SMTP password

    $mail1->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail1->Port = '587';                                    // TCP port to connect to
$mail1->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

    //Recipients
    $message=$_GET['message'];
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $state=$_GET['state'];
    $city=$_GET['city'];
    $address=$_GET['address'];
    $phone=$_GET['phone'];
    $email=$_GET['email'];
    $mail->setFrom('ravikumarem123@gmail.com', 'eCart');
    $mail->addAddress($email);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    $body = '<p><strong>Hi '.$name.'</strong> </p><p>Thank you for Ordering Our Products</p>';

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'eCart';
    $mail->Body    = $body;
    $mail->AltBody =  strip_tags($body);
    $mail->send();

    $mail1->setFrom($email, 'eCart');
    $mail1->addAddress('ravikumarem123@gmail.com');     // Add a recipient
    // $mail1->addAddress('ellen@example.com');               // Name is optional
    // $mail1->addReplyTo('info@example.com', 'Information');
    // $mail1->addCC('cc@example.com');
    // $mail1->addBCC('bcc@example.com');

    $body = '<p>A customer wants to contact us</p><p>Firstame : .'.$firstname.'</p><p>Laststame : '.$lastname.'</p><p>state : '.$state.'</p><p>city : '.$city.'</p><p>address : '.$address.'</p><p>phone : '.$phone.'</p><p>Email : '.$email.'</p><p>Message: '.$message.' </p>';

    //Attachments
    // $mail1->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail1->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail1->isHTML(true);                                  // Set email format to HTML
    $mail1->Subject = 'eCart Contact US';
    $mail1->Body    = $body;
    $mail1->AltBody =  strip_tags($body);
    $mail1->send();
        $message="Thank your contacting us we will get back to you soon";
    header("location: ../index.php");

  
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
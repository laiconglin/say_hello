<?php
require './PHPMailer/class.phpmailer.php';  
  
// Instantiate Class  
$mail = new PHPMailer();  
  
// Set up SMTP  
$mail->IsSMTP();                // Sets up a SMTP connection  
$mail->SMTPDebug  = 2;          // This will print debugging info  
$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
$mail->SMTPSecure = "tls";      // Connect using a TLS connection  
$mail->Host = "smtp.gmail.com";  
$mail->Port = 587;  
$mail->Encoding = '7bit';       // SMS uses 7-bit encoding  
  
// Authentication  
$mail->Username   = "laiconglin3@gmail.com"; // Login  
$mail->Password   = "lcl123456"; // Password  
  
// Compose  
$mail->Subject = "人鬼白痴情报";     // Subject (which isn't required)  
$mail->Body = $argv[1];        // Body of our message  
//From
$mail->SetFrom('laiconglin3@gmail.com', 'Lance'); 
// Send To  
$mail->AddAddress( "laiconglin3@i.softbank.jp" ); // Where to send it  
var_dump( $mail->send() );      // Send!  
print_r($argv);
?>

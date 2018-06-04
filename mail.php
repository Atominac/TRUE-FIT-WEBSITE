<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;






//Load Composer's autoloader
require 'vendor/autoload.php';

$username_err = $password_err = "";
$nl="\n";




if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
 
    // Check if username is empty
    if(empty(trim($_POST["fname"]))){
       
    } else{
        $fname = trim($_POST["fname"]);
    }
    
    // Check last name empty
    if(empty(trim($_POST['lname']))){
        
    } else{
        $lname = trim($_POST['lname']);
    }
    
    // Check gender empty
    if(empty(trim($_POST['gender']))){
        
    } else{
        $gender = trim($_POST['gender']);
    }
    
    // Check email empty
    if(empty(trim($_POST['email']))){
        
    } else{
        $email = trim($_POST['email']);
    }
    
    // Check phone empty
    if(empty(trim($_POST['phone']))){
        
    } else{
        $phone = trim($_POST['phone']);
    }
    
    // Check timing empty
    if(empty(trim($_POST['time']))){
        
    } else{
        $time = trim($_POST['time']);
    }
    
   
    
    // Close connection
    
}





$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'truefitmailer@gmail.com';                 // SMTP username
    $mail->Password = 'Truefit123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('xyz@gmail.com', 'Mailer');
    $mail->addAddress('yalok698@gmail.com', 'website');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    
     // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Member';
    $mail->Body    = $fname;
   $mail->Body    .= $nl;
    $mail->Body   .= $lname;
   
    $mail->Body    .= $gender;
  
     $mail->Body   .= $email;
    
    $mail->Body   .= $phone;
    
    $mail->Body    .= $time;
    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    header("location:index.html");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


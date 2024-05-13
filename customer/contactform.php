<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'chapai.bipana65@gmail.com';   //SMTP write your email
    $mail->Password   = 'xemprvziwpsympce';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('chapai.bipana65@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $_POST["subject"];   // email subject headings
    $mail->Body    = $_POST["message"]; //email message
  // Success sent message alert
  $mail->send();
  echo
  " 
  <script> 
   alert('Message was sent successfully!');
   window.location = '../index.php'

  </script>
  ";
}
?>

<!--Start Contact Us Row-->
<div class="col-md-8">
<!--Start Contact Us 1st Column -->
<!--
<form action="" method="post">
<input type="text" class="form-control" name="name" placeholder="Name"><br>
<input type="text" class="form-control" name="subject" placeholder="Subject"><br>
<input type="email" class="form-control" name="email" placeholder="E-mail"><br>
<textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
  <input class="btn btn-primary" type="submit" value="Send" name="send"><br><br>
  <?php if(isset($msg)) {echo $msg; } ?>
 </form>
</div>
--> <!-- End Contact Us 1st Column-->

<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$conn = mysqli_connect("localhost","root","","buss");


  $emailTo = $_POST['email'];
  $queryCheck = mysqli_query($conn,"select email from register where email='$emailTo'");
  if (mysqli_num_rows($queryCheck)==0) {
    ?>
        <script type="text/javascript">
        alert("You are not registered user Please do register");
        window.location.href = "index";
        </script>
    <?php
  }
  $code = uniqid(true);
  $query = mysqli_query($conn,"Insert into reset_password (code,email) values('$code','$emailTo')");
  if (!$query) {
    exit("Error");
  }

  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'jaunpurbuilders@gmail.com';                     // SMTP username
      $mail->Password   = '@@praveen12math!!';                               // SMTP password
      $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 465;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('jaunpurbuilders@gmail.com', 'jaunpur builders');
      $mail->addAddress($emailTo, 'User');     // Add a recipient
      $mail->addReplyTo('no-reply@gmail.com', 'No-reply');

      // Content
      $url = "http://localhost/buss/resetpassword?code=$code";
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Reset Password';
      $mail->Body    = "You request for reset password<a href='$url'>click here</a> for reset password";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      ?>
          <script type="text/javascript">
          alert("A Password Reset link is sent on your Registered Email!");
          window.location.href = "index";
          </script>
      <?php
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }


?>

<!-- <HTML>
  <body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <div class="row">
    <div class="col-10">
      <a class="navbar-brand" href="index.php">
  <img class="img" src="img/logo8.png" title='Home' style="width:100%">
  </a>
</div>
</div>
  <br><br><br><br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8 style="width:100%">
<form method="post">
  <input class="form-control" type="email" placeholder="Your Registered Email" autocomplete="off" name="email" required>
  <br>
  <div class="row">
    <div class="col-3"></div>
    <div class="col">
  <input class="form-control input1 btn btn-primary" type="submit" name="submit" value="Reset">
</div>
  <div class="col-3"></div>
</div>
</form>
</div>
<div class="col-2"></div>
</div>

</body>
</HTML>

<style>
  .row{
    margin-left:0px;
    margin-right: 0px
  }
</style> -->

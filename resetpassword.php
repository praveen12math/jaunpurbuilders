<?php
$conn = mysqli_connect("localhost","root","","buss");

if (!isset($_GET["code"])) {
  exit("Can't find Page");
}
$code = $_GET["code"];

$getEmailQuery = mysqli_query($conn,"Select email from reset_password where code='$code'");
if (mysqli_num_rows($getEmailQuery)==0) {
  exit("Can't find Page");
}
if (isset($_POST["password"])) {
  $pw = $_POST["password"];
  $row = mysqli_fetch_array($getEmailQuery);
  $email = $row["email"];

  $query = mysqli_query($conn,"update register set password='$pw' where email='$email'");

  if($query)
  {
    mysqli_query($conn,"delete from reset_password where code='$code'");

          ?>
              <script type="text/javascript">
              alert("Your Password is Updated You can Login with new Password");
              window.location.href = "index";
              </script>
          <?php

  }
  else {
    exit("Somthing went worng");
  }
}

?>



<HTML>
  <body style="background-color: #c2e9fb;">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <div class="row">
    <div class="col-10">
      <a class="navbar-brand" href="index">
  <img class="img" src="img/logo8.png" title='Home' style="width:100%">
  </a>
</div>
</div>
  <br><br><br><br><br>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8 style="width:100%">
<form method="post">
  <input class="form-control" type="password" placeholder="New Password" name="password" required>
  <br>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6" style="width:100%">
  <input class="form-control input1 btn btn-success" type="submit" name class="form-control"="submit" value="Update Password">
</div>
  <div class="col-3"></div>
</div>
  </form
</div>
<div class="col-2"></div>
</div>

</body>
</HTML>

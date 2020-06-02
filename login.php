<?php

    session_start();
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'buss');
    $error='';

    $db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
         $myusername=mysqli_real_escape_string($db,$_POST['username']);
         $mypassword=mysqli_real_escape_string($db,$_POST['password']);
         if($myusername=='admin' && $mypassword=='admin')
         {
            $_SESSION['user']= $myusername;
             header('location: welcome_admin');
         }
         else
         {

         $sql="select id from register where email='$myusername' and password='$mypassword'";
         $result=mysqli_query($db,$sql);
         $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
         $active=$row['active'];

         $count=mysqli_num_rows($result);

         if($count==1)
         {
             $_SESSION['user']= $myusername;
            header('location: welcome');
         }
         else
         {
            ?>
            <script type="text/javascript">
            alert("Invalid Username or Password");
            window.location.href = "index";
            </script>
            <?php
         }
    }


?>


<!-- 


<HTML>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel = "icon" href = "img/32X32.png"
type = "image/x-icon">
<title>
    jaunpurbuilders | Login
</title>



<div class="row">
    <div class="col-10"></div>
    <div class="col-2" style="text-align: right">
    <a i class="fas fa-home" style="font-size: 40;color:000000" href="index.php"></a></i>
    </div>
</div>
  <body style="background-color:ffffff">

        <div class="container">
            <div style="text-align: center;font-size: 200%;
        font-family: amita;color:000000">Log in</div>

        <br><br>
        <div class="row">

        <div class="col-lg-4 col-sm-10" style="text-align: center">
            <br>
    <div class="fb">
    <br>
        <i class="fab fa-facebook-f"></i> Register with facebook
        <br><br>
        </div><br>
        <div class="google">
                <br>
                <i class="fab fa-google"></i> Register with Google
                    <br><br>
                    </div><br>

                    <div class="phone">
                        <br>
                        <i class="fas fa-phone"></i> Register with Phone
                            <br><br>
                            </div>
        </div>
        <div class="col-1" style="text-align: center"><br>
            <div class="vl"></div><div class="hr"></div>
            </div>
        <div class="col-lg-6 col-sm-12">

            <form action="login.php" method="POST">
            <div class="row">
                <div class="col-1"></div>
                <div class="col"><br><br>
              <label style="color:000000"><b>Username/Email:</b></label>
              <input class="input1 form-control" type="text" name="username" required>
              <label style="color:000000"><b>Password:</b></label>
              <input class="input1 form-control" type="password" name="password" required>
<div style="font-family: Times New Roman;color: #ff0000"></div>

            </div><br><br>


              </div>
              <br><br>
              <div class="row">
                  <div class="col-2"></div>
                  <div class="col">
                  <input class="input1 form-control btn btn-primary" type="submit" name="submit" value="Login">

              </div>
              <div class="col">
              <a href="register.html"><button type="button" class="btn btn-primary" style="width:100%">Register</button></a>

              </div>
              <div class="col-1"></div>
              <div class="col-12" style="text-align:center;">
                <br>
              <a href="request_reset.php" style="color:red;">Need help? Forgot Password</a>
            </div>
              </div>
            </form>
            </div><div class="col-lg-1 col-sm-1"></div>
            </div>
    </div>
                </body>
</HTML>
<style>
    @import url('https://fonts.googleapis.com/css?family=Amita');
.row{
  margin-left: 0px;
  margin-right: 0px;
}
input{
  border-radius: .3rem;
  height: 40px;
  width: 100%;
}
@media only screen and (max-width: 768px){
  .img{
      width: 80%;
  }
  .navbar-brand{
      width: 79%;
  }
  .hr{
  height: 2px;
  border-left: 330px solid;
}
.fb{
  border-radius: .3rem;
  background-color: #344F86;
  color: #ffffff;
  font-size: 18px;
}
.google{
  border-radius: .3rem;
  background-color: green;
  color: #ffffff;
  font-size: 18px;
}
.phone{
  border-radius: .3rem;
  background-color: red;
  color: #ffffff;
  font-size: 18px;
}
}
@media only screen and (min-width: 768px)
{
body{
  background-image: url("img/new3-Copy.png");
  background-repeat: no-repeat;
  background-position: right top
}
.img{
  width: 65%;
}
.vl{
  height: 300px;
  border-left: 4px solid;
  margin-left: 72px;
}
.fb{
  border-radius: .3rem;
  background-color: #344F86;
  color: #ffffff;
  font-size: 18px;
}
.google{
  border-radius: .3rem;
  background-color: green;
  color: #ffffff;
  font-size: 18px;
}
.phone{
  border-radius: .3rem;
  background-color: red;
  color: #ffffff;
  font-size: 18px;
}
.container{
  margin-bottom: 156;
  margin-top: 71;
}
}
.input1{
  border-radius: .3rem;
  height: 40px;
  width: 100%;
}
</style> -->



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="font-size: 20px">

 <a class="navbar-brand" href="index">
<img class="img" src="img/logo8.png" title='Home'>
</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#something">
      <span class="navbar-toggler-icon" style="color: #000000"></span>
      </button>



    <div class="collapse navbar-collapse justify-content-end" id="something">
    <ul class="navbar-nav"  style="font-family: times new roman">
      <li class="nav-item">
        <a class="nav-link" style="color: #000000" href="aboutus">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #000000" href="service">Sevices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #000000" href="contactus">Contact Us</a>
      </li>

          <?php
          session_start();
          if(isset($_SESSION['user']))
          {

            $conn = new mysqli('localhost','root', '', 'buss');
            $conn1 = new mysqli('localhost', 'root', '', 'buss_user');
            $myemail=$_SESSION['user'];

            $sql= "Select register.*,register1.* from register INNER JOIN register1 ON register.id=register1.id where email='$myemail'";
            $result=mysqli_query($conn,$sql);


            $row=mysqli_fetch_array($result);
            $_SESSION['myid'] = $row['id'];
            $cart = $row['id'];
            $cart = "user$cart";

            $sql1 = "select * from $cart";
            $result1 = mysqli_query($conn1,$sql1);
            $row1=mysqli_fetch_array($result1);
            $cart1 = mysqli_num_rows($result1);

              ?>
            <li class="nav-item">
            <a class="nav-link" style="color: #000000" href="welcome"><?php echo $row['name'];?></a>
          </li>


          <li class="nav-item">
      <a class="nav-link" style="color: #000000" href="cart"><i class="fas fa-shopping-cart" style="font-size:25px" title='Cart'> <span class="badge badge-danger"><?php echo $cart1; ?>
      </span>
    </i>
  </a>
      </li>

            <li class="nav-item">
        <a class="nav-link" style="color:#000000" href="logout.php"><i class="fas fa-sign-out-alt" style="font-size:25px" title='Logout'></i></a>
        </li>

        <?php }
        else{
            ?>
            <li class="nav-item">
            <a href="" class="nav-link" style="color: #000000" data-toggle="modal" data-target="#mymodal">Login</a>
            </li>
            <?php
        }
          ?>


    </ul>
    </div>

  </nav>


<div class="modal" id="mymodal">
    <div class="modal-dialog">
       <div class="modal-content">

           <div class="modal-header">
       <h1>Sign In</h1>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>

   <div class="modal-body">
       <form action="login.php" method="POST">
       <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

           <div class="input-group form-group">

           <div class="input-group-prepend">
               <span class="input-group-text bg-warning"><i class="fas fa-user"></i></span>
           </div>
       <input type="text" class="form-control" name="username" required>
   </div>

   <div class="input-group form-group">

       <div class="input-group-prepend">
           <span class="input-group-text bg-warning"><i class="fas fa-key"></i></span>
       </div>
   <input type="password" class="form-control" name="password" required>

</div>

<button style="float:right" class="btn btn-warning" type="submit">Login</button>
<br><br>
<div class="modal-footer">
   <a href="" data-toggle="modal" data-target="#forgotPwd">Need help? Forgot Password</a>

</div>

   </form>
   <a href="register.html"><button style="float:center" type="button" class="btn btn-warning">Register</button></a>
</div>


</div>
</div>
</div>



<div class="modal" id="forgotPwd">
    <div class="modal-dialog">
       <div class="modal-content">

           <div class="modal-header">
       <h1>Password Recovery</h1>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>

   <div class="modal-body">
     <div class="imgcontainer">
  <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
</div>
<br>
     <form action="request_reset.php" method="post">

       <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text bg-warning"><i class="fas fa-user"></i></span>

          </div>
    <input class="form-control" type="email" name="email" placeholder="Registered Email" required>
    </div>

  <button class="btn  btn-warning" type="submit" style="float:right">Reset</button>
   </div>
<br>
 </form>
   </div>

 </div>
</div>
</div>


  <style>
      @import url('https://fonts.googleapis.com/css?family=Amita');

        @media only screen and (max-width: 768px){
    .img{
        width: 80%;
    }
    .navbar-brand{
        width: 79%;
    }
    li{
      text-align:center
    }
}
@media only screen and (min-width: 768px)
{
  .badge{
    top: 24px;
    font-size: 0.85rem;
    position: absolute;
    right: 51px;
    font-family: sans-serif;
  }

.img{
    width: 65%;
}
}
nav{
  background-color:#e5ee6e
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}
      </style>

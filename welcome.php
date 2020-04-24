
<?php
include('header.php');
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
$conn = new mysqli('localhost', 'root', '', 'buss');
$myemail=$_SESSION['user'];

$sql= "Select register.*,register1.* from register INNER JOIN register1 ON register.id=register1.id where email='$myemail'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


  <link rel = "icon" href = "img/32X32.png"
type = "image/x-icon">
<title>
    jaunpurbuilders | Profile
</title>

<div class="container">
<br><br><br><br>
<div id="log"><a class="a1" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
        </div>
        <br><br>
<div class="row">
  <div class="col-lg-4 col-12">
<img class="img-thumbnail border border-info" src="<?php echo $row['image'] ?>">
</div>

<div class="col-1">
            </div>

   <div class="col-lg-7 col-12">

  <table class="table detail">

    <tbody>
      <tr>
        <td>Name</td>
        <td><?php echo $row['name'];?></td>
      </tr>
      <tr>
        <td>Birthday</td>
        <td><?php echo $row['dob'];?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $row['email'];?></td>
      </tr>

 <tr>
        <td>Phone</td>
        <td><?php echo $row['phone'];?></td>
      </tr>

       <tr>
        <td>Password</td>
        <td>******</td>
      </tr>

       <tr>
        <td>Time Created</td>
        <td><?php echo $row['time'];?></td>
      </tr>

    </tbody>
  </table>
  <hr>


  <?php
  $conn3 = mysqli_connect('localhost','root','','buss_user');
$myadd = $_SESSION['myid'];
$myadd = "add$myadd";
$result1 = mysqli_query($conn3,"select * from $myadd where id=1");
$row1 = mysqli_fetch_array($result1);

if($row1){

  ?>

  <div style="text-align:center" class="detail">
  Address
  <table class="table detail">
  <tbody>
    <tr>
      <td>Country</td>
      <td><?php echo $row1['country']?></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $row1['name']?></td>
    </tr>
    <tr>
      <td>Street</td>
      <td><?php echo $row1['street']?></td>
    </tr>   
    <tr>
    <td>City</td>
    <td><?php echo $row1['city']?></td>
</tr>
<tr>
  <td>State</td>
  <td><?php echo $row1['state'] ?></td>
</tr>
<tr>
  <td>Zip Code</td>
  <td><?php echo$row1['zip']?></td>
</tr>
<tr>
  <td>Phone</td>
  <td><?php echo$row1['phone']?></td>
</tr>
<tr>
  <td>Code</td>
  <td><?php echo$row1['code']?></td>
</tr>
<tr>
  <td></td>
  <td><a href="editAdd.php?id=<?php echo $row['id']?>"><button style="width:100%" class="btn btn-primary">Edit Address </button></a></td>
</tr>
  </tbody>
  </table>
</div>

</div>
  </div>

<?php

}
else{
?>

<table class="table detail">
  <tbody>
<tr>
  <td></td>
  <td>
<a href="addAdd.php"> <button style="width:100%" class="btn btn-primary">Add Address </button> </a>
</td>
</tr>
</table>
</tbody>

<?php

}
?>

<br>

<style>
  @import url('https://fonts.googleapis.com/css?family=Amita');
  @import url('https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap');
  body{
    background-color: #c2e9fb;
  }
  .row{
    /* margin-left: 0px;
    margin-right: 0px; */
  }
  .img-thumbnail{
    height: 300px;
  }
  @media only screen and (max-width: 768px){
    .img{
        width: 80%;
    }
    .navbar-brand{
        width: 79%;
    }
.detail{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px
  }
}
@media only screen and (min-width: 768px)
{
  .img{
    width: 65%;
}
    .detail{
      font-size: 30px;
      font-family: 'Times New Roman', Times, serif;
  }
  .a1{
    margin-right: -105;
  }
  }
  #log{
    text-align: right;
    font-family: amita;
    font-size: 20px;
  }
  </style>

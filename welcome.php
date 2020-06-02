
<?php
include('header.php');
if(isset($_SESSION['user']))
{
  
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

<script type="text/javascript">

function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#blah')
                   .attr('src', e.target.result);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }

</script>

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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatePic">Update Pic</button>

  <?php
  $conn3 = mysqli_connect('localhost','root','','buss_user');
$myadd = $_SESSION['myid'];
$myadd = "add$myadd";
$result1 = mysqli_query($conn3,"select * from $myadd where id=1");
$row1 = mysqli_fetch_array($result1);

if($row1){

  ?>

<button type="button"  class="btn btn-primary float-right ml-2" data-toggle="collapse" data-target="#demo">Show Address</button>
  <div id="demo" class="collapse">


  <div style="text-align:center" class="detail">
  <br><br>
  <h1>Address</h1>
  <table class="table detail">
  <tbody>
    <tr>
      <td>Country</td><td></td>
      <td><?php echo $row1['country']?></td>
    </tr>
    <tr>
      <td>Name</td><td></td>
      <td><?php echo $row1['name']?></td>
    </tr>
    <tr>
      <td>Street</td><td></td>
      <td><?php echo $row1['street']?></td>
    </tr>
    <tr>
    <td>City</td><td></td>
    <td><?php echo $row1['city']?></td>
</tr>
<tr>
  <td>State</td><td></td>
  <td><?php echo $row1['state'] ?></td>
</tr>
<tr>
  <td>Zip Code</td><td></td>
  <td><?php echo$row1['zip']?></td>
</tr>
<tr>
  <td>Phone</td><td></td>
  <td><?php echo$row1['phone']?></td>
</tr>
<tr>
  <td>Code</td><td></td>
  <td><?php echo$row1['code']?></td>
</tr>
</tbody>
  </table>
  </div>
  </div>

  <a href="editAdd?id=<?php echo $row['id']?>"><button style="float:right" class="btn btn-primary">Edit Address
  </button></a>


  </div>

  </div>
</div>

<?php

}
else{
?>

<button style="float:right" class="btn btn-primary" data-toggle="modal" data-target="#addAdd">Add Address </button>

<?php

}
?>

<br>



<div class="modal" id="addAdd">
   <div class="modal-dialog">
      <div class="modal-content">

                <div class="modal-header">
                    <h1>Add Adderss</h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                  <div class="modal-body">

                  <form action="addAdd.php" method="POST">

                  <div class="form-group input-group">
        <div class="input-group-prepend">
        <span class="input-group-text bg-warning"><i class="fas fa-globe"></i></span>
        </div>
<select class="form-control" name="mycountry" id="">
<option>India</option>
</select>
</div>

          <div class="form-group input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-warning"><i class="fas fa-user-tie"></i></span>
          </div>
<input class="input1 form-control" type="text" name="myname" placeholder="Name" required>
</div>

<div class="form-group input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-warning"><i class="fas fa-street-view"></i></span>
          </div>
    <input class="input1 form-control" type="text" name="mystreet" placeholder="Steet Address" required>
    </div>

    <div class="form-group input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-warning"><i class="fas fa-city"></i></span>
          </div>
    <input class="input1 form-control" type="text" name="mycity" placeholder="City" required>
    </div>


    <div class="form-group input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-warning"><i class="fas fa-file-archive"></i></span>
          </div>
    <input class="input1 form-control" type="text" name="myzip" placeholder="Zip Code" required>
    </div>

    <div class="form-group input-group">
          <div class="input-group-prepend">
          <span class="input-group-text bg-warning"><i class="fas fa-mobile"></i></span>
          </div>
    <input class="input1 form-control" type="text" name="myphone" placeholder="Phone Number" required>
 </div>

 <div class="form-group input-group">
          <div class="input-group-prepend">

          </div>
 <select class="form-control" name="mystate" id="">
        <option>Uttar Pradesh</option>
    </select>
    </div>

    <div class="form-group input-group">
          <div class="input-group-prepend">

          </div>
    <input class="input1 form-control" type="text" name="mycode" placeholder="Code">
    </div>

                  </div>

                  <div class="modal-footer">
                  <button type="submit" style="float:right" class="btn btn-warning">Add</button>
                  </div>

                  </form>

    </div>
  </div>
</div>

<div class="modal" id="updatePic">
  <div class="modal-dialog">
    <div class="modal-content">

<div class="modal-header">
  <h1>Update Profile Pic</h1>
    <button type="button" style="color:red" class="close" data-dismiss="modal">&times;</button>
</div>

<form class="" action="updatePic.php" method="post" enctype="multipart/form-data">
<div class="modal-body">
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text bg-warning"><i class="fas fa-file-image"></i></span>
    </div>
    <input class="input1 form-control" type="file" name="file" accept="image/*" onchange="readURL(this);">
    <br>
  </div>
    <img id="blah">
</div>

<div class="modal-footer">
  <button type="submit" class="btn btn-warning">Update</button>
</div>

</form>
    </div>

  </div>
</div>

<?php
}
else{
  header("location:index");
}
?>


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
  #blah{
      max-width:180px;
  }
  </style>

<?php
session_start();
    $country = $_POST['mycountry'];
    $name = $_POST['myname'];
    $street = $_POST['mystreet'];
    $city = $_POST['mycity'];
    $state = $_POST['mystate'];
    $zip = $_POST['myzip'];
    $phone = $_POST['myphone'];
    $code = $_POST['mycode'];

    $myadd = $_SESSION['id'];
    $myadd = "add$myadd";

    $conn = mysqli_connect('localhost','root','','buss_user');
 $sql = mysqli_query($conn,"insert into $myadd(country,name,street,city,state,zip,phone,code)values('$country','$name','$street','$city','$state','$zip','$phone','$code')");
if($sql){
    ?>
    <script type="text/javascript">
    alert("Address Added");
    window.location.href = "welcome.php";
    </script>
    
    <?php
}
else{
    ?>
    <script type="text/javascript">
    alert("Something went wrong");
    window.location.href = "welcome.php";
    </script>
    
    <?php
}
?>

  <!-- <div style="text-align:center;font-size:40px;font-family:amita">
Add Address
</div>
<title>
Add Address
</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<br>

<form action="addAdd.php" method="POST">
<div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
<label><b>Country/Region</b></label>
<select class="form-control" name="country" id="">
<option>India</option>
</select>
<br>
<label><b>Full Name</b></label>
<input class="input1 form-control" type="text" name="name"><br>
    <label><b>Street Address</b></label>
    <input class="input1 form-control" type="text" name="street"><br>
    <label><b>City</b></label>
    <input class="input1 form-control" type="text" name="city"><br>
    <label><b>State</b></label>
    <select class="form-control" name="state" id="">
        <option>Uttar Pradesh</option>
    </select>
    <br>

<div class="row">
    <div class="col-6">
    <label><b>Zip Code</b></label>
    <input class="input1 form-control" type="text" name="zip">
    </div>
    <div class="col-6">
    <label><b>Phone Number</b></label>
    <input class="input1 form-control" type="text" name="phone">
    </div>
    </div>
<br>
    <label><b>Code</b></label>
    <input class="input1 form-control" type="text" name="code" style="width: 50%"><br>
    <input class="form-control" type="submit" style="width:20%;background-color:#c2e9fb" value="Add" name="submit">
</div>
<div class="col-3"></div>

</form>
</body>
<style>
    .row{
        margin-left:0px;
        margin-right:0px;
    }
    .input1{
        width: 100%
    }
    </style> -->
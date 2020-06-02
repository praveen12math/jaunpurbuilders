<?php
 if(isset($_POST['submit'])){
    session_start();

$country = $_POST['country'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$code = $_POST['code'];
$myadd1 = $_SESSION['myid'];
$myadd1 = "add$myadd1";

$conn = mysqli_connect("localhost","root","","buss_user");

$sql = mysqli_query($conn,"update $myadd1 SET country='$country',name='$name',street='$street',city='$city',state='$state',zip='$zip',phone='$phone',code='$code' where id=1");
if($sql){
?>
<script type="text/javascript">
alert("Address Updated");
window.location.href = "welcome";
</script>

<?php
}
else{
echo "Something went wrong";
}
}
else{
    
include('header.php');
?>
<br><br><br><br><br>

<?php 
$myadd = $_GET['id'];
$myadd = "add$myadd";

$conn = mysqli_connect("localhost","root","","buss_user");
$result = mysqli_query($conn,"select * from $myadd where id=1");
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="icon" href="img/32X32.png" type="image/x-icon">
    <title>
        jaunpurbuilders | Edit Address
    </title>
</head>
<body>
    <h1 style="font-family: amita; text-align:center">Edit Address</h1>


        <form action="editAdd" method="POST">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 col-sm-12">
            <label><b>Country/Region</b></label>
            <select class="form-control" name="country" id="" value="<?php echo $row['country'] ?>">
            <option>India</option>
            </select>
            <br>
            <label><b>Full Name</b></label>
            <input class="input1 form-control" type="text" name="name" value="<?php echo $row['name'] ?>"><br>
                <label><b>Street Address</b></label>
                <input class="input1 form-control" type="text" name="street" value="<?php echo $row['street'] ?>"><br>
                <label><b>City</b></label>
                <input class="input1 form-control" type="text" name="city" value="<?php echo $row['city'] ?>"><br>
                <label><b>State</b></label>
                <select class="form-control" name="state" id="" value="<?php echo $row['state'] ?>">
                    <option>Uttar Pradesh</option>
                </select>
                <br>
            
            <div class="row">
                <div class="col-6">
                <label><b>Zip Code</b></label>
                <input class="input1 form-control" type="text" name="zip" value="<?php echo $row['zip'] ?>">
                </div>
                <div class="col-6">
                <label><b>Phone Number</b></label>
                <input class="input1 form-control" type="text" name="phone" value="<?php echo $row['phone'] ?>">
                </div>
                </div>
            <br>
                <label><b>Code</b></label>
                <input class="input1 form-control" type="text" name="code" style="width: 50%" value="<?php echo $row['code'] ?>"><br>
<div class="row">
    <div class="col">
                <input class="form-control" type="submit" style="width:100%;background-color:#c2e9fb" value="Update" name="submit">
</div>
<div class="col">
            <a href="welcome"><button type="button" class="btn" style="width:100%;background-color:#c2e9fb">Cancel</button></a>
</div>
</div>
            </div>
            <div class="col-3"></div>
            
            </form>


</body>
</html>
<?php
}
?>

<style>
    .row{
        margin-left:0px;
        margin-right:0px;
    }
    .input1{
        width: 100%
    }
    </style>
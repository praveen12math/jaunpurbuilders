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
    window.location.href = "welcome";
    </script>
    
    <?php
}
else{
    ?>
    <script type="text/javascript">
    alert("Something went wrong");
    window.location.href = "welcome";
    </script>
    
    <?php
}
?>
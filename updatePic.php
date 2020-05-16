<?php
session_start();
$myid = $_SESSION['myid'];
$file = $_FILES['file'];

$ext = pathinfo($file['name'],PATHINFO_EXTENSION);

  $conn = mysqli_connect('localhost','root','','buss');

  $destinationfile = 'upload/'.$myid.".".$ext;
 move_uploaded_file($file['tmp_name'],$destinationfile);

 $INSERTO = mysqli_query($conn,"update register1 set image='$destinationfile' where id='$myid'");
 if($INSERTO){
   echo "<script type='text/javascript'> alert('Profile Pic Updated'); window.location.href = 'welcome.php';</script>";
 }

 ?>

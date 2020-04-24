<?php
 
session_start();

/* [ERROR CHECKING] */
if ($_FILES['upFile']['size']==0) { die("No file selected"); }
if (exif_imagetype($_FILES['upFile']['tmp_name'])===false) { die("Not an image"); }

        $host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "buss";

        $conn = new mysqli($host, $dbusername, $dbpass, $dbname);
        $result = $_SESSION['none'];
/* [INSERT IMAGE] */
// DO YOUR ERROR CHECKING HERE IF YOU WANT

  $stmt = $conn->prepare("INSERT INTO `register` where id='$result'(`img-name`,`image`) VALUES (?, ?)");
  $stmt->execute([$_FILES["upFile"]["name"], file_get_contents($_FILES['upFile']['tmp_name'])]);


/* [ON COMPLETE] */
// DO SOMETHING, MAYBE REDIRECT THE USER TO ANOTHER PAGE
// header("Location: http://example.com/abc.php");
echo "OK";
?> 
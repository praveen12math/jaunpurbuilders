<?php
if(isset($_POST['submit'])){
    $file = $_FILES['image'];

    echo $file['name'];
    echo "<br>";
    echo $file['tmp_name'];
    echo "<br>";
    echo $file['type'];
    echo "<br>";
    echo $file['error'];

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newFile.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
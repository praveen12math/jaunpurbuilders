<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    if(!empty($name) || !empty($email) || !empty($phone) || !empty($message))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpass = "";
        $dbname = "buss";

        $conn = new mysqli($host, $dbusername, $dbpass, $dbname);

        if(mysqli_connect_error())
        {
             die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else{
            // $SELECT = "SELECT email From contactus Where email = ? Limit 1";
            $INSERT = "INSERT Into contactus (name,email,phone,message) values(?,?,?,?)";

                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssis",$name ,$email, $phone, $message);
                $stmt->execute();


                ?>
<script type="text/javascript">
alert("Thankyou for contacting we will back you soon!");
window.location.href = "contactus.php";
</script>
<?php
                //header("location: contactus.php");

                      }

            $stmt->close();
            $conn->close();
        }
        else{
            echo "All field required";
            die();
        }


?>

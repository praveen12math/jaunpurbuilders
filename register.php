<?php
session_start();
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $file = $_FILES['file'];
    $filename = $file['name'];
    $filetype = $file['type'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    if(!empty($name) || !empty($email) || !empty($phone) || !empty($password))
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
            $SELECT = "SELECT email From register Where email = ? Limit 1";


            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum = $stmt->num_rows;

            if($rnum==0)
            {
                $stmt->close();



                $INSERT = "INSERT Into register (name,dob,email,phone,password) values('$name','$dob','$email','$phone','$password')";
                $query_run = mysqli_query($conn,$INSERT);



                if($query_run)
                {
                     $_SESSION['user']= $email;
                     $sql="select id from register where email='$email'";
                     $result = mysqli_query($conn,$sql);
                     $row=mysqli_fetch_array($result);
                     $lol= $row['id'];

                     $destinationfile = 'upload/'.$lol.$filename;
                    move_uploaded_file($filetmp,$destinationfile);

                    $INSERTO = "INSERT Into register1(id,image) values('$lol','$destinationfile')";
                    mysqli_query($conn,$INSERTO);

                    $sql1 = mysqli_query($conn,"select id from register where email='$email'");
                    $row1 = mysqli_fetch_array($sql1);
                    $myadd = $row1['id'];
                    $myid = $row1['id'];
                    $myid = "user$myid";
                    $myadd = "add$myadd";


                     $conn1 = mysqli_connect('localhost','root','','buss_user');
                      mysqli_query($conn1,"create table $myid(id int not null primary key auto_increment,productName varchar(300),price int,quantity varchar(200),type varchar(200))");
                      mysqli_query($conn1,"create table $myadd(id int not null primary key auto_increment,country varchar(100),name varchar(200),street varchar(200),city varchar(100),state varchar(100),zip varchar(10),phone varchar (20),code int)");


                     header("location:registered.html");
                }
                else{
                    echo '<script type="text/javascript">alert("Registration failed")</script>';
                }

            }
            else
            {
              ?>
<script type="text/javascript">
alert("This Email id is already registered Try another!");
window.location.href = "register.html";
</script>
<?php
            }

            $conn->close();

        }
    }
        else{
            echo "All field required";
            die();
        }
?>

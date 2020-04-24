
<?php
$error='';
?>


<?php
include('header.php');
?>
  <br><br>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <body>
        <br>
        <img src="img/contactus.gif" class="img-fluid" style="width:100%">
        <br><br>
        <div class="row">
                
            <div class="col-lg-6 col-sm-10">
                <form action="contactus_insert.php" method="POST">

        <input type="text" class="form-control" placeholder="Full Name" name="name" required><br>
        <input type="email" class="form-control" placeholder="Valid Email" name="email" required><br>
        <input type="number" class="form-control" placeholder="Phone" name="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br>
        <textarea  class="form-control" placeholder="Message" style="height: 85px;" name="message" required></textarea><br>

        <input type="submit" class="form-control" value="Submit" name="submit">
        </form>
        </div>
        <div class="col-lg-6 col-sm-10">
            
                    <i class="fas fa-map-marker-alt" style="font-size:20px"><a href="callto:"> Chandpur Muradganj Jaunpur Uttar Pradesh (222002)</a></i>
                    <br><br>
                    <i class="fas fa-mobile" style="font-size:20px"><a href="tel:+917800087898"> +91 7800087898</a></i>
                    <br><br>
                    <i class="fas fa-envelope" style="font-size:20px"><a href="mailto:jaunpurbuilders@gmail.com"> jaunpurbuilders@gmail.com</a>
                    </i>
<br><br>
                    <div class-row>
                    <div class="col-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.36758964401!2d82.66826531466116!3d25.72535481638338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDQzJzMxLjMiTiA4MsKwNDAnMTMuNiJF!5e0!3m2!1sen!2sin!4v1566401434070!5m2!1sen!2sin" width="100%" height="200px" frameborder="0" style="border-radius:7px" allowfullscreen></iframe>
      </div>
      </div>
      <br><br>
      </div>
            </body>

            <?php
            include('footer.php');
            ?>

  <style>
      body{
        background-color: #c2e9fb;
}
.row{
    margin-left: 0px;
    margin-right: 0px;
}
  @media only screen and (max-width: 768px){
    .img{
        width: 80%;
    }
    .navbar-brand{
        width: 79%;
    }
    input{
        width: 100%;
        height: 35px;
        border-radius: .3em;
    }
    textarea{
        width: 100%;
        height: 35px;
        border-radius: .3em;
    }
}
@media only screen and (min-width: 768px)
{
.img{
    width: 65%;
}
textarea{
    width: 80%;
    height: 35px;
    border-radius: .3em;
}
}
  </style>

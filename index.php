<?php
include('header.php');
$_SESSION['id'] = $row['id'];
?>

<link rel = "icon" href = "img/32X32.png"
type = "image/x-icon">
<title>
    jaunpurbuilders
</title>


<body style="background-color: #c2e9fb;">
    <div id="demo" class="carousel slide" data-ride="carousel" style="background-color: #c2e9fb">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img1" src="img/img3.jpg">
                </div>
        <div class="carousel-item">
            <img class="img1" src="img/img4.jpg">
            </div>

                <div class="carousel-item">
                    <img class="img1" src="img/img2.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
        </a>

        <div class="div1">we deliver
              <span>as you want</span>
            </div>

    </div>

    <div class="row">
            <div class="col-lg-3 col-sm-12 active">
    <div class="card" alt="Card image"><a href="ganga-sand.php">
        <img class="card-img-top" src="img/ganga-sand.jpg" style="width: 100%;height: 230px">
      </a>
        <div class="card-body">
            <div class="card-title">Ganga River Sand</div>

            <form action="insertcart.php?name=Ganga Sand&price=50000&type=Truck (50000 Rs/)" method="POST">
              <input class="btn btn-primary" type="submit"value="Add to Cart">
              <select name="quantity">
              <option>1 </option>
              <option>2 </option>
              <option>3 </option>
              <option>4 </option>
              <option>5 </option>
              <option>10 </option>
              <option>15 </option>
              <option>20 </option>
              <option>30 </option>
              <option>50 </option>
            </select>

          </form>

            </div>
            </div><br>
            </div>
            <div class="col-lg-3 col-sm-12">
                    <div class="card" alt="Card image">
                      <a href="son-sand.php">
                        <img class="card-img-top" src="img/dala-sand1.png" style="width: 100%;height: 230px">
                      </a>
                        <div class="card-body">
                        <div class="card-title">River Son Sand(Chopan)</div>


                        <form action="insertcart.php?name=Son Sand&price=50000&type=Truck (50000 Rs/)" method="POST">
                          <input class="btn btn-primary" type="submit"value="Add to Cart">
                          <select name="quantity">
                          <option>1</option>
                          <option>2 </option>
                          <option>3 </option>
                          <option>4 </option>
                          <option>5 </option>
                          <option>10 </option>
                          <option>15 </option>
                          <option>20 </option>
                          <option>30 </option>
                          <option>50 </option>
                        </select>
                      </form>
                        </div>
                        </div> <br>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                            <div class="card" alt="Card image">
                              <a href="#">
                                <img class="card-img-top" src="img/dhuddi-sand.jpg" style="width: 100%;height: 230px">
                              </a>
                                <div class="card-body">
                                <div class="card-title">Dhuddi Sand</div>


                                <form action="insertcart.php?name=Dhuddi Sand&price=50000&type=Truck (50000 Rs/)" method="POST">
                                  <input class="btn btn-primary" type="submit"value="Add to Cart">
                                  <select name="quantity">
                                  <option>1 </option>
                                  <option>2 </option>
                                  <option>3 </option>
                                  <option>4 </option>
                                  <option>5 </option>
                                  <option>10 </option>
                                  <option>15 </option>
                                  <option>20 </option>
                                  <option>30 </option>
                                  <option>50 </option>
                                </select>
                              </form>
                                </div>
                                </div>   <br>
                            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="card" alt="Card image">
                  <a href="dala-stone.php">
                    <img class="card-img-top" src="img/dala-stone.jpg" style="width: 100%;height: 230px">
                  </a>
                    <div class="card-body">
                    <div class="card-title">Dala Crused Stone</div>


                    <form action="insertcart.php?name=Dala Crused Stone&price=80000&type=Truck (80000 Rs/)" method="POST">
                      <input class="btn btn-primary" type="submit"value="Add to Cart">
                      <select name="quantity">
                      <option>1 </option>
                      <option>2 </option>
                      <option>3 </option>
                      <option>4 </option>
                      <option>5 </option>
                      <option>10 </option>
                      <option>15 </option>
                      <option>20 </option>
                      <option>30 </option>
                      <option>50 </option>
                    </select>
                  </form>
                    </div>
                    </div>   <br>
                </div>

                <div class="col-lg-3 col-sm-12">
                            <div class="card">
                              <a href="small-stone.php">
                                <img class="card-img-top" src="img/small-stone1.png" style="width: 100%;height: 230px">
                              </a>
                                <div class="card-body">
                                    <div class="card-title">Small Gravel Stone</div>

                                    <form action="insertcart.php?name=Small Gravel Stone&price=0&type=Truck" method="POST">
                                      <input class="btn btn-primary" type="submit"value="Add to Cart">
                                      <select name="quantity">
                                      <option>1 </option>
                                      <option>2 </option>
                                      <option>3 </option>
                                      <option>4 </option>
                                      <option>5 </option>
                                      <option>10 </option>
                                      <option>15 </option>
                                      <option>20 </option>
                                      <option>30 </option>
                                      <option>50 </option>
                                    </select>
                                  </form>
                                    </div>
                                    </div><br>
                                    </div>
                 <div class="col-lg-3 col-sm-12">
                    <div class="card">
                      <a href="brick.php">
                        <img class="card-img-top" src="img/brick.png" style="width: 100%;height: 230px">
                      </a>
                        <div class="card-body">
                            <div class="card-title">Bricks</div>

                            <form action="insertcart.php?name=Bricks&price=5&type=Piece (5 Rs Per Piece)" method="POST">
                              <input class="btn btn-primary" type="submit"value="Add to Cart">
                            <select name="quantity">
                            <option>1000</option>
                            <option>2000</option>
                            <option>4000</option>
                            <option>6000</option>
                            <option>8000</option>
                            <option>10000</option>
                            <option>20000</option>
                            <option>50000</option>
                          </select>
                        </form>
                            </div>
                            </div><br>
                            </div>
                 <div class="col-lg-3 col-sm-12">
                   <div class="card">
                     <a href="cement-brick.php">
                    <img class="card-img-top" src="img/cement-brick.png" style="width: 100%;height: 230px">
                  </a>
                     <div class="card-body">
                          <div class="card-title">Cement Bricks</div>

                                 <form action="insertcart.php?name=Cement Bricks&price=8&type=Piece (8 Rs Per Piece)" method="POST">
                                   <input class="btn btn-primary" type="submit"value="Add to Cart">
                                 <select name="quantity">
                                 <option>1000</option>
                                 <option>2000</option>
                                 <option>4000</option>
                                 <option>6000</option>
                                 <option>8000</option>
                                 <option>10000</option>
                                 <option>20000</option>
                                 <option>50000</option>
                               </select>
                             </form>
                          </div>
                       </div><br>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                         <div class="card">
                           <a href="cement.php">
                          <img class="card-img-top" src="img/cement.jpg" style="width: 100%;height: 230px">
                        </a>
                               <div class="card-body">
                          <div class="card-title">Cement</div>

                        <form action="insertcart.php?name=Cement&price=200&type=Bag (200 Rs Per Bag)" method="POST">
                          <input class="btn btn-primary" type="submit"value="Add to Cart">
                        <select name="quantity">
                        <option>200</option>
                        <option>500</option>
                        <option>1000</option>
                        <option>1500</option>
                        <option>2000</option>
                        <option>5000</option>
                      </select>
                    </form>
                             </div>
                              </div><br>
                    </div>


                            </div>
    </body>
  
<?php
  include("footer.php");
?>

    <style>

@import url('https://fonts.googleapis.com/css?family=Amita');
@media only screen and (max-width: 768px)
{
  .img1
  {
      width: 100%;
      height: 300px;
  }
}
@media only screen and (min-width: 768px)
{
.img1
{
  width: 100%;
  height: 450px;
}
}
.row{
  margin-left: 0px;
  margin-right: 0px;
}
.div1{
  text-align:center;
  /* background:linear-gradient(141deg, #ccc 25%, #eee 40%, #ddd 55%); */
  color:black;
  font-family: "Amita";
  font-weight:300;
  font-size:32px;
  padding-top:1vh;
  height:10vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(10,0,0);
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.div1:first-of-type {    /* For increasing performance
                       ID/Class should've been used.
                       For a small demo
                       it's okaish for now */
  animation: showup 7s infinite;
}

.div1:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

.div1:last-of-type span {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:100px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    50% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:100%;}
}
.card{
  border-radius: .5rem
}
select{
  border-radius: .2rem;
  height: 35px;
  width: 35%;
}
        </style>

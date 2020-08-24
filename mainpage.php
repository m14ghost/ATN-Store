<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATN Store</title>
    <link rel="icon" type="image/ico" href="img/vip.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

    <div id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
           <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="icon"></div>   
              <a  class="navbar-brand" href="mainpage.php">ATN Store</a> 
           </div>
          
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="showproduct.php">Product</a></li>
                <li><a href="#mission">Mission</a></li>
                <li><a href="menuadmin.php">ADMIN</a></li>
                  </ul>
                </li>
              </ul>
          </div>
         </div>     
     </div> 


<!-- pricing section -->

 <div id="pricing" class="pricing">
   <div class="container">
     <div class="row">
       <h2 class="wow fadeInUp">Product</h2>
       <p class="wow fadeInUp" data-wow-delay="0.6s">Featured Products</p>
       <div class="col-lg-4 col-md-4 wow flipInY" data-wow-delay="0.4s">
         <div class="packages" id="flip1">
           <div class="thumbnail">
              <h4>Car</h4>
              <img src="images/car1.jpg" alt="tshirt">
           </div>           
           <p class="wow fadeInUp" data-wow-delay="0.4s">This is Car product from ATN Store</p>
           <hr>
           <a href="showproduct.php" class="btn btn-primary" role="button">View More</a>
         </div>
       </div>
         <div class="col-lg-4 col-md-4 wow flipInY" data-wow-delay="0.8s">
         <div class="packages" id="flip2">
            <div class="thumbnail">
                <h4>Helicopter</h4>
                <img src="images/heli1.jpg" alt="shirt">
             </div> 
           <p class="wow fadeInUp" data-wow-delay="0.8s">This is Helicopter product from ATN Store</p>
           <hr>
           <a href="showproduct.php" class="btn btn-primary" role="button">View More</a>
         </div>
       </div>
         <div class="col-lg-4 col-md-4 wow flipInY" data-wow-delay="1.2s" >
         <div class="packages" id="flip3">
            <div class="thumbnail">
                <h4>Gun</h4>
                <img src="images/gun.jpg" alt="tshirt">
             </div> 
             <p class="wow fadeInUp" data-wow-delay="0.8s">This is Gun product from ATN Store</p>
           <hr>
           <a href="showproduct.php" class="btn btn-primary" role="button">View More</a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- End of pricing section -->

<!-- mission section starts here -->

  <div id="mission" class="mission">
    <div class="container">
      <div class="col-lg-6 col-md-6" id="left-side">
        <h1 class="wow fadeInLeft">Why are we different ?</h1>
        <p class="wow slideInUp">Our mission is to bring people the best quality products at reasonable prices.</p>
      </div>
      <div class="col-lg-6 col-md-6 wow slideInRight" id="right-side">
        <img src="./images/diamond.png" alt="diamond">
      </div>
    </div>
  </div>


  <!-- mission section ends -->


<!-- footer section begins here -->

<div id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4" >
        <h4>Contact us</h4>
        <p><i class="fas fa-home"></i>Guess :))</p>
        <p><i class="fas fa-envelope"></i> myemai@gmail.com</p>
        <p><i class="fas fa-phone"></i> 0000000000</p>
      </div>

      <div class="col-lg-4 col-md-4" >
        <h4>Thanks</h4>
        <p>I hope you get the right product from my store. Thanks for visiting.</p>
      </div>

       <div class="col-lg-4 col-md-4" >
        <h4>Follow Us</h4>
        <a href="#"><i class="social fab fa-facebook"></i></a>
        <a href="#"><i class="social fab fa-twitter"></i></a>
        <a href="#"><i class="social fab fa-youtube"></i></a>
      </div>

    </div>
  </div>
</div>


  <script type="text/javascript" src="js/jquery.js"></script>   
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

              <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

  
</body>
</html>

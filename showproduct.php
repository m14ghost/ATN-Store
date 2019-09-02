<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - ATN Store</title>
    <link rel="icon" type="image/ico" href="/img/vip.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
</head>
<body>
<?php
require_once 'functions.php';
require_once 'menupage.php';
//load items
$query = "SELECT iId, iName, iDescription, iPrice, iImage FROM item ";
$result = queryMysql($query);
$error = $msg = "";
if (!$result){
    $error = "Couldn't load data, please try again.";
}

?>

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
                  </ul>
                </li>
              </ul>
          </div>
         </div>     
     </div>
     <br><br><br><br>


<!-- products section --> 



<?php
     $query = "SELECT * FROM item";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     foreach ($result as $row) {
        $iId = $row[0];
        $iName = $row[1];
        $iDescription = $row[2];
        $iPrice = $row[3];
        $iSize = $row[4];
        $iImage = $row[5];
        
        echo "
        
        <div class='sp w3-quarter w3-card w3-center'>
        <div>
        <img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./img/". $iImage . "' width='100%'>
        </div>
        <div class='name'><h4>$iName</h4>
        </div>
        <h4>$ $iPrice</h4>
        <hr>
            <a onclick=\"document.getElementById('$iName').style.display='block'\" class='btn btn-primary' role='button'>View More</a>
        </div>


        <div id='$iName' class='w3-modal'>
        <div class='w3-modal-content w3-animate-top w3-card-4'>
            <div class='w3-container w3-red w3-center w3-padding-20'> 
            <span onclick=\"document.getElementById('$iName').style.display='none';\"
            class='w3-button w3-red w3-xlarge w3-display-topright'>×</span>
            <h2>$iName</h2>
            </div>
            <div class='w3-container w3-row'>
            <div class='w3-half'>
                <img src='./img/". $iImage . "' width='100%'>
            </div>
            <div class='w3-half w3-left'>
                <h3>Price $ $iPrice</h3>
                <p>$iDescription.</p>                           
            </div>                                                    
            </div>
            <button class='w3-button w3-red w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
        </div>
        </div>";      
     }
?>

  


  <script type="text/javascript" src="js/jquery.js"></script>   
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

              <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

  
</body>
</html>
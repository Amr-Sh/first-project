<?php
//session 
session_start();
if(!isset($_SESSION['email']))
   header('Location:forms/index.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="with=device-width,initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css" >

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://www.w3schools.com/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

 .w3-card{
  margin-bottom: 40px

}

.m{margin-bottom:60px}

  .card{margin-bottom: 20px;margin-top: 20px}



</style>
</head>
<body>



<div class="m" id="home">
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <nav>

      <a href="home.php" class="w3-bar-item w3-button"></i> Home</a>
      <a href="allProducts.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> All Products</a>
      <a href="account" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Account</a>
      <a href="logOut.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Log out</a>

    </nav>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

</div>
<div class="container">
    <div class="row">
  <!------------------------------------->
  <?php

// create associative array
     $products= [
          'watch' => [
              'name'=>'watch',
              'price' => '620',
              'img' => 'images/1.jpg',
              'desc' => 'that is a good product'
            ],

        'watch2' => [
              'name'=>'watch',
              'price' => '6500',
              'img' => 'images/2.jpg',
              'desc' => 'that is a good product'
            ],
       'head ' => [
              'name'=>'hed phone',
              'price' => '6500',
              'img' => 'images/3.jpg',
              'desc' => 'that is a good product'
            ],
        'head phone'=>[
              'name'=>'hed phone',
              'price'=>'3600',
              'img'=>'images/4.jpg',
              'desc' => 'that is a good product'
            ],
       'glasses' => [
             'name'=>'glasses',
              'price' => '6500',
              'img' => 'images/5.jpg',
              'desc' => 'that is a good product'
            ],
        'camera A700D' => [
              'name'=>'camera A700D',
              'price' => '6500',
              'img' => 'images/6.jpg',
              'desc' => 'that is a good product'
            ],           
    ];


//make a loop..

Foreach($products as $product => $values)
{
  //to print all kyes
$all=array_keys( $products[$product]);

  ?>
  <div class="col-lg-4 col-md-6 col-sm-6 col">
    <div class="card" style="width: 18rem;">
    <img src="<?php echo $values['img'] ?>" width='300'height='250' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo /*$prouct*/$values['name'] .'<hr>';   ?></h5>

           <h5 class="card-text"><?php

           echo $all[1].': $'.$values['price']; ?>
             
           </h5>
           <p><?php echo $values['desc'] ?></p>

          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
    </div>
  </div>
  <?php
}?>
  <!--------------------------------------------->

</div>
</div>



<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 


<script src="js/jquery-3.5.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
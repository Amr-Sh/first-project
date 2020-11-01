<?php
session_start();

if(!isset($_SESSION['email']))
{
   header('Location:../forms');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">



    <style type="text/css">
        






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
      <a href="../home.php" class="w3-bar-item w3-button"></i> Home</a>
      <a href="../allProducts.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> All Products</a>
      <a href="../account" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Account</a>
      <a href="../logOut.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Log out</a>
    </nav>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
</div>
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="handel_account.php">
                        <h2 class="form-title">Update account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" value="<?php 
                          if(isset($_SESSION['name']))
                                {
                                  echo $_SESSION['name'];
                                }else{echo 'Your name';}
                        ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" value="<?php 
                            echo $_SESSION['email']?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password"  value="<?php 

                            echo $_SESSION['pass']?>"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                       <div class="form-group">
                            <input type="text" class="form-input" name="face" id="re_password" value="<?php 
                          if(isset($_SESSION['face']))
                                {
                                  echo $_SESSION['face'];
                                }else{echo 'Facebook account';}
                        ?>"/>
                        </div>
                       <div class="form-group">
                            <input type="text" class="form-input" name="twitter" id="re_password" value="<?php 
                          if(isset($_SESSION['twitter']))
                                {
                                  echo $_SESSION['face'];
                                }else{echo 'Twitter account';}
                        ?>"/>
                        </div>

                          <div class="form-group">
                            <input type="text" class="form-input" name="insta" id="re_password" value="<?php 
                          if(isset($_SESSION['insta']))
                                {
                                  echo $_SESSION['face'];
                                }else{echo 'Instagram account';}
                        ?>"/>
                        </div>


                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </div>






     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>


    <!-- JS -->

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styling.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
     <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">HOME</a></li>
              <li><a href="signup.html">SIGN UP</a></li>
              <li><a href="login.html">LOGIN</a></li>
              <li><a href="about.html">ABOUT US</a></li>
              <li><a href="contactus.html">CONTACT US</a></li>
            
               <li class = "active"><a href="adminwelcome.php"> ADMIN WELCOME</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">PAGES</a>
                <ul class="dropdown-menu">
                  <li><a href="about.html">ABOUT US</a></li>
                  <li><a href="signup.html">SIGN UP</a></li>
                  <li><a href="login.html">LOGIN</a></li>
                  <li><a href="">CONTACT US</a></li>
                  <li><a href="gallery.html">GALLERY</a></li>
                  <li><a href="adminreset.php">RESET YOUR PASSWORD</a></li>
                  <li><a href="adminlogout.php">SIGN OUT OF YOUR ACCOUNT</a></li>
                  
                </ul>
              </li>
              
              <li class="probootstra-cta-button last"><a href="adminhome.php" class="btn btn-primary">Donor Donations</a></li>
              <li class="probootstra-cta-button last"><a href="https://dashboard.stripe.com/test/payments?status%5B%5D=successful" class="btn btn-primary">Donor Payment</a></li>
             
            </ul>
          </div>
        </div>
      </nav>
      
      <section class="probootstrap-hero" style="background-image: url(img/photo-1488265333142-353a12931ee9.jpg)"  data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">

                <li><h1 class="probootstrap-heading probootstrap-animate">Hello Admin, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Welcome to iDONATE.</h1></li>
                
              </div>
            </div>
          </div>
        </div>
       
      </section>

     
      
     
      
     
      <section class="probootstrap-half">
        <div class="image">
          <div class="image-bg">
            <img src="img/photo-1497528892195-b4ee7ea4f8bc.jpg">
          </div>
        </div>
        <div class="text">
          <div class="probootstrap-animate">
            <h3>WELCOME TO IDONATE</h3>
            <b><p>Welcome to iDONATE where you will be able to interact with our site, learn more about us, and also have a look at the donations made by the donor to the system. The donations will be inform of either food items or means of payment.</p></b>
           
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          
            <div class="col-md-6 probootstrap-animate">
              <h3>ABOUT US</h3>
              <p><img src="img/photo-1504159506876-f8338247a14a.jpg" class="img-responsive"></p>
              <b><p>iDONATE is a interactive site where it creates  awareness on areas that are worst hit by malnutrition and through that you are able to make donations to those areas inorder to help save those lives.</p></b>
              <p><a href="about.html" class="btn btn-primary">About Us</a></p>
              
            </div>
            <div class="col-md-3 probootstrap-animate">
              <h3>iDONATE GALLERY</h3>
              
              <div class="owl-carousel owl-carousel-fullwidth">
                <div class="item">
                  <a href="img/photo-1459183885421-5cc683b8dbba.jpg" class="image-popup">
                    <img src="img/photo-1459183885421-5cc683b8dbba.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/photo-1459676445872-394d7f5946e8.jpg" class="image-popup">
                    <img src="img/photo-1459676445872-394d7f5946e8.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/photo-1488265333142-353a12931ee9.jpg" class="image-popup">
                    <img src="img/photo-1488265333142-353a12931ee9.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/photo-1509099836639-18ba1795216d.jpg" class="image-popup">
                    <img src="img/photo-1509099836639-18ba1795216d.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/photo-1523881374236-dd34f6ac1226.jpg" class="image-popup">
                    <img src="img/photo-1523881374236-dd34f6ac1226.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/5957394677_3e9b202231.jpg" class="image-popup">
                    <img src="img/5957394677_3e9b202231.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/SOMALIA-FAMINE.jpg" class="image-popup">
                    <img src="img/SOMALIA-FAMINE.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/image1170x530cropped.jpg" class="image-popup">
                    <img src="img/image1170x530cropped.jpg"  class="img-responsive">
                  </a>
                </div>
                <div class="item">
                  <a href="img/News_Somalia_Distribution.jpg" class="image-popup">
                    <img src="img/News_Somalia_Distribution.jpg"  class="img-responsive">
                  </a>
                </div>
              </div>

              <p class="text-center"><a href="gallery.html" class="btn btn-primary">View all gallery</a></p>

            </div>
          </div>
        </div>
      </section>

      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4 probootstrap-animate">
              <div class="probootstrap-footer-widget">
                <h3>ABOUT US</h3>
                <b><p>iDONATE is an interactive site where it creates  awareness on areas that are worst hit by malnutrition and through that you are able to make donations to those areas inorder to help save those lives.</p></b>
                <p><a href="about.html" class="btn btn-primary">About Us</a></p>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
           
            <div class="col-md-4 probootstrap-animate">
              <div class="probootstrap-footer-widget">
                <h3>CONTACT INFO</h3>
                <ul class="probootstrap-contact-info">
                
                    
                  <li><i class="icon-mail"></i><span>kenation215@gmail.com</span></li>
                  <li><i class="icon-mail"></i><span>keith.onyango@strathmore.edu</span></li>
                   <li><i class="icon-mail"></i><span>sufyaanzarak@live.com</span></li>
                  <li><i class="icon-mail"></i><span>sufyaan.abdulaziz@strathmore.edu</span></li>
                  <li><i class="icon-phone2"></i><span>+254708190804</span></li>
                  <li><i class="icon-phone2"></i><span>+254708906543</span></li>
                </ul>
                
              </div>
            </div>

            <div class="col-md-4 probootstrap-animate">
              <div class="probootstrap-footer-widget">
                <h3>DONATE TODAY</h3>
                <b><p>Donations can be made inform of food items or payment means.Donate to help make a difference and save lives </p></b>
                <p><a href="donorcreate.php" class="btn btn-primary">Make Donations</a></p>
                <p><a href="https://www.paypal-mobilemoney.com/m-pesa" class="btn btn-primary">Make Payment</a></p>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2019 <a href="">IDONATE</a>. 
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
   
   
</body>
</html>
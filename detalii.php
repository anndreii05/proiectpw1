<?php
       //include connection file
        include 'connection.php';
        $sql="SELECT * FROM atestat WHERE ID='{$_GET['id']}'";
        $query=  mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
?>


<!DOCTYPE>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Atestate informatica">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title><?php echo $row['nume']; ?> - Atestate informatică</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


<!-- CSS Here -->
   <!-- MagnificPopup.css -->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!-- SlickNav.css -->
   <link rel="stylesheet" href="assets/css/slicknav.min.css">
   <!-- Owl.carousel.css -->
   <link rel="stylesheet" href="assets/css/owl.carousel-2.3.4.min.css">
   <!-- Fontawesome.css -->
   <link rel="stylesheet" href="assets/css/fontawesome-free-5.12.0.min.css">
   <!-- Bootstrap.css -->
   <link rel="stylesheet" href="assets/css/bootstrap-4.3.1.min.css">
   <!-- Default.css -->
   <link rel="stylesheet" href="assets/css/default.css">
   <!-- Style.css -->
   <link rel="stylesheet" href="assets/css/style.css">
   <!-- Responsive.css -->
   <link rel="stylesheet" href="assets/css/responsive.css">

   <!-- ColorNip.css -->
   <link rel="stylesheet" href="assets/css/colornip.min.css">
   <link id="theme" rel="stylesheet" href="assets/css/theme-colors/theme-default.css">


   <!-- Jquery -->
   <script src="assets/js/jquery-3.4.1.min.js"></script>

</head>
<body>
     
     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logare administrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form name="login" method="post" action="login.php">
             Nume de utilizator:<br>
             <input type="text" style="width: 100%" id="username" name="username"><br>
             Parola:<br><!-- comment -->
             <input type="password" style="width: 100%" id="pass" name="password"><br>
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Închide</button>
             <button type="submit" class="btn btn-primary" name="submit">Logare</button>
          </form>
      </div>
    </div>
  </div>
</div>
    <!-- Start Header Area -->
    <div class="header-area">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="site-logo">
                            <h2>Atestate informatică</h2>
                            <a data-toggle="tooltip" title="Be-one" href="index.php"></a>
                        </div>
                    </div>
                    <div class="col-6 d-lg-none static text-right">
                        <div class="show-mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 text-right d-none d-lg-block">
                        <nav class="menu-wrapper">
                            <ul class="main-menu" id="mobile-menu">
                                <li class="active"><a href="index.php">Acasă</a></li>
                                <li><a href="index.php#despre">Despre</a></li>
                                <li><a href="index.php#portofoliu">Portofoliu</a></li>
                                <li><a href="index.php#contact">Contact</a></li>
                                <li class="search-trigger d-none d-lg-inline-block"><a href="javascript:void(0)"><i class="fas fa-search"></i></a>
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->

    <!-- Tabel produse -->
    <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4><?php echo $row['nume'];?></h4>
                    </div>
                </div>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                <div class="row ">
                    <div class="col-md-6">
                        <p>Nume: <?php echo $row["nume"]; ?></p><!-- comment -->
                        <p>Categorie: <?php echo $row["categorie"]; ?></p>
                    </div>
                    <div class="col-md-6">
                      <h5><b>Imagine:</b></h5>
                      <br>
                      <img style="width:50%; height:auto;" src="<?php echo $row["imagine"] ;?>"><br/>  
                    </div>
                </div>
                
                <br><br><br>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                <center><a href="index.php"><button type="button" class="btn btn-primary">Du-ma la pagina principală</button></a></center>
            </form>

            <br><!-- comment -->
            
    </div>
       

    <!-- Start Footer Area -->
    <footer class="footer-area pt-60 pb-60 black-bg" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">Be-One </a>
                        </div>
                        <div class="footer-dec">
                            <p>Be-one is a clean PSD theme suitable for corporate, You can customize it very easy to fit your needs, semper suscipit metus accumsan at. Nam luctus ac tortor eu</p>
                        </div>
                        <ul class="social-links">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Features</h6>
                        </div>
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Terms &and; Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Contact us</h6>
                        </div>
                        <div class="address-line">
                            <p>Address: 379 5th Ave  New York, NYC 10018, United States</p>
                            <p>Phone: <a href="tel:+112345 6999">+(112) 345 6999</a></p>
                            <p>Fax: +(112) 345 8999</p>
                            <p>Email: <a href="mailto:contact@be-one.com">contact@be-one.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Newsletter</h6>
                        </div>
                        <div class="newsletter-text">
                            <p>Subscribe to Newsletters and Stay informed about our news and events</p>
                        </div>
                        <form action="index.html" class="newsletter-form">
                            <input type="email" placeholder="Your email">
                            <input class="btn newsletter-btn" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- End Copyright Area -->
    <div class="copyright-area black-bg">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright-area ">
                        <p>Copyright © 2021 Designed by <a href="https://www.wpfreecloud.com">wpfreecloud.com</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
<!-- JS -->
   <!-- Popper.js -->
   <script src="assets/js/popper.min.js"></script>
   <!-- Bootstrap.js -->
   <script src="assets/js/bootstrap-4.3.1.min.js"></script>
   <!-- Modernizr.js -->
   <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Owl.Carousel.js -->
   <script src="assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
   <script src="assets/js/vendor/owl.carousel2.thumbs.min.js"></script>
   <!-- Waypoints.js -->
   <script src="assets/js/vendor/waypoints-4.0.1.min.js"></script>
   <!-- ColorNip.js -->
   <script src="assets/js/vendor/colornip.min.js"></script>
   <!-- SlickNav.js -->
   <script src="assets/js/vendor/slicknav.min.js"></script>
   <!-- ScrollUp.js -->
   <script src="assets/js/vendor/jquery.scrollUp.min.js"></script>
   <!-- MagnificPopup.js -->
   <script src="assets/js/vendor/magnific-popup.min.js"></script>

   <!-- Main.js -->
   <script src="assets/js/main.js"></script>
</body>
</html>


<?php
    include 'connection.php';
    $sql='SELECT * FROM atestat ORDER BY id ASC';
    $query= mysqli_query($con,$sql) or die(mysqli_error($con));
    
    $user='admin';
    $pass='admin';

    $n1 = rand(1,9);
    $n2 = rand(1,9);
    $suma = $n1 + $n2;
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Atestate informatica">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>Produse - Atestate informatică</title>

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
<body onkeydown="isKeyPressed(event)">
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
            <input type="text" style="width: 100%" id="username" name="username"><br><br>
            Parola:<br><!-- comment -->
            <input type="password" style="width: 100%" id="pass" name="password"><br><br>
            <input type="hidden" name="correctsum" value="<?php echo $suma; ?>"/><!-- comment -->
            <?php echo $n1.' + '.$n2.' = ?';?><br><!-- comment -->
            <input type="text" style="width: 100%" id="pass" name="captcha"><br><br>
             Ține-mă minte: <input type="checkbox" name="rememberme" value="1"><br>
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
                            <h2><a href="index.php">Atestate informatică</a></h2>
                            <a data-toggle="tooltip" title="Be-one" href="index.php"></a>
                        </div>
                    </div>
                    <div class="col-6 d-lg-none static text-right">
                        <div class="show-mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 text-right d-none d-lg-block">
                        <nav class="menu-wrapper">
                            <ul class="main-menu" id="mobile-menu">
                                <li><a href="de-ce-noi.php">De ce noi?</a></li>
                                <li><a href="produse.php">Produse</a></li>
                                <li><a href="prezentare.php">Prezentare</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li data-toggle="modal" data-target="#exampleModal"><a href="javascript:void(0)"><i class="fas fa-user-alt"></i></a>    
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->

    <!-- Start Latest Project Area -->
    <div id="produse" class="latest-project-area black-bg pt-70 pb-70 nope" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Produse</h4>
                    </div>
                </div>
            </div>
            <center>
            <form name="search_form" method="post" action="search.php">
            <p style="display:inline-block; color:white!important;">Caută: </p><input type="text" name="search_box" value=""/><!--  --><br>
            <br>
            <input class="btn btn-primary" type="submit" name="search" value="Caută"><!-- comment --><br><br>
            </form><!-- comment -->
                        
            </center>
            <div class="row">
                        
            <?php while($row=mysqli_fetch_array($query)){ 
                echo '<div class="col-md-4">';
                $imagine = $row['imagine'];
                $nume = $row['nume'];
                $categorie = $row['categorie'];
                $id = $row['id'];
                echo '<img style="max-width:100%; margin:auto; margin-bottom:10px;" src="'.$imagine.'">';
                echo '<h3 style="color:white!important; text-align:center;"><a href="detalii.php?id='.$id.'">'.$nume.'</h3></a>'; 
                echo '<center><i style="color:white!important; text-align:center!important; margin-top:-16px!important;">'.$categorie.'</i></center>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo '</div>';
                echo '<br>';
                echo '<br>';
            } ?>
            </div>

</div>
            
        </div>

    <!-- End Latest Project Area -->

    <!-- End Why Choose Us Area -->

    <!-- Start Footer Area -->


    <!-- End Footer Area -->
    <!-- End Copyright Area -->
    <div class="copyright-area black-bg">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright-area ">
                        <p>Copyright © 2021 Andrei Popovici - Proiect 1. All rights reserved.</p>
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
   
   <script>
     var c = document.getElementById("myCanvas");
     var ctx = c.getContext("2d");
     ctx.font = "590% Arial";
     ctx.fillStyle = "#ffffff";
     ctx.fillText("Bine ați venit!",10,70);  
   </script><!-- comment -->
   
   <script>
        $(document).ready(function() {
          $('.nope').bind('cut copy', function(e) {
              e.preventDefault();
              alert("Nu s-a copiat!")
            });
        });     
       
   </script>
   <script>
function isKeyPressed(event) {
  var x = document.getElementById("demo");
  if (event.altKey) {
    alert("De ce tot apesi tasta ALT? Cu ce ti-a gresit?")
  }
}
</script>
</body>
</html>

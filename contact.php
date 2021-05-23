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
<title>Contact - Atestate informatică</title>

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


        <div id="contact" class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Contact</h4>
                    </div>
                </div>
            </div>
            <div class="row">
               <div class="col-md-8">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.168259660577!2d27.570109115452574!3d47.174142125744844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20Alexandru%20Ioan%20Cuza%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1621364577780!5m2!1sro!2sro" width="80%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
               <div class="col-md-4">
                   <form method="post" action="mesaj.php">
                       Nume:*<br><input style="width: 100%" type="text" name="nume" required/><br><!-- comment -->
                       Prenume:*<br><input style="width: 100%" type="text" name="prenume" required/><br><!-- comment -->
                       Adresă de mail:*<br><input required style="width: 100%" type="text" name="mail"/><br><!-- comment -->
                       Mesajul dvs.:*<br><textarea required style="width: 100%" name="mesaj"></textarea><br>
                       <p>*Toate câmpurile sunt obligatorii!</p>
                       <br>
                       <center><button type="submit" name="submit" class="btn btn-primary">Trimite</button></center> 
                   </form>
               </div>
            </div>
            <br><br>
            <div class="row">
                <h4>În videoclipul următor puteți vedea și o prezentare a locației unde ne desfășurăm activitatea.</h4><!-- comment -->
                
                <div class="col-lg-6">
                    <center>
                    <video controls style="margin-left: auto; margin-right: auto; display: block;">
                        <source src="assets/mp4/video.mp4" type="video/mp4">
                    </video>
                    </center>
                </div>
             
            </div>
            <br><!-- comment -->

            <div class="row">

                <audio controls style="margin: 0 auto; display: block;" autoplay>
                    <source src="assets/mp3/bg.mp3" type="audio/mpeg">
                </audio>

            </div>

        </div>
    </div>
    <!-- Start Footer Area -->

        <div class="hire-us-area theme-bg js--sticky-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9 col-12">
                    <div class="hire-us-content">
                        <h6>Apropo, hai si cu un like si share la pagina noastra!</h6> 
                    </div>  
                </div>
                <div class="col-md-3 text-right">
                    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden; color:white!important;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>
    </div>
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

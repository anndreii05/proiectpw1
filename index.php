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
<title>Atestate informatică</title>

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
    <div class="search-overlay"></div>
    <!-- Search Modal -->
    <div class="modal fade" id="search-modal">
        <div class="modal-dialog">
             <div class="modal-content">
            <form name="search_form" method="post" action="search.php">
                 Search: <input type="text" name="search_box" value=""/><!--  -->
                 <input type="submit" name="search" value="Search the table"><!-- comment -->
                   <input type="reset" value="Reset"/><!-- comment -->
            </form>
             </div>
         </div>
     </div>
     <!-- End Search Modal -->
     
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
     
     <!-- Modal -->
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Caută în site</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
                                <li><a href="#de-ce-noi">De ce noi?</a></li>
                                <li><a href="#produse">Produse</a></li>
                                <li><a href="#prezentare">Prezentare</a></li>
                                <li><a href="#contact">Contact</a></li>
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
    <!-- Start Slider Area -->
    <div class="slider-area ">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="single-slider slider-bg-1 text-center">
                        <div class="slider-inner">
                        <canvas id="myCanvas" width="560" height="100"></canvas>
                            <h5>În acest website veți regăsi cele mai de calitate atestate de informatică</h5>
                                        <svg height="130" width="500">
                                    <defs>
                                      <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:rgb(0,0,0);stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:rgb(30,144,255); stop-opacity:1" />
                                      </linearGradient>
                                    </defs>
                                    <ellipse cx="250" cy="70" rx="85" ry="55" fill="url(#grad1)" />
                                    <text fill="#ffffff" font-size="45" font-family="Verdana" x="185" y="86">Hello!</text>
                                  </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->
    <!-- Start Hire Us Area -->
    <div class="hire-us-area theme-bg js--sticky-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9 col-12">
                    <div class="hire-us-content">
                        <h6>Avem peste <span>50</span> de clienți mulțumiți de serviciile noastre!</h6> 
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- End Hire Us Area -->
    <!-- Start We are Bemax Area -->
    <div id="de-ce-noi" class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>De ce noi?</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                          <i class="fas fa-desktop"></i>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Seriozitate</a></h6>
                            <p>Punem pasiune în ceea ce facem. Datorită acesteia, avem mulți clienți mulțumiți din toată lumea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="far fa-gem"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Suport 24/7</a></h6>
                            <p>În cazul unei mici erori apărute în cadrul atestatului dvs., oricând vă sărim în ajutor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-bullhorn"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">În ton cu moda</a></h6>
                            <p>În fiecare zi postăm cele mai calitative produse. Fii cu ochii pe noi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-tablet-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Adaptabil pentru orice dispozitiv</a></h6>
                            <p>Atestatele sunt create în așa fel încât să fie adaptate pentru orice dispozitiv.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-pencil-alt"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Punctualitate</a></h6>
                            <p>În cazul în care apar probleme pe parcurs cu produsul dvs, stabilim un termen limită de comun acord, iar până atunci, problema e ca și rezolvată</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-bemax-item d-flex">
                        <div class="item-icon">
                            <a href="#"><i class="fas fa-comments"></i></a>
                        </div>
                        <div class="item-content">
                            <h6><a href="#">Gratis</a></h6>
                            <p>Toate produsele noastre sunt gratuite! Alege atestatul, spune-ne în ce clasă ești, de la ce școală ești, și al tău e!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End We are Bemax Area -->
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
    </div>
    <!-- End Latest Project Area -->
    <!-- Start Why Choose Us Area -->
    <div id="prezentare" class="choose-us-area pt-70 pb-70" id="page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Prezentare</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-img-thumbnail text-center">
                        <a class="video-play" href="https://www.youtube.com/watch?v=8QjZuyvOh5o"><i class="far fa-play-circle"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-item">
                      
                        <p>În videoclipul alăturat puteți observa cu câtă pasiune lucrăm pentru serviciile dvs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->
    <!-- Start Working With Us Area -->
    
    <!-- End Working With Us Area -->
    <!-- Start Carousel Area -->

    <!-- End Carousel Area -->
    <!-- Start Brands Area -->

    <!-- End Brands Area -->
    
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
                    <video controls style="margin-left: auto; margin-right: auto; display: block;">
                        <source src="assets/mp4/video.mp4" type="video/mp4">
                    </video>
                </div>
             
            </div>
            <br><!-- comment -->

            <div class="row">

                <audio controls style="margin: 0 auto; display: block;">
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

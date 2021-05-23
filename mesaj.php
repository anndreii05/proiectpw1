<?php
session_start();
$_SESSION["nume"]=$_POST["nume"];
$_SESSION["prenume"]=$_POST["prenume"];
$_SESSION["adresa"]=$_POST["mail"];
$_SESSION["mesaj"]=$_POST["mesaj"];
class Date1{
    protected $nume;
    protected $prenume;
    public function setNume($var){
        $this->nume=$var;
    }
     public function setPrenume($var){
        $this->prenume=$var;
    }
    public function showNume(){
        echo $this->nume.' ';
    }
    public function showPrenume(){
        echo $this->prenume;
    }
}
class Date2 extends Date1{
    public $adresa;
    public $mesaj;
    public function setAdresa($var){
        $this->adresa=$var;
    }
     public function setMesaj($var){
        $this->mesaj=$var;
    }
    function showAdresa(){
        echo $this->adresa;
    }
    function showMesaj(){
        echo $this->mesaj;
    }
      public function setData(){
    $this->setNume($_SESSION["nume"]);
    $this->setPrenume($_SESSION["prenume"]);
    }
}
$date2=new Date2();
$date2->setData();
$date2->setAdresa($_SESSION["adresa"]);
$date2->setMesaj($_SESSION["mesaj"]);
?>


<!DOCTYPE>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Atestate informatica">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>Mesaj trimis - Atestate informatică</title>

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
                                <li><a href="#despre">Despre</a></li>
                                <li><a href="#portofoliu">Portofoliu</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li class="search-trigger d-none d-lg-inline-block"><a href="javascript:void(0)"><i class="fas fa-search"></i></a>
                                <li data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-alt"></i> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->

    <!-- Tabel produse -->
    <div class="bemax-area gray-bg pt-65 pb-25" style="min-height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Mesaj trimis!</h4>
                    </div>
                </div>
            </div>
            
            <p>Salutare, <?php echo $date2->showNume()."        ".$date2->showPrenume().'!';?>. Îți mulțumim pentru mesajul trimis! </p><!-- comment -->
            <p>Pe adresa de mail declarată în formularul de contact (<?php echo $date2->showAdresa();?>) vei primi cât de repede posibil un răspuns!</p>
            <p>Mesajul tău:</p><!-- comment -->
            <i>"<?php echo $date2->showMesaj();?>"</i>
            <br><!-- comment -->
            
    </div>
    </div>

    <!-- End Footer Area -->
    <!-- End Copyright Area -->
    <div class="copyright-area black-bg">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright-area ">
                        <p>Copyright © 2021 Designed by Andrei P. All rights reserved.</p>
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


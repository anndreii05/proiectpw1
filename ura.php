<?php
session_start();
if ($_SESSION["username"]=='admin'){
    include 'connection.php';
    $user = $_SESSION["username"];
    $sql='SELECT * FROM atestat ORDER BY id ASC';
    $query= mysqli_query($con,$sql) or die(mysqli_error($con));
}
else{
    header("location:index.php");
}
?>
<!DOCTYPE>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Atestate informatica">
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>Portal admin - Atestate informatică</title>

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
     
    <!-- Start Header Area -->
    <div class="header-area">
        <div class="container">
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="site-logo">
                            <h2><a href="ura.php">Portal admin<br>Atestate informatică</h2>
                            <a data-toggle="tooltip" title="Be-one" href="ura.php"></a>
                        </div>
                    </div>
                    <div class="col-6 d-lg-none static text-right">
                        <div class="show-mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 text-right d-none d-lg-block">
                        <nav class="menu-wrapper">
                            <ul class="main-menu" id="mobile-menu">
                                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
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
                            <h1>Bun venit, <?php echo $user;?>!</h1>
                            <h5>Cu ce surpinzi elevii azi?</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->
    <!-- Tabel produse -->
    <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Tabel actualizat cu produse</h4>
                    </div>
                </div>
            </div>
            <center>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Nume</th>
                     <th scope="col">Categorie</th>
                     <th scope="col">Imagine</th>
                     <th scope="col" colspan="3">Operații elementare</th>
                  </tr>
               </thead>
            <tbody>
              <?php while ($row= mysqli_fetch_array($query)){?>
            
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nume']; ?></td>
                    <td><?php echo $row['categorie']; ?></td>
                    <td><img style="width:45%; height:auto; display:block; margin:0 auto;" src="<?php echo $row['imagine'];?>"></td>
                    <td><?php echo "<a href=\"view.php?id=".$row['id']."\">Vedere</a>"?></td>
                    <td><?php echo "<a href=\"edit.php?id=".$row['id']."\">Editare</a>"?></td>
                    <td><?php echo "<a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Ești sigur?')\">Ștergere</a>"?></td>
                </tr>
            
              <?php }?>
            </tbody>
            </table>
            </center>
            <br><!-- comment -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert">Inserare atestate noi</button>
            <br><br><br>
    </div>
    </div>
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inserare nou atestat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="save.php" enctype="multipart/form-data">
             Nume:<br>
             <input type="text" name="nume" style="width: 100%" required><br>
             Categorie:<br><!-- comment -->
             <input type="text" style="width: 100%" name="categorie" required><br>
             Imagine:<br><!-- comment -->
             <input type="file" name="image" required><br><br><br>
             <button type="submit" class="btn btn-primary" name="upload">Adauga intrare</button>
          </form>
      </div>
    </div>
  </div>
</div>

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
</body>
</html>
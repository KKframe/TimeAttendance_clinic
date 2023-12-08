<?php session_start(); ?>
<?php
    if(!isset($_SESSION["Username"]) && !isset($_SESSION["password"])){
        Header("Location: login.php");
    }else{?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>คลินิกปลายฟ้า</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
  <!-- Favicons -->
  <link href="assets/img/fah.png" rel="icon">
  <link href="assets/img/fah.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <h1 class="logo mr-auto"><a href=""><img src="assets/img/lg.png"></a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="drop-down active"><a href="">เมนู</a>
            <ul>
                <li><a href="all_hist_work.php">ประวัติการเข้าออกเวร</a></li>
                
                <li><a href="changePassForm.php">เปลี่ยนรหัสผ่าน</a></li>
                <li><a href="logout.php">ออกจากระบบ</a></li>
            </ul>
          </li>
          <div style="width: 30px"></div>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
    <div class="d-flex align-items-center ">
        <div class='col-6 '><img class="RoundImg" src="assets/img/staff/<?php echo $_SESSION['รูปประจำตัว']?>" ></div>
            <div class='col-6 '><h1 style='font-size: "24px";font-family: "Itim";text-align: left;'>
                <?php echo "ตำแหน่ง: ".$_SESSION["ตำแหน่ง"]."<br>".
                            "ชื่อ: ".$_SESSION['Username']."<br>".
                            "นามสกุล: ".$_SESSION['นามสกุล']."<br>";?></h1></div>
    </div>
    <div class="row float-right">
        <div style="position: absolute; left: 63%; top: 90%;"class="col-md-4">
            <img src="assets/img/calendar-clock-icon.png" style="height: auto;width: 10vh; ">
        </div>
    </div>
  </header>

  <!-- ======= First Section ======= -->
    <div class="d-flex align-items-center ">
        <div id="dispTime" style="position: absolute; left: 50%; top: 65%; transform: translate(-50%, -50%); font-size: 95px; color: #273D40;"></div>
        <div  id="dispDate" style=" position: absolute; left: 32%; top: 75%;font-size: 36px; color: #273D40;"></div>
    </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="getTimeDate.js"></script>
    </body>
</html>
<?php }?>
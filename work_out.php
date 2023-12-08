<?php session_start(); 
include("connection.php");?>
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

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    </head>
    <body style='background-color: #f4efeb'>
        <p><a href="user_page.php"><img src="assets/img/back.png" height="70px"></a></p>
        
<div class="container fridayFont">
    <div class="d-flex align-items-center">
        <div class='col-9 '><h1>เวลาการออกเวรของ <?php echo $_SESSION['ชื่อ'];?></h1></div>
        <div class="col-3"><img src="assets/img/time8.png" style="height: auto; width: 40vh; float: right;"></div>
    </div>
  <br>
  <form action="work_out.php" method="get">
        <label>ค้นหาวันที่: <input type="search" name="textSearch"  >
            <button style="background-color: #cfafd4;height: 7vh;width: 10vh;" type="submit" class="btn btn-info">
              <span class="glyphicon glyphicon-search"></span>
            </button>
        </label>
    </form>
  	<table>  
        <thead style='text-align: center;'>
      <tr>
        <th>วันที่เข้าเวร</th>
        <th>เวลาออกเวร</th><th>หมายเหตุ</th>
      </tr>
    </thead><tbody>
 <?php
 if(isset($_GET['textSearch'])) {
    $sql = "SELECT  date_format(วันที่เข้าเวร,'%d/%m/%Y') as วันที่เข้าเวร,เวลาออกเวร FROM staff_checkout  where ชื่อเจ้าหน้าที่ ='".$_SESSION['ชื่อ'].
            "' and date_format(วันที่เข้าเวร,'%d/%m/%Y') like '". $_GET['textSearch'] ."%'" ;
}
else
{
    $sql = "SELECT  date_format(วันที่เข้าเวร,'%d/%m/%Y') as วันที่เข้าเวร,เวลาออกเวร FROM staff_checkout  where ชื่อเจ้าหน้าที่ ='".$_SESSION['ชื่อ']."'";
}
$result = $conn->query($sql);	
if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $note=null;
            if($row["เวลาออกเวร"]>'20:00:00'){$note='ล่วงเวลา';}
                elseif($row["เวลาออกเวร"]<'20:00:00'){$note='ออกก่อนเวลา';}
                else{$note.=' ';}
            echo"<tr>
                    <td>".$row["วันที่เข้าเวร"]."</td>
                    <td>".$row["เวลาออกเวร"]."</td><td>".$note."</td>
            </tr>";
        }
    echo"</tbody>
     </table>";
    } else {
        echo "Oops....";
}
$conn->close();
?>
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
    </body>
</html>
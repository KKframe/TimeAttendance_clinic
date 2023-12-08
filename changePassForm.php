<?php 
session_start(); 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>คลินิกปลายฟ้า</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
       <style type="text/css">
        .form-gap {
            padding-top: 70px;
        }
    </style>
</head>
<body>
<div class="form-gap"></div>
<div class="container position-relative">
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
              <div style="border-style: solid;
    border-width: thick;
    border-color:#808080;font-family: 'FC Friday';" class="panel-body panel panel-default ">
                  <h1 style="text-align:center;">เปลี่ยนรหัสผ่านของ</h1>
                  <h1 style="text-align:center;"><?php  echo $_SESSION['Username']; ?></h1>
                  <hr>
                  <div style="font-size: 20px;" class="panel-body ">
                      <form action="change_password.php"  id="register-form" role="form" autocomplete="off" class="form" method="post">
                       <div class="form-group">
                        <div class="input-group">
                            <label  for="password">รหัสผ่านเดิม<span style='color: red'></span></label>
                            <input id="password" name="old_password"  class="form-control"  type="text" required value="<?php echo $_SESSION["password"];?>">
                        </div>
                        <div class="input-group">
                            <label  for="password">รหัสผ่านใหม่<span style='color: red'>*</span></label>
                          <input id="password" name="password" maxlength="6" class="form-control"  type="password" required>
                          
                        </div>
                           <div class="input-group">
                            <label  for="password">ยืนยันรหัสผ่านใหม่<span style='color: red'>*</span></label>
                          <input id="password" name="password" maxlength="6" class="form-control"  type="password" required>
                        </div>
                      </div>
                      <div class="form-group">
                          <input style="background-color: #ebc3b9;" name="changePWD" class=" btn btn-lg btn-block" value="บันทึกรหัสผ่านใหม่" type="submit">
                      </div>
                      </form>
    
                  </div>
                 </div>
                        
             <p style="text-align: center;color: red;"><strong>คำแนะนำ:</strong> ควรตั้งรหัสผ่าน 6 อักษร ที่ประกอบด้วย
                               อักขระA-Z, a-z, ตัวเลข 0-9และเครื่องหมายหรืออักขระพิเศษ  (!@#$%^&*()_+|~-=\`{}[]:”;'&gt &lt ?,./)</p>
            
              </div>
            </div>
           </div>
</body>
</html>
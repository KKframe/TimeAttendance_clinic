<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>คลินิกปลายฟ้า</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
  <!-- Favicons -->
  <link href="assets/img/fah.png" rel="icon">
  <link href="assets/img/fah.png" rel="apple-touch-icon">
    </head>
    <body>
<?php include("connection.php");session_start(); ?>
<?php
   	//echo ['password'];
        //echo $_SESSION['Username'];
   	$_SESSION['password'] = $_POST["password"];

	$strSQL = "UPDATE user SET  
	password = '". $_SESSION['password'] ."'
    	WHERE ชื่อผู้ใช้ระบบ = '".$_SESSION['Username']."'" ;
  if (mysqli_query($conn, $strSQL)) {
         echo "<script>
            Swal.fire({ icon:'success',
                        title: 'เปลี่ยนรหัสผ่านเรียบร้อย',confirmButtonText: 'ตกลง'}                    
                  ).then(function(){";
         if(strcmp($_SESSION["ตำแหน่ง"], "เจ้าของคลินิก")==0){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                               //echo 'Hello Owner.';
                            echo "window.location = 'owner_page.php'";
                          }
 
                            if (strcmp($_SESSION["ตำแหน่ง"], "ผู้ช่วยพยาบาล")==0 || 
                                    strcmp($_SESSION["ตำแหน่ง"], "พยาบาล")==0 ){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                                //echo 'Hello staff/nurse.';
                              echo "window.location = 'user_page.php';";
                            }
         echo "})</script>";
    } else {
         echo "Error: " . $strSQL . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
	
?>
    </body>
</html>

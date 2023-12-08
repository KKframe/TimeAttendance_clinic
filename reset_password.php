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
<?php include("connection.php");
session_start();
include("connection.php");
$sql = "select * from user where ชื่อผู้ใช้ระบบ = '"
        .$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
   $Password = $_POST["password"];
        
	$strSQL = "UPDATE user SET  
	password = '". $Password ."'
    	WHERE ชื่อผู้ใช้ระบบ = '".$_SESSION['username']."'" ;
    if (mysqli_query($conn, $strSQL)) {
         echo "<script>
            Swal.fire({ icon:'success',
                        title: 'เปลี่ยนรหัสผ่านเรียบร้อย',confirmButtonText: 'ตกลง'}                    
                  ).then(function(){window.location = 'login.php';})</script>";
    }
} else{
    echo "<script>";
                        echo "Swal.fire({icon: 'error',title: 'เกิดข้อผิดพลาด',text: 'ไม่พบชื่อผู้ใช้ดังกล่าว',confirmButtonText: 'ตกลง'})"
                        . ".then(function() "
                                . "{"
                                .   "window.location = 'login.php';"
                                . "});";
                echo "</script>";
                session_destroy();
}
    mysqli_close($conn);
	
?>
    </body>
</html>

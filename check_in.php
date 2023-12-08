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
        <?php
        // put your code here
        include("connection.php");
        session_start();
          $sql = "select วันที่เข้าเวร,ชื่อเจ้าหน้าที่ from staff_checkin where รหัสเจ้าหน้าที่ ='".$_SESSION['รหัสผู้ใช้ระบบ']."' and วันที่เข้าเวร = CURRENT_DATE";
    
          $r = mysqli_query($conn,$sql);

	if (mysqli_num_rows($r)==0&&$_SESSION['isCheckedIn']==0) {
            $sql = "INSERT INTO `staff_checkin` (`วันที่เข้าเวร`, `รหัสเจ้าหน้าที่`,`ชื่อเจ้าหน้าที่`, `เวลาเข้าเวร`) VALUES (CURRENT_DATE(), '".$_SESSION['รหัสผู้ใช้ระบบ']
                    ."','".$_SESSION['ชื่อ']."', current_timestamp())";
            mysqli_query($conn, $sql);
            $_SESSION['isCheckedIn']=1;
        echo "<script>
         Swal.fire({ icon:'success',
                        title: 'บันทึกเวลาเข้าเวรของ<br>".$_SESSION['ชื่อ']." สำเร็จ',confirmButtonText: 'ตกลง'}                    
                  ).then(function(){window.location = 'work_in.php';})</script>";
        } else {
        
          echo "<script>";
                        echo "Swal.fire({icon: 'error',title: 'ไม่สามารถบันทึกเวลาได้',text: 'เนื่องจากท่านได้บันทึกเวลาเข้าเวรแล้ว',confirmButtonText: 'ตกลง'})"
                        . ".then(function() "
                                . "{"
                                .   "window.history.back();"
                                . "});";
                echo "</script>";
        }
    mysqli_close($conn);	

        ?>
    </body>
</html>

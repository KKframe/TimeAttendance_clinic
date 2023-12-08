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
        session_start();
         session_destroy();?>
        <script>
            Swal.fire({ icon:'success',
                        title: 'ออกจากระบบเรียบร้อย',confirmButtonText: 'ตกลง'}).then(function(){window.location = 'index.php';});
        </script>
    </body>
</html>

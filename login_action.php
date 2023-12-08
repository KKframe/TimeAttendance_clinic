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

   <!--script src="login_error.js"></script>;-->
  <?php 
session_start();
        if(isset($_POST["username"])&& isset($_POST["password"])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_POST['username'];
                  $Password = $_POST["password"];
                  
				//query 
                  $sql="SELECT * FROM user Where ชื่อผู้ใช้ระบบ='".$Username."' and password='".$Password."' ";
                  //echo $sql;
                  $result = mysqli_query($conn,$sql);
                  
                  //echo mysqli_num_rows($result);
                  $row=mysqli_fetch_array($result);
                  //echo "<br>".$row;
                  
                  $a = "เจ้าของคลินิก";$s = "ผู้ช่วยพยาบาล";$n = "พยาบาล";
                  //echo $a." ".$s." ".$n;
                  //echo $row["ตำแหน่ง"];
                  //echo strcmp($row["ตำแหน่ง"], $a);
                  //echo strcmp($row["ตำแหน่ง"], $s);
                  //echo strcmp($row["ตำแหน่ง"], $n);
                  if(mysqli_num_rows($result)==0){
                        echo "<script>";
                        echo "Swal.fire({icon: 'error',title: 'เกิดข้อผิดพลาด',text: 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!',confirmButtonText: 'ตกลง'})"
                        . ".then(function() "
                                . "{"
                                .   "window.history.back();"
                                . "});";
                        //echo "window.history.back();";
                        //echo "</script>";
                        //echo "<script>";
                        //echo "history.back();";
                        echo "</script>";
                  }else{
                      //$row=mysqli_fetch_array($result);
                      $_SESSION["รหัสผู้ใช้ระบบ"] = $row["รหัสผู้ใช้ระบบ"];
                      $_SESSION["ชื่อ"] = $row["ชื่อผู้ใช้ระบบ"]." ".$row["นามสกุล"];
                      $_SESSION["นามสกุล"] = $row["นามสกุล"];
                      $_SESSION["Username"] = $Username;
                      $_SESSION["ตำแหน่ง"] = $row["ตำแหน่ง"];
                      $_SESSION["password"] = $Password;
                      $_SESSION["รูปประจำตัว"] = $row["รูปประจำตัว"];
                      $_SESSION['isCheckedIn'] = 0;
                      $_SESSION['isCheckedOut'] = 0;
                            if(strcmp($_SESSION["ตำแหน่ง"], $a)==0){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                               //echo 'Hello Owner.';
                            Header("Location: owner_page.php");
                          }
 
                            if (strcmp($_SESSION["ตำแหน่ง"], $s)==0 || 
                                    strcmp($row["ตำแหน่ง"], $n)==0 ){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                                //echo 'Hello staff/nurse.';
                              Header("Location: user_page.php");

                            }
 
                    }
 
        }else{
             Header("Location: login.php"); //user & password incorrect back to login again
 
        }?>
    </body>
</html>

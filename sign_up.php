<?php
require 'connect.php';
$taikhoan = $_GET['taikhoan'];
$email = $_GET['email'];
$matkhau = $_GET['matkhau'];

if ($taikhoan == "" || $email == "" || $matkhau == "") 
    {
        echo "Bạn vui lòng nhập đầy đủ thông tin";
        die();
    }

    else{
       // Kiểm tra tài khoản đã tồn tại chưa
       $sql="SELECT * from user_account where tai_khoan='$taikhoan'";
       
        //  $result=mysqli_query($conn, $sql);
        $result = $conn -> query($sql);
        }
if($result->num_rows > 0){
        echo "Tài khoản đã tồn tại";
     }
    else{
        $sql = "INSERT INTO `user_account`(`tai_khoan`, `email`, `matkhau`) VALUES ('$taikhoan','$email','$matkhau')";
        header('Location:log_in_form.php');
     }
$conn -> query($sql);
$conn->close();



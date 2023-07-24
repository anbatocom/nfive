<?php
session_start();
	require 'connect.php';
	    $tai_khoan = $_GET['taikhoan'];
		$email = $_GET['email'];
	    $matkhau = $_GET['matkhau'];
	    $sql = "SELECT tai_khoan,matkhau FROM user_account WHERE tai_khoan ='$tai_khoan' and email='$email' and matkhau= $matkhau ";
	    $result = $conn->query($sql);

	if($result->num_rows == 0) 
    {
		echo "Tên đăng nhập này không tồn tại hoặc sai password. Vui lòng kiểm tra lại.
			<a href='log_in_form.php'>Trở lại </a>";
		exit;
	}
    
    if($result->num_rows > 0)
    {
        $_SESSION['tai_khoan'] = $tai_khoan;
	    header('Location:user_home.php');
    }
				

?>

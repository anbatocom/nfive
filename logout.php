<?php 	
	session_start();
	if(isset($_SESSION['tai_khoan'])){
		unset($_SESSION['tai_khoan']);
	}
    echo"Đăng xuất thành công";
    header("Location:log_in_form.php");
?>
    
	
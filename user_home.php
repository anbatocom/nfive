<?php
session_start();
if( !isset($_SESSION['tai_khoan'])){
?>

<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="container">
        <div class="form-control">
            <table class="u_table" border=1 cellspacing=0 cellpading=0>
                <tr> <th><a href='log_in_form.php'>Đăng nhập</a></th> </tr>
                <tr> <th><a href='sign_up_form.php'>Đăng ký</a></th> </tr>
            </table>
        </div>
</body>
</html>

<?php   
}


if(isset($_SESSION['tai_khoan']) and $_SESSION['tai_khoan'] == "admin")
{     
?>   
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sign.css">
</head>
<body>
        <div class="form-control">  
            <table class="u_table" border=1 cellspacing=0 cellpading=0>
                <tr> <th><a href='them.php'>Thêm sách</a></th> </tr>
                <tr> <th><a href='hienthi.php'>Quản lí đơn mượn sách</a></th> </tr>
                <tr> <th><a href='logout.php'>Đăng xuất</a></th> </tr>
            </table>
        </div>
</body>
</html>    
<?php       
}  
if(isset($_SESSION['tai_khoan']) and $_SESSION['tai_khoan'] != "admin")
{
?>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sign.css">
</head>
<body>
        <div class="form-control">
        <table class="u_table" border=1 cellspacing=0 cellpading=0>
            <tr> <th><a href='timkiem.php'>Tìm kiếm sách</a></th> </tr>
            <tr> <th><a href='logout.php'>Đăng xuất</a></th> </tr>
        </table>
        </div>
    </div>
</body>
</html>
<?php
}
?>  

<?php
require 'dbhelper.php';

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
</head>
<body>
       
        <div class="container">
            <h1>Quản lí đơn mượn sách</h1>
            <form method='get'>
                     <input type="text" id="search" name="search">  
            </form>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Sách</th>
                            <th>Tên Sách</th>
                            <th>Ngày nhập</th>
                            <th>Nhà xuất bản</th>
                        </tr>
                    </thead>
                    <tbody>
<?php  
if(isset($_GET['search']) && $_GET['search'] != '') {
    $search = $_GET['search'];
    $sql = 'SELECT * FROM sach WHERE ten_sach like "%'.$search.'%" ';
}else{
    $sql = 'SELECT * FROM sach';
}

$books = executeResult($sql);

foreach ($books as $book){
    echo    '<tr>
                <td>'.$book['id_sach'].'</td>
                <td>'.$book['ten_sach'].'</td>
                <td>'.$book['ngay_nhap'].'</td>
                <td>'.$book['nxb'].'</td>
            </tr>';
}
?>                        
                    </tbody>
                </table>
                    
            </div>

        </div>
        <a class="back" href="user_home.php">Quay về trang chủ</a>
</body>
</html>
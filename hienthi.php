<?php
require 'dbhelper.php'
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
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID sinh viên mượn</th>
                            <th>ID sách đã mượn</th>
                            <th>Ngày mượn</th>
                            <th>Thời gian mượn</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
<?php    
$sql = 'SELECT * FROM muon_sach';
$studentList = executeResult($sql);

foreach ($studentList as $std){
    echo    '<tr>
                <td>'.$std['id_sv'].'</td>
                <td>'.$std['id_sach'].'</td>
                <td>'.$std['ngay_muon'].'</td>
                <td>'.$std['thoigian_muon'].'</td>
                <td> <a href="sua.php?id='.$std['id_sv'].'&ids='.$std['id_sach'].'&ngay_m='.$std['id_sv'].'&tg='.$std['thoigian_muon'].'"> <button id="edit">Sửa</button> </a> </td>
                <td> <a href="xoa.php?id='.$std['id_sv'].'&ids='.$std['id_sach'].'"> <button id="delete">Xoá</button> </a> </td>
            </tr>';
}
?>                        
                    </tbody>
                </table>
                    <a href="them.php"><button id="add">Thêm đơn mượn sách</button></a>
                    
            </div>

        </div>
        <a href="user_home.php" style="text-decoration: none; color: white;">Trang chủ</a>
</body>
</html>
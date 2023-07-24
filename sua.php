<?php
require 'dbhelper.php';
$id = $_GET['id'];
$id_sach = $_GET['ids'];
$ngay_muon = $_GET['ngay_m'];
$tg_muon = $_GET['tg'];

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="them.css">

</head>
<body>
    <div class="container">
        <h1>Cập nhật đơn mượn sách</h1>
        <form method="post" action="update.php">
        <input class="ip" type="hidden" name="id_sv" value="<?=$id?>">

        <div class="form-group">
            <label for="id_sach">ID Sách đã mượn</label>
            <input class="ip" type="text" name="id_sach" value="<?=$id_sach?>" placeholder="ID Sách mượn">
        </div>

        <div class="form-group">
            <label for="ngaymuon">Ngày mượn</label>
            <input class="ip" type="text" name="ngay_muon" value="<?=$ngay_muon?>" placeholder="Ngày mượn">
        </div>

        <div class="form-group">
            <label for="thoigian">Thời gian mượn</label>
            <input class="ip" type="text" name="thoigian_muon" value="<?=$tg_muon?>" placeholder="Thời gian mượn">
        </div>
        <input type="submit" id="add" value="Cập nhật">
        </form>
    </div>
</body>
</html>
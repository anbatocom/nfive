<?php
    $id_sv = $id_sach = $ngay_muon = $tg_muon ='';
if(!empty($_POST)){

    if(isset($_POST['id_sv'])){
        $id_sv = $_POST['id_sv'];
    }

    if(isset($_POST['id_sach'])){
        $id_sach = $_POST['id_sach'];
    }

    if(isset($_POST['ngay_muon'])){
        $ngay_muon = $_POST['ngay_muon'];
    }

    if(isset($_POST['thoigian_muon'])){
        $tg_muon = $_POST['thoigian_muon'];
    }
    require 'dbhelper.php';
    $sql = "INSERT INTO muon_sach(id_sv, id_sach, ngay_muon, thoigian_muon) VALUES ('$id_sv','$id_sach','$ngay_muon','$tg_muon')";
    execute($sql);
    header('Location: hienthi.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="them.css">
</head>
<body>
    <div class="container">
        <h1>Thêm đơn mượn sách</h1>
        <form method="post">
        <div class="form-control">
            
            <input type="text" name="id_sv" value="<?=$id_sv?>" placeholder="ID Sinh viên">
        </div>

        <div class="form-control">
            
            <input type="text" name="id_sach" value="<?=$id_sach?>" placeholder="ID Sách đã mượn">
        </div>

        <div class="form-control">
            
            <input type="text" name="ngay_muon" value="<?=$ngay_muon?>"  placeholder="Ngày mượn">
        </div>

        <div class="form-control">
            
            <input type="text" name="thoigian_muon" value="<?=$tg_muon?>"  placeholder="Thời gian mượn">
        </div>
        <div id="btn"><button value="submit" id="add">Thêm đơn</button></div>
        <a href="user_home.php" style="text-decoration: none; color: white;">Trang chủ</a>
        </form>
    </div>
    
</body>
</html>
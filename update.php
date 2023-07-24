<?php
require 'dbhelper.php';

$id = $_POST['id_sv'];
$id_sach = $_POST['id_sach'];
$ngay_muon = $_POST['ngay_muon'];
$tg_muon = $_POST['thoigian_muon'];

$sql = "UPDATE muon_sach SET id_sach='$id_sach', ngay_muon='$ngay_muon', thoigian_muon='$tg_muon' WHERE id_sv='$id' ";

execute($sql);
header('Location: hienthi.php');

?>
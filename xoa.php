<?php
$ids = $_GET['ids'];
$id = $_GET['id'];
require 'dbhelper.php';
$sql="DELETE FROM muon_sach WHERE id_sv='$id' AND id_sach='$ids'";
execute($sql);
header('Location: hienthi.php');
?>
<?php
include("koneksi.php");
$id = $_POST['txtid'];
$name = $_POST['txtname'];
$jabatan = $_POST['txtjabatan'];
$jenkel = $_POST['txtjenkel'];
$alamat = $_POST['txtalamat'];

// proses simpan database
$sql = "insert into tbl_testcandidate values ('$id', '$name',
'$jabatan', '$jenkel', '$alamat')";
$proses = mysqli_query($koneksi, $sql);
if($proses){
	header("location:tampil.php");
}
?>

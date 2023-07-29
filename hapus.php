<?php
include("koneksi.php");
$id = $_GET['x'];

$sql = "delete from tbl_testcandidate where id='$id'";
$aksi = mysqli_query($koneksi, $sql);
if($aksi) {
    header("location:tampil.php");
}

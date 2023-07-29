<?php
include("koneksi.php");
$id = $_POST['txtid'];
$name = $_POST['name'];
$jabatan = $_POST['txtjabatan'];
$jenkel = $_POST['txtjenkel'];
$alamat = $_POST['txtalamat'];

$sql ="update tbl_testcandidate set name='$name',
jabatan='$jabatan', jenkel='$jenkel',
alamat='$alamat' where id='$id'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:tampil.php");
}

<?php
include("koneksi.php");
if(isset($_POST['btnlogin'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query=mysqli_query($koneksi,"SELECT * FROM tbl_login WHERE username='$username'");
	$data=mysqli_fetch_array($query);

	if(mysqli_num_rows($query)==1){
		if(password_verify($password,$data['password'])){
			// login sukses
			session_start();
			$_SESSION['username']=$data['username'];

			header('location:dashboard.php');
	}else{
		// password salah
		header('location:login.php?pesan=Password Salah');
	}
}else{
	// username salah
	header('location:login.php?pesan=Username Salah');
}
}
?>

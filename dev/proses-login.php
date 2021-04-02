<?php 
	include("../koneksi.php");

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = mysqli_query($koneksi, "select * from tbl_user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);

	if($cek > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['nama'] = $row['nama'];
		exit(header("location:index.php?login-berhasil"));
	}else{
		header("location:login.php?login-gagal");	
	}
 ?>
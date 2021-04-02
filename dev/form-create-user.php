<?php 
	include("../koneksi.php");

	$username = $_POST['username'];
	$nama = $_POST['nama'];
	$password = md5($_POST['password']);

	$sql = mysqli_query($koneksi, "insert into tbl_user values('', '$username','$nama','$password')");

	if ($sql) {
		echo "<script>alert('Data telah tersimpan!')
        location.replace('data-user.php')</script>";
	}else{
		echo "<script>alert('Data gagal disimpan')
        location.replace('data-user.php')</script>";
	}
 ?>
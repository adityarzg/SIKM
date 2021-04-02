<?php 
	include("../koneksi.php");

	$id = $_GET['id'];
	$sql = mysqli_query($koneksi, "delete from tbl_visit where id = '$id'");

	if ($sql) {
		echo "<script>alert('Data telah dihapus')
		location.replace('data-kunjungan.php')</script>";
	}else{
		echo "<script>alert('Data gagal dihapus')
		location.replace('data-kunjungan.php')</script>";
	}

 ?>
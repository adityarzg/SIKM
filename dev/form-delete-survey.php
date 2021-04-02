<?php 
	include("../koneksi.php");

	$id = $_GET['id_sikm'];
	$sql = mysqli_query($koneksi, "delete from tbl_survey where id_sikm = $id");

	if ($sql) {
		echo "<script>alert('Data telah dihapus!')
        location.replace('data-survey.php')</script>";
	}else{
		echo "<script>alert('Data gagal dihapus')
        location.replace('data-survey.php')</script>";
	}
 ?>
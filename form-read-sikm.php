<?php 
	error_reporting(0);
    //koneksi ke database
	include('koneksi.php');

	//menangkap data yang dikirim dari form
	$nama = $_POST['nama'];

	$sql = mysqli_query($koneksi, "select * from tbl_biodata where nama='".mysqli_escape_string($koneksi, $_POST['nama'])."'");
	$data = mysqli_fetch_array($sql);
	echo json_encode($data);
 ?>
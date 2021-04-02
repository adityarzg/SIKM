<?php 
	error_reporting(0);
    //koneksi ke database
	include('../koneksi.php');

	//menangkap data yang dikirim dari form
	$no_id = $_POST['no_id'];

	$sql = mysqli_query($koneksi, "select * from tbl_biodata where no_id='".mysqli_escape_string($koneksi, $_POST['no_id'])."'");
	$data = mysqli_fetch_array($sql);
	echo json_encode($data);
 ?>
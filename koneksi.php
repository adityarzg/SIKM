<?php 
	$koneksi = mysqli_connect("localhost", "root", "", "db_sikm");

	//check connection
	if (mysqli_connect_errno()) {
		echo "Koneksi ke database gagal : " . mysqli_connect_errno();
	}
 ?>
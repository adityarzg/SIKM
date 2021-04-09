<!DOCTYPE html>
<html>
<head>
	<title>Create Data</title>
	<link rel="../asets/vendors/css/sweetalert/sweetalert2.css">
	<link rel="../asets/vendors/css/sweetalert/sweetalert2.min.css">
	<script src="../assets/vendors/js/sweetalert/sweetalert2.js"></script>	
	<script src="../assets/vendors/js/sweetalert/sweetalert2.min.js"></script>	
	<script src="../assets/vendors/js/sweetalert/sweetalert2.all.js"></script>
	<script src="../assets/vendors/js/sweetalert/sweetalert2.all.min.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
</head>
<body>
	<?php 
    //koneksi ke database
	include('../koneksi.php');

	//menangkap data yang dikirim dari form
	$no_id = $_POST['no_id'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tel = $_POST['tel'];
	$jk = $_POST['jk'];
	$tanggal = $_POST['tanggal'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$keperluan = $_POST['keperluan'];

	//menginput data ke database
	$sql1 = "insert into tbl_biodata values('$no_id','$nama','$tgl_lahir','$tel','$jk','$tanggal','$alamat','$pekerjaan','$keperluan')";

	$sql2 = "insert into tbl_visit values(NULL,'$no_id','$nama','$tgl_lahir','$tel','$jk','$tanggal','$alamat','$pekerjaan','$keperluan')";

	//mengalihkan halaman ke index.php
	if (mysqli_query($koneksi, $sql1)) {

		if (mysqli_query($koneksi, $sql2)) {
			echo "<script>Swal.fire({
         		icon: 'success',
        		title: 'Selamat!',
         		text: 'Data pengunjung berhasil disimpan',
         		showConfirmButton: true,
         		confirmButtonText:'Tutup'
         		}).then(function(){ 
	   				location.replace('index.php');
	   			});
		</script>";
		} else {
			echo "<script>Swal.fire({
         		icon: 'error',
        		title: 'Ooops!',
         		text: 'Data gagal disimpan, cek kembali formulir anda',
         		showConfirmButton: true,
         		confirmButtonText:'Tutup'
         		}).then(function(){ 
	   				location.replace('index.php');
	   			});
		</script>";
		}

	}else{
		echo "<script>Swal.fire({
         		icon: 'error',
        		title: 'Ooops!',
         		text: 'Data gagal disimpan, cek kembali formulir anda',
         		showConfirmButton: true,
         		confirmButtonText:'Tutup'
         		}).then(function(){ 
	   				location.replace('index.php');
	   			});
		</script>";
	}	
 ?>
</body>
</html>
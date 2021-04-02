<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
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
 	include("../koneksi.php");

 	$no_id = $_POST['no_id'];
 	$nama = $_POST['nama'];
 	$tgl_lahir = $_POST['tgl_lahir'];
 	$no_tlp = $_POST['no_tlp'];
 	$jenis_kelamin = $_POST['jenis_kelamin'];
 	$tanggal = $_POST['tanggal'];
 	$alamat = $_POST['alamat'];
 	$pekerjaan = $_POST['pekerjaan'];
 	$keperluan = $_POST['keperluan'];

 	$sql = mysqli_query($koneksi, "update tbl_biodata set no_id='$no_id',
 														  nama='$nama',
 														  tgl_lahir = '$tgl_lahir',
 														  no_tlp='$no_tlp', 
 														  jenis_kelamin='$jenis_kelamin',
 														  tanggal='$tanggal',
 														  alamat='$alamat',
 														  pekerjaan = '$pekerjaan',
 														  keperluan='$keperluan' where no_id = '$no_id'");

 	if ($sql) {
		echo "<script>Swal.fire({
         		icon: 'success',
        		title: 'Selamat!',
         		text: 'Data pengunjung berhasil diperbaharui',
         		showConfirmButton: true,
         		confirmButtonText:'Tutup'
         		}).then(function(){ 
	   				location.replace('data-pengunjung.php');
	   			});
		</script>";
	}else{
		echo "<script>Swal.fire({
         		icon: 'error',
        		title: 'Ooops!',
         		text: 'Data gagal diperbaharui, cek kembali formulir anda',
         		showConfirmButton: true,
         		confirmButtonText:'Tutup'
         		}).then(function(){ 
	   				location.replace('data-pengunjung.php');
	   			});
		</script>";
	}
 ?>
</body>
</html>
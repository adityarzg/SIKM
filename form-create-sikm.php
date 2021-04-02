<!DOCTYPE html>
<html>
<head>
	<title>Create Data</title>
	<link rel="asets/vendors/css/sweetalert/sweetalert2.css">
	<link rel="asets/vendors/css/sweetalert/sweetalert2.min.css">
	<script src="assets/vendors/js/sweetalert/sweetalert2.js"></script>	
	<script src="assets/vendors/js/sweetalert/sweetalert2.min.js"></script>	
	<script src="assets/vendors/js/sweetalert/sweetalert2.all.js"></script>
	<script src="assets/vendors/js/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>
</head>
<body>
<?php
	error_reporting(0);
    //koneksi ke database
	include('koneksi.php');

	//menangkap data yang dikirim dari form
	$nama = $_POST['nama'];
	$no_tlp = $_POST['no_tlp'];
	$tanggal = $_POST['tanggal'];
	$fasilitas_informasi = $_POST['fasilitas-informasi'];
	$fasilitas_toilet = $_POST['fasilitas-toilet'];
	$parkir_kendaraan = $_POST['parkir-kendaraan'];
	$kebersihan = $_POST['kebersihan'];
	$taman = $_POST['taman'];
	$sarana_ibadah = $_POST['sarana-ibadah'];
	$ruang_tunggu = $_POST['ruang-tunggu'];
	$sistem_pembayaran = $_POST['sistem-pembayaran'];
	$pelayanan_pendaftaran = $_POST['pelayanan-pendaftaran'];
	$persiapan_persidangan = $_POST['persiapan-persidangan'];
	$fasilitas_rsidang = $_POST['fasilitas-rsidang'];
	$proses_persidangan = $_POST['proses-persidangan'];
	$waktu_pemeriksaan = $_POST['waktu-pemeriksaan'];
	$pemeriksaan_setempat = $_POST['pemeriksaan-setempat'];
	$profesionalitas_hakim = $_POST['profesionalitas-hakim'];
	$pemberian_sputusan = $_POST['pemberian-sputusan'];
	$pelayanan_informasi = $_POST['pelayanan-informasi'];
	$pelayanan_pengaduan = $_POST['pelayanan-pengaduan'];
	$pelayanan_persuratan = $_POST['pelayanan-persuratan'];
	$psbp = $_POST['psbp'];
	$eksekusi = $_POST['psbp'];
	$sikap_petugas = $_POST['sikap-petugas'];
	$kemampuan_ppetugas = $_POST['kemampuan-ppetugas'];
	$penampilan_petugas = $_POST['penampilan-petugas'];
	$kritik_saran = $_POST['kritik-saran'];

	//menginput data ke database
	$sql = mysqli_query($koneksi, "insert into tbl_survey values('',
														  '$nama',
														  '$no_tlp',
														  '$tanggal',
														  '$fasilitas_informasi',
														  '$fasilitas_toilet',
														  '$parkir_kendaraan',
														  '$kebersihan',
														  '$taman',
														  '$sarana_ibadah',
														  '$ruang_tunggu',
														  '$sistem_pembayaran',
														  '$pelayanan_pendaftaran',
														  '$persiapan_persidangan',
														  '$fasilitas_rsidang',
														  '$proses_persidangan',
														  '$waktu_pemeriksaan',
														  '$pemeriksaan_setempat',
														  '$profesionalitas_hakim',
														  '$pemberian_sputusan',
														  '$pelayanan_informasi',
														  '$pelayanan_pengaduan',
														  '$pelayanan_persuratan',
														  '$psbp',
														  '$eksekusi',
														  '$sikap_petugas',
														  '$kemampuan_ppetugas',
														  '$penampilan_petugas',
														  '$kritik_saran')");

	//mengalihkan halaman ke index.php
	if ($sql) {
		echo "<script>Swal.fire({
         		icon: 'success',
        		title: 'Terima Kasih!',
         		text: 'Survei Anda Telah Disimpan',
         		showConfirmButton: true,
         		confirmButtonText:'Tutup'
         		}).then(function(){ 
	   				location.replace('index.php');
	   			});
		</script>";
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
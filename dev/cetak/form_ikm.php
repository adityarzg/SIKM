<?php
require_once __DIR__ . '../../../vendor/autoload.php';
// Panggil koneksi config.php untuk koneksi database
require_once "../../koneksi.php";
// panggil fungsi untuk format tanggal
include "../page/fungsi_tanggal.php";
$hari_ini = date("d-m-Y");
// ambil data hasil submit dari form
$tgl_awal  = date('Y-m-d', strtotime($_POST['tgl_awal']));
$tgl_akhir  = date('Y-m-d', strtotime($_POST['tgl_akhir']));
// Define a default Landscape page size/format by name
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P", "", "", "", "", "0", "0", "5", "0", "", "", "", "", "", "", "", "", "", "", "", "Legal");
//void AddPage ( [ string $orientation [, string $type [, string $resetpagenum [, string $pagenumstyle [, string $suppress [, float $margin-left [, float $margin-right [, float $$margin-top [, float $$margin-bottom [, float $$margin-header [, float $margin-footer [, string $odd-header-name [, string $even-header-name [, string $$odd-footer-name [, string $$even-footer-name [, mixed $$odd-header-value [, mixed $even-header-value [, mixed $odd-footer-value [, mixed $$even-footer-value [, string $pageselector [, mixed $sheet-size ]]]]]]]]]]]]]]]]]]]]])
$nama_dokumen = 'laporan_daftar_kunjungan'; //Beri nama file PDF hasil.

ob_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>form_ikm</title>
	<?php include("../page/head.php"); ?>
	<style type="text/css">
		#tabel-data {
			border-collapse: collapse;
			margin: 15px 0px 0px 35px;
		}

		h4 {
			font-family: sans-serif;
			text-transform: uppercase;
		}

		.biodata {
			margin-left: 40px;
		}

		#footer-tanggal {
			margin-left: 800px;
			margin-top: 30px;
		}

		#footer-jabatan {
			margin-left: 800px;
		}

		#footer-nama {
			margin-left: 800px;
			margin-top: 80px;
			font-weight: bold;
		}

		#footer-nip {
			margin-left: 800px;

		}

		#nomor {
			text-align: center;
		}
	</style>
</head>

<body>
	<?php
	include("../../koneksi.php");
	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_satker");
	while ($data = mysqli_fetch_array($sql)) {
	?>
		<table style="margin-left: 120px;">
			<tr>
				<td><img src="<?php echo "../../assets/img/".$data['logo_satker'].""; ?>" height="80" style="margin: 0px 0px 0px 250px"></td>
			</tr>
			<tr>
				<td align="center">
					<h4>SURVEY KEPUASAN PELAYANAN <?php echo $data['nama_satker'];?></h4>
					<h4>KUESIONER INI MOHON DIISI UNTUK MENINGKATKAN PELAYANAN</h4>
					<h4><?php echo $data['nama_satker'];?> KEPADA PARA PENCARI KEADILAN</h4>
				</td>
			</tr>
		</table>
	<?php
	}
	?>
	<div>
	</div>
	<hr style="width: 90%;" />

	<div class="biodata">
		<?php
		$id = $_GET['id_sikm'];
		$sql = mysqli_query($koneksi, "SELECT * FROM tbl_survey WHERE id_sikm=$id");
		while ($data = mysqli_fetch_array($sql)) {
		?>
			<table>
				<tr>
					<td>Nama</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $data['nama']; ?></td>
				</tr>
				<tr>
					<td>No. HP</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo $data['no_tlp']; ?></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td style="width: 30px;text-align: center;">:</td>
					<td><?php echo tgl_eng_to_ind(date('d-m-Y', strtotime($data['tanggal']))) ?></td>
				</tr>
			</table>
	</div>

	<table width="95%" id="tabel-data" border="1" cellpadding="4">
		<tr>
			<th rowspan="2" id="nomor">No</th>
			<th rowspan="2">Aspek Layanan</th>
			<th rowspan="2">Sub Aspek Layanan</th>
			<th colspan="4">Tingkat Kepuasan Pelayanan Publik</th>
		</tr>
		<tr>
			<th>Sangat Puas</th>
			<th>Puas</th>
			<th>Cukup Puas</th>
			<th>Kurang Puas</th>
		</tr>
		<tr>
			<td rowspan="7" id="nomor">1</td>
			<td rowspan="7">Fasilitas Pengadilan</td>
			<td>1. Fasilitas Informasi</td>
			<?php
			if ($data['fasilitas_informasi'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['fasilitas_informasi'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['fasilitas_informasi'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>2. Fasilitas Toilet</td>
			<?php
			if ($data['fasilitas_toilet'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['fasilitas_toilet'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['fasilitas_toilet'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>3. Parkir Kendaraan</td>
			<?php
			if ($data['parkir_kendaraan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['parkir_kendaraan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['parkir_kendaraan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>4. Kebersihan</td>
			<?php
			if ($data['kebersihan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['kebersihan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['kebersihan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>5. Taman</td>
			<?php
			if ($data['taman'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['taman'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['taman'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>6. Pelayanan Informasi</td>
			<?php
			if ($data['pelayanan_informasi'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_informasi'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_informasi'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>7. Ruang Tunggu</td>
			<?php
			if ($data['ruang_tunggu'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['ruang_tunggu'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['ruang_tunggu'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td rowspan="2" id="nomor">2</td>
			<td rowspan="2">Prosedur Pendaftaran</td>
			<td>1. Sistem Pembayaran</td>
			<?php
			if ($data['sistem_pembayaran'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['sistem_pembayaran'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['sistem_pembayaran'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>2. Pelayanan Pendaftaran</td>
			<?php
			if ($data['pelayanan_pendaftaran'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_pendaftaran'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_pendaftaran'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td rowspan="5" id="nomor">3</td>
			<td rowspan="5">Persidangan</td>
			<td>1. Persiapan Persidangan</td>
			<?php
			if ($data['persiapan_persidangan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['persiapan_persidangan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['persiapan_persidangan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>2. Fasilitas Ruang Sidang</td>
			<?php
			if ($data['fasilitas_ruang_sidang'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['fasilitas_ruang_sidang'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['fasilitas_ruang_sidang'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>3. Proses Persidangan</td>
			<?php
			if ($data['proses_persidangan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['proses_persidangan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['proses_persidangan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>4. Waktu Pemeriksaan</td>
			<?php
			if ($data['waktu_pemeriksaan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['waktu_pemeriksaan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['waktu_pemeriksaan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>5. Pemeriksaan Setempat</td>
			<?php
			if ($data['pemeriksaan_setempat'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pemeriksaan_setempat'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pemeriksaan_setempat'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">4</td>
			<td>Profesionalitas Hakim</td>
			<td>Profesionalitas Hakim</td>
			<?php
			if ($data['profesionalitas_hakim'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['profesionalitas_hakim'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['profesionalitas_hakim'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">5</td>
			<td>Pemberian Salinan Putusan</td>
			<td>Pemberian Salinan Putusan</td>
			<?php
			if ($data['pemberian_salinan_putusan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pemberian_salinan_putusan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pemberian_salinan_putusan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">6</td>
			<td>Pelayanan Informasi</td>
			<td>Pelayanan Informasi</td>
			<?php
			if ($data['pelayanan_informasi'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_informasi'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_informasi'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">7</td>
			<td>Pelayyanan Pengaduan</td>
			<td>Pelayyanan Pengaduan</td>
			<?php
			if ($data['pelayanan_pengaduan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_pengaduan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_pengaduan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">8</td>
			<td>Pelayanan Persuratan</td>
			<td>Pelayanan Persuratan</td>
			<?php
			if ($data['pelayanan_persuratan'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_persuratan'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['pelayanan_persuratan'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">9</td>
			<td>Pengembalian Sisa Biaya Panjar</td>
			<td>Pengembalian Sisa Biaya Panjar</td>
			<?php
			if ($data['psbp'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['psbp'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['psbp'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td id="nomor">10</td>
			<td>Permohonan Eksekusi</td>
			<td>Permohonan Eksekusi</td>
			<?php
			if ($data['eksekusi'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['eksekusi'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['eksekusi'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td rowspan="3" id="nomor">11</td>
			<td rowspan="3">Aparatur Pengadilan</td>
			<td>1. Sikap Petugas</td>
			<?php
			if ($data['sikap_petugas'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['sikap_petugas'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['sikap_petugas'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>2. Kemampuan Pengetahuan Petugas</td>
			<?php
			if ($data['kemampuan_petugas'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['kemampuan_petugas'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['kemampuan_petugas'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>3. Penampilan Petugas</td>
			<?php
			if ($data['penampilan_petugas'] == "Sangat Puas") {
			?>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['penampilan_petugas'] == "Puas") {
			?>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
				<td></td>
			<?php
			} elseif ($data['penampilan_petugas'] == "Cukup Puas") {
			?>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
				<td></td>
			<?php
			} else {
			?>
				<td></td>
				<td></td>
				<td></td>
				<td style="text-align: center;font-weight: bold;"><i>X</i></td>
			<?php
			}
			?>
		</tr>
		<tr>
			<td>12</td>
			<td>Saran :<p style="font-style: italic;font-size: 12px;">(Apabila masih ada pelayanan kami yang kurang, diharapkan untuk menuliskan alasan kekurangan tersebut di kolom sebelah sehingga kami dapat memperbaikinya</p>
			</td>
			<td colspan="5" style="font-weight: bold;"><?php echo $data['kritik_saran']; ?></td>
		</tr>
	</table>
<?php
		}
?>
</body>

</html>

<?php
//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen . ".pdf", 'I');
exit;
?>
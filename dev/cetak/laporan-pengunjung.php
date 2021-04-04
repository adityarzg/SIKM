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
$mpdf->AddPage("L", "", "", "", "", "0", "0", "10", "0", "", "", "", "", "", "", "", "", "", "", "", "Legal");
//void AddPage ( [ string $orientation [, string $type [, string $resetpagenum [, string $pagenumstyle [, string $suppress [, float $margin-left [, float $margin-right [, float $$margin-top [, float $$margin-bottom [, float $$margin-header [, float $margin-footer [, string $odd-header-name [, string $even-header-name [, string $$odd-footer-name [, string $$even-footer-name [, mixed $$odd-header-value [, mixed $even-header-value [, mixed $odd-footer-value [, mixed $$even-footer-value [, string $pageselector [, mixed $sheet-size ]]]]]]]]]]]]]]]]]]]]])
$nama_dokumen = 'laporan_daftar_kunjungan'; //Beri nama file PDF hasil.

ob_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>informasi_pengunjung</title>
	<style type="text/css">
		#tabel-data {
			margin-top: 30px;
			margin-left: 50px;
			border-collapse: collapse;
			border: 2px solid black;
			font-family: sans-serif;
		}

		#tabel-data th {
			height: 40px;
			border: 2px solid black;
		}

		#tabel-data td {
			height: 20px;
			border: 1px solid black;
			text-align: center;
			padding: 5px 18px 5px 18px;
		}

		h1,
		h2,
		h3 {
			font-family: sans-serif;
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
	</style>
</head>

<body>
	<table>
		<tr>
			<?php
				include("../../koneksi.php");
				$sql = mysqli_query($koneksi, "SELECT * FROM tbl_satker");
				while ($data = mysqli_fetch_array($sql)) {
				?>
					<td><img src="<?php echo "../../assets/img/" . $data['logo_satker'] . ""; ?>" height="80" style="margin: 0px 100px 0px 100px"></td>
					<td align="center">
						<h1><?php echo $data['nama_satker']; ?></h1>
						<h3><?php echo $data['alamat_satker']; ?></h3>
						<h4><span><?php echo $data['situs']; ?></span> - Telp: <span><?php echo $data['no_tlp']; ?></span> / HP : <span><?php echo $data['no_hp']; ?></span></h4>
					</td>
				<?php
				}
			?>
		</tr>
	</table>
	<div>
	</div>
	<br>
	<hr style="width: 90%;" />
	<table align="center" style="text-align: center;">
		<tr>
			<td>
				<p style="font-weight: bold">Data Informasi Pengunjung</p>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				if ($tgl_awal == $tgl_akhir) { ?>
					<div>
						Tanggal <?php echo tgl_eng_to_ind(date('d-m-Y', strtotime($_POST['tgl_awal']))); ?>
					</div>
				<?php
				} else { ?>
					<div>
						Tanggal <?php echo tgl_eng_to_ind(date('d-m-Y', strtotime($_POST['tgl_awal']))); ?> s.d. <?php echo tgl_eng_to_ind(date('d-m-Y', strtotime($_POST['tgl_akhir']))); ?>
					</div>
				<?php
				}
				?>
			</td>
		</tr>
	</table>
	<table width="90%" id="tabel-data">
		<tr>
			<th>No</th>
			<th>Nomor ID</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>No Telepon</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Kunjungan</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Keperluan</th>
		</tr>
		<?php
		include("../../koneksi.php");
		$no = 1;
		$sql = mysqli_query($koneksi, "SELECT * FROM tbl_biodata WHERE tanggal BETWEEN '$tgl_awal' and '$tgl_akhir'") or die(mysqli_error($db));
		while ($data = mysqli_fetch_array($sql)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['no_id']; ?></td>
				<td style="white-space: nowrap;"><?php echo $data['nama']; ?></td>
				<td><?php echo $data['tgl_lahir']; ?></td>
				<td><?php echo $data['no_tlp']; ?></td>
				<td><?php echo $data['jenis_kelamin']; ?></td>
				<td style="white-space: nowrap;"><?php echo tgl_eng_to_ind(date('d-m-Y / H:i', strtotime($data['tanggal']))); ?></td>
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['pekerjaan']; ?></td>
				<td style="white-space: nowrap;"><?php echo $data['keperluan']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
	<?php
		include("../../koneksi.php");
		$sql = mysqli_query($koneksi, "SELECT * FROM tbl_satker");
		while ($data = mysqli_fetch_array($sql)) {
		?>
			<div id="footer-tanggal">
				<?php echo $data['kota_ttd'];?>, <?php echo tgl_eng_to_ind("$hari_ini"); ?>
			</div>

			<div id="footer-jabatan">
				<?php echo $data['jabatan_ttd'];?>
			</div>
			<div id="footer-nama">
				<?php echo $data['pejabat_ttd'];?>
			</div>
			<div id="footer-nip">
				Nip. <?php echo $data['nip_ttd'];?>
			</div>
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
<?php
    include("../koneksi.php");
    //mengaktifkan session
    session_start();

    //cek apakah user telah login
    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    } 

    $halaman = "survey";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Survey - e-SKM</title>
    <?php include("page/head.php"); ?>
    <style type="text/css">
        td,th{
            text-align: center;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("page/sidebar.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <?php include("page/row-logprofile.php"); ?>
                        </ul>
                    </div>
                </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Data Survey</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Informasi Survey Indeks Kepuasan Masyarakat</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table table-bordered table-striped table-hover my-0 data" id="dataTable">
                                <thead>
                                    <tr class="text-nowrap text-center">
                                        <th>Aksi</th>
                                        <th>No</th>
                                        <th hidden="">ID</th>
                                        <th>Nama Pengunjung</th>
                                        <th>No. Telepon</th>
                                        <th>Tanggal Survey</th>
                                        <th>Fasilitas Informasi</th>
                                        <th>Fasilitas Toilet</th>
                                        <th>Parkir Kendaraan</th>
                                        <th>Kebersihan</th>
                                        <th>Taman</th>
                                        <th>Sarana Ibadah</th>
                                        <th>Ruang Tunggu</th>
                                        <th>Sistem Pembayaran</th>
                                        <th>Pelayanan Pendaftaran</th>
                                        <th>Persiapan Persidangan</th>
                                        <th>Fasilitas Ruang Sidang</th>
                                        <th>Proses Persidangan</th>
                                        <th>Waktu Pemeriksaan</th>
                                        <th>Pemeriksaan Setempat</th>
                                        <th>Profesionalitas Hakim</th>
                                        <th>Pemberian Salinan Putusan</th>
                                        <th>Pelayanan Informasi</th>
                                        <th>Pelayanan Pengaduan</th>
                                        <th>Pelayanan Persuratan</th>
                                        <th>PSBP</th>
                                        <th>Eksekusi</th>
                                        <th>Sikap Petugas</th>
                                        <th>Kemampuan Petugas</th>
                                        <th>Penampilan Petugas</th>
                                        <th>Kritik dan Saran</th>
                                    </tr>
                                </thead>
                                <tbody class="text-nowrap">
                                    <?php 
                                        include("../koneksi.php");

                                        $no = 1;
                                        $sql = mysqli_query($koneksi, 'select * from tbl_survey order by tanggal desc');
                                        while ($data=mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                            <?php echo " <td><a class=\"btn btn-sm btn-primary btn-fill fas fa-print\" href=\"cetak/form_ikm.php?id_sikm=".$data['id_sikm']."\" target=\"_blank\"></a> <a class=\"btn btn-sm btn-danger btn-fill fas fa-trash\" href=\"form-delete-survey.php?id_sikm=".$data['id_sikm']."\" onclick=\"return confirm('Apakah anda yakin akan menghapus data ini?')\"></a></td> ";?>
                                                <td><?php echo $no++; ?></td>
                                                <td hidden=""><?php echo $data['id_sikm']; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['no_tlp']; ?></td>
                                                <td><?php echo date('d/M/Y, H:i', strtotime($data['tanggal'])) ?></td>
                                                <td><?php echo $data['fasilitas_informasi']; ?></td>
                                                <td><?php echo $data['fasilitas_toilet']; ?></td>
                                                <td><?php echo $data['parkir_kendaraan']; ?></td>
                                                <td><?php echo $data['kebersihan']; ?></td>
                                                <td><?php echo $data['taman']; ?></td>
                                                <td><?php echo $data['sarana_ibadah']; ?></td>
                                                <td><?php echo $data['ruang_tunggu']; ?></td>
                                                <td><?php echo $data['sistem_pembayaran']; ?></td>
                                                <td><?php echo $data['pelayanan_pendaftaran']; ?></td>
                                                <td><?php echo $data['persiapan_persidangan']; ?></td>
                                                <td><?php echo $data['fasilitas_ruang_sidang']; ?></td>
                                                <td><?php echo $data['proses_persidangan']; ?></td>
                                                <td><?php echo $data['waktu_pemeriksaan']; ?></td>
                                                <td><?php echo $data['pemeriksaan_setempat']; ?></td>
                                                <td><?php echo $data['profesionalitas_hakim']; ?></td>
                                                <td><?php echo $data['pemberian_salinan_putusan']; ?></td>
                                                <td><?php echo $data['pelayanan_informasi']; ?></td>
                                                <td><?php echo $data['pelayanan_pengaduan']; ?></td>
                                                <td><?php echo $data['pelayanan_persuratan']; ?></td>
                                                <td><?php echo $data['psbp']; ?></td>
                                                <td><?php echo $data['eksekusi']; ?></td>
                                                <td><?php echo $data['sikap_petugas']; ?></td>
                                                <td><?php echo $data['kemampuan_petugas']; ?></td>
                                                <td><?php echo $data['penampilan_petugas']; ?></td>
                                                <td><?php echo $data['kritik_saran']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <?php include("page/footer.php");?>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
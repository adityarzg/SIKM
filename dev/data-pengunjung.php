<?php
    include("../koneksi.php");
    //mengaktifkan session
    session_start();

    //cek apakah user telah login
    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    } 

    $halaman = "pengunjung";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pengunjung - e-SKM</title>
    <?php include("page/head.php"); ?>
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

<!-- Modal PDF -->
<div class="modal fade text-xs-left" id="pdf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn btn-light btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="myModalLabel1"><i style="margin-right:7px" class="fas fa-print"></i> Cetak Data Pengunjung </h5>
            </div>
            <form action="cetak/laporan-pengunjung.php" method="POST" target="_blank">
                <div class="modal-body">
                    <div class="form-body">
                        <p>Tanggal</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control date-picker" name="tgl_awal" placeholder="Tanggal Awal" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control date-picker" name="tgl_akhir" placeholder="Tanggal Akhir" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-info btn-simpan mr-1" name="cetak" value="Cetak">
                    <button type="button" class="btn btn-warning btn-reset" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

            <div class="container-fluid">
                <h3 class="text-dark mb-4">Daftar Pengunjung</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Informasi Pengunjung</p>
                    </div>
                    <div class="card-body">
                        <button style="font-family: Ubuntu;" class="btn btn-primary btn-sm btn-fill" data-toggle="modal" data-target="#pdf">Cetak PDF</button>
                        <hr>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table table-striped table-bordered table-hover my-0 data" id="dataTable">
                                <thead>
                                    <tr class="text-nowrap text-center">
                                        <th>No</th>
                                        <th>Nomor Identitas</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>No. Telepon</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Pencatatan</th>
                                        <th>Alamat</th>
                                        <th>Keperluan</th>
                                        <th>Pekerjaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-nowrap">
                                    <?php 
                                        include("../koneksi.php");

                                        $no = 1;
                                        $sql = mysqli_query($koneksi, 'select * from tbl_biodata');
                                        while ($data=mysqli_fetch_array($sql)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['no_id']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                                    <td><?php echo $data['no_tlp']; ?></td>
                                                    <td><?php echo $data['jenis_kelamin']; ?></td>
                                                    <td><?php echo date('d/m/Y, H:i', strtotime($data['tanggal']));?></td>
                                                    <td><?php echo $data['alamat']; ?></td>
                                                    <td><?php echo $data['pekerjaan']; ?></td>
                                                    <td><?php echo $data['keperluan']; ?></td>
                                                     <?php echo " <td style='white-space: nowrap;'><a href=\"edit-biodata.php?id=".$data['no_id']."\" class=\"btn btn-sm btn-warning btn-fill fas fa-edit\"></a> <a class=\"btn btn-sm btn-danger btn-fill fas fa-trash\" href=\"form-delete-biodata.php?id=".$data['no_id']."\" onclick=\"return confirm('Apakah anda yakin akan menghapus data ini?')\"></a></td>";?>
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
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Pengadilan Tata Usaha Negara Palu © 2021</span></div>
            </div>
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
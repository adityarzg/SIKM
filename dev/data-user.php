<?php
    include("../koneksi.php");
    //mengaktifkan session
    session_start();

    //cek apakah user telah login
    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    } 
    
    $halaman = "user";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data User - e-SKM</title>
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
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Data User</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Informasi User</p>
                    </div>
                    <div class="card-body">
                        <button style="font-family: Ubuntu;" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#MyModal" href=""> Tambah User</button>
                        <hr>
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table table-striped table-bordered table-hover my-0 data">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th hidden=""></th>
                                        <th>Nama User</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-nowrap">
                                    <?php 
                                        include("../koneksi.php");

                                        $no = 1;
                                        $sql = mysqli_query($koneksi, 'select * from tbl_user');
                                        while ($data = mysqli_fetch_array($sql)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td hidden=""><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['username']; ?></td>
                                                <?php echo " <td><a class=\"btn btn-sm btn-danger btn-fill fas fa-trash\" href=\"form-delete-user.php?id=".$data['id']."\" onclick=\"return confirm('Apakah anda yakin akan menghapus data ini?')\"></a></td> ";?>
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
            <div class="modal fade" role="dialog" tabindex="-1" id="MyModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah User</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <form action="form-create-user.php" method="POST">
                                <input class="form-control" type="text" placeholder="Username" name="username" autofocus="" autocomplete="off" style="margin-bottom: 9px;">
                                <input class="form-control" type="text" placeholder="Nama User" name="nama" style="margin-bottom: 9px;">
                                <input class="form-control" type="text" placeholder="Password" name="password" autocomplete="off" inputmode="verbatim">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-dismiss="modal">Tutup</button>
                            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">
                        </div>
                        </form>
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
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
    <title>Edit Data - e-SKM</title>
    <?php
    include("page/head.php");
    ?>
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
                    <h3 class="text-dark mb-1">Edit Data</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="form-edit-biodata.php" method="post">
                                <?php
                                include("../koneksi.php");

                                $id = $_GET['id'];
                                $sql = mysqli_query($koneksi, "select * from tbl_biodata where no_id = $id");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <input hidden class="form-control" type="text" style="margin-bottom: 10px;" name="no_id" value="<?php echo $data['no_id'] ?>">
                                    <input autofocus class="form-control" type="text" style="margin-bottom: 10px;" name="nama" value="<?php echo $data['nama'] ?>">
                                    <input class="form-control" type="date" style="margin-bottom: 10px;" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="no_tlp" value="<?php echo $data['no_tlp'] ?>">
                                    <select class="form-control" style="margin-bottom: 10px;" name="jenis_kelamin">
                                        <?php
                                        if ($data['jenis_kelamin'] == "") {
                                            echo "<option value=\"\" selected>Jenis Kelamin</option>";
                                        } else echo "<option value=''>Jenis Kelamin</option>";

                                        if ($data['jenis_kelamin'] == "Laki-Laki") {
                                            echo "<option value=\"Laki-Laki\" selected>Lak-Laki</option>";
                                        } else echo "<option value=\"Laki-Laki\">Laki-Laki</option>";

                                        if ($data['jenis_kelamin'] == "Perempuan") {
                                            echo "<option value=\"Perempuan\" selected>Perempuan</option>";
                                        } else echo "<option value=\"Perempuan\">Perempuan</option>";
                                        ?>
                                    </select>
                                    <input class="form-control" type="datetime-local" style="margin-bottom: 10px;" name="tanggal" value="<?php echo date('Y-m-d\TH:i:s', strtotime($data['tanggal'])); ?>">
                                    <textarea class="form-control" style="margin-bottom: 10px;" name="alamat" placeholder="Alamat .."><?php echo $data['alamat']; ?></textarea>
                                    <input class="form-control" type="text" style="margin-bottom: 10px" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>">
                                    <input class="form-control" type="text" name="keperluan" placeholder="Keperluan" style="margin-bottom: 10px;" value="<?php echo $data['keperluan'] ?>">
                                <?php
                                }
                                ?>
                                <a class="btn btn-danger" href="data-pengunjung.php" role="button">KEMBALI</a>
                                <button class="btn btn-success" type="submit">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <?php include("page/footer.php"); ?>
            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
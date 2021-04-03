<?php
include("../koneksi.php");
//mengaktifkan session
session_start();

//cek apakah user telah login
if ($_SESSION['status'] != "login") {
    header("location:login.php");
}

$halaman = "satker";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Satker - e-SKM</title>
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
                    <h3 class="text-dark mb-1">Pengaturan Data Satuan Kerja</h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="form-edit-satker.php" method="post" enctype="multipart/form-data">
                                <?php
                                include("../koneksi.php");
                                $sql = mysqli_query($koneksi, "select * from tbl_satker");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <input hidden class="form-control" type="text" style="margin-bottom: 10px;" name="id" value="<?php echo $data['id'] ?>" placeholder="id">
                                    <input autofocus class="form-control" type="text" style="margin-bottom: 10px;" name="nama_satker" value="<?php echo $data['nama_satker'] ?>" placeholder="Nama Satuan Kerja">
                                    <textarea class="form-control" style="margin-bottom: 10px;" name="alamat_satker" placeholder="Alamat .." placeholder="Alamat Satuan Kerja"><?php echo $data['alamat_satker']; ?></textarea>
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="jabatan_ttd" value="<?php echo $data['jabatan_ttd'] ?>" placeholder="Jabatan Penandatangan">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="pejabat_ttd" value="<?php echo $data['pejabat_ttd'] ?>" placeholder="Pejabat Penandatangan">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="nip_ttd" value="<?php echo $data['nip_ttd'] ?>" placeholder="NIP Pejabatat Penandatangan">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="kota_ttd" value="<?php echo $data['kota_ttd'] ?>" placeholder="Kota Satuan Kerja">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="no_tlp" value="<?php echo $data['no_tlp'] ?>" placeholder="Nomor Telepon Satuan Kerja">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="no_hp" value="<?php echo $data['no_hp'] ?>" placeholder="Nomor HP Satuan Kerja">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="email" value="<?php echo $data['email'] ?>" placeholder="Email Satuan Kerja">
                                    <input class="form-control" type="text" style="margin-bottom: 10px;" name="situs" value="<?php echo $data['situs'] ?>" placeholder="Situs Website Satuan Kerja">
                                    <img src="<?php echo "../assets/img/".$data['logo_satker'].""; ?>" id="gbr_preview" height="200" alt=" Preview Gambar" onerror="this.src='../assets/img/no-image.png'">
                                    <br><br>
                                    <div class="form-group">
                                        <label for="logo">Logo Satker :</label>
                                        <input type="File" name="logo_satker" id="file" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="pastikan file yang diupload bertipe *.JPG / *.PNG dan ukuran maksimal file 500 Kb" placeholder="">
                                    </div>
                                <?php
                                }
                                ?>
                                <button class="btn btn-success btn-block" type="submit">SIMPAN</button>
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
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script>
        /*Preview Gambar Sebelum di Upload Ke database*/
        function bacaGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#gbr_preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#file").change(function() {
            bacaGambar(this);
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
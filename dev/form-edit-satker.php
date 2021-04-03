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
        error_reporting(1);
        ini_set('display_errors', 1);
        error_reporting(E_ALL && ~E_NOTICE);

        $id = $_POST['id'];
        $nama_satker = $_POST['nama_satker'];
        $alamat_satker = $_POST['alamat_satker'];
        $jabatan_ttd = $_POST['jabatan_ttd'];
        $pejabat_ttd = $_POST['pejabat_ttd'];
        $nip_ttd = $_POST['nip_ttd'];
        $kota_ttd = $_POST['kota_ttd'];
        $no_tlp = $_POST['no_tlp'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];
        $situs = $_POST['situs'];

        $nama_gambar = $_FILES['logo_satker']['name'];
        $tmp_gambar = $_FILES['logo_satker']['tmp_name'];
        $dir_gambar = "../assets/img/";

        if (!empty($tmp_gambar)) {
            if (move_uploaded_file($tmp_gambar, $dir_gambar.$nama_gambar)) {
                $sql = mysqli_query($koneksi, "UPDATE tbl_satker SET nama_satker = '$nama_satker', 
                                                                     alamat_satker = '$alamat_satker', 
                                                                     logo_satker = '$nama_gambar', 
                                                                     jabatan_ttd = '$jabatan_ttd', 
                                                                     pejabat_ttd = '$pejabat_ttd',
                                                                     nip_ttd = '$nip_ttd',
                                                                     kota_ttd = '$kota_ttd', 
                                                                     no_tlp = '$no_tlp', 
                                                                     no_hp = '$no_hp', 
                                                                     email = '$email', 
                                                                     situs = '$situs' WHERE id = '$id'");
                //mengalihkan halaman ke index.php
                if ($sql) {
                    echo "<script>Swal.fire({
                    icon: 'success',
                    title: 'Selamat!',
                    text: 'Data satker beserta logo berhasil disimpan',
                    showConfirmButton: true,
                    confirmButtonText:'Tutup'
                    }).then(function(){ 
                        location.replace('edit-satker.php');
                    });
                    </script>";
                } else {
                    echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'Ooops!',
                    text: 'Data satker beserta logo gagal disimpan, cek kembali data anda',
                    showConfirmButton: true,
                    confirmButtonText:'Tutup'
                    }).then(function(){ 
                        location.replace('edit-satker.php');
                    });
                    </script>";
                }
            }
        }else{
            $sql = mysqli_query($koneksi, "UPDATE tbl_satker SET nama_satker = '$nama_satker',
                                                                 alamat_satker = '$alamat_satker', 
                                                                 jabatan_ttd = '$jabatan_ttd', 
                                                                 pejabat_ttd = '$pejabat_ttd',
                                                                 nip_ttd = '$nip_ttd',
                                                                 kota_ttd = '$kota_ttd', 
                                                                 no_tlp = '$no_tlp', 
                                                                 no_hp = '$no_hp', 
                                                                 email = '$email',
                                                                 situs = '$situs' WHERE id = '$id'");
            //mengalihkan halaman ke index.php
            if ($sql) {
                echo "<script>Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Data satker tanpa mengubah logo berhasil disimpan',
                        showConfirmButton: true,
                        confirmButtonText:'Tutup'
                        }).then(function(){ 
                            location.replace('edit-satker.php');
                        });
                        </script>";
            } else {
                echo "<script>Swal.fire({
                        icon: 'error',
                        title: 'Ooops!',
                        text: 'Data gagal disimpan, cek kembali data anda',
                        showConfirmButton: true,
                        confirmButtonText:'Tutup'
                        }).then(function(){ 
                            location.replace('edit-satker.php');
                        });
                        </script>";
             }       
        }
    ?>
</body>

</html>
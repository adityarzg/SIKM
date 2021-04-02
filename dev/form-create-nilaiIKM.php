<?php 
    include("../koneksi.php");

    $nilai = $_POST['nilai_ikm'];

    $sql = mysqli_query($koneksi, "insert into tbl_nilaiikm values('','$nilai',now())");

    if ($sql) {
        echo "<script>alert('Data nilai IKM berhasil di input!')
        location.replace('index.php')</script>";
    }else{
        echo "<script>alert('Data nilai IKM gagal di input!')
        location.replace('index.php')</script>";
    }
 ?>
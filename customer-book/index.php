<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="../assets/img/icon.png">
    <title>Buku Tamu</title>
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Coiny">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Contrail+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Scope+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
    *{font-size: 15px;}
</style>
<body>
    <div class="container-md">
        <div class="col-auto col-sm-10 col-md-8 col-lg-6 col-xl-6 offset-sm-1 offset-md-2 offset-lg-3" data-aos="fade-up" data-aos-duration="800" data-aos-once="true" style="background: #ff9900;padding: 20px;border-radius: 10px;border-style: solid;border-color: #ff9900;text-shadow: 0px 0px;box-shadow: 6px 5px 11px rgb(81,82,82);">
            <div class="row text-light" style="font-family: Acme, sans-serif;font-size: 16px;font-weight: normal;font-style: normal;">
                <div class="col">
                    <h2 class="text-center">BUKU TAMU DIGITAL</h2>
                    <h5 class="text-center">PENGADILAN TATA USAHA NEGARA PALU</h5>
                </div>
            </div>
            <hr style="background: #ffffff;">
            <div class="row">
                <div class="col">
                    <form action="" method="post" class="text-left" method="post" style="padding: 20px;font-family: Ubuntu, sans-serif;">
                        <input name="no_id" id="no_id" class="form-control" type="text" style="margin-bottom: 10px;" placeholder="Nomor Identitas" autofocus="" required="" maxlength="16";>
                        <input name="nama" id="nama" class="form-control" type="text" style="margin-bottom: 10px;text-transform:capitalize" placeholder="Nama">
                        <input class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" type="text" onfocus="(this.type='date')" style="margin-bottom: 10px;" >
                        <input name="tel" id="tel" class="form-control" type="tel"  style="margin-bottom: 10px;" placeholder="No. Telepon / Hp">
                        <select name="jk" id="jk" class="form-control" type="text" style="margin-bottom: 10px;" >
                            <option value="" disabled selected hidden>- Jenis Kelamin -</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Asal / Alamat" rows="2" style="margin-bottom: 10px;text-transform:capitalize;"></textarea>
                        <input name="pekerjaan" id="pekerjaan" class="form-control" type="text" style="margin-bottom: 0px;margin-bottom: 10px;text-transform:capitalize;" placeholder="Pekerjaan">
                        <input name="tanggal" required class="form-control" type="text" placeholder="Tanggal Kunjungan" onfocus="(this.type='datetime-local')" style="margin-bottom: 10px;">
                        <input name="keperluan" required class="form-control" type="text" style="margin-bottom: 0px;margin-top: 10px;text-transform:capitalize;" placeholder="Keperluan">
                        <div class="row" style="margin-bottom:15px">
                            <div class="col-md-6">
                                <input class="btn btn-primary btn-block btn-sm" name="save-new" formaction="form-create-custbook.php" type="submit" value="SIMPAN SEBAGAI DATA BARU" style="margin-top: 15px;box-shadow: 0px 2px 3px rgb(106,106,106);">
                            </div>
                            <div class="col-md-6">
                                <input class="btn btn-success btn-block btn-sm" name="recent-visit" formaction="form-visit-custbook.php" type="submit" value="SIMPAN KUNJUNGAN HARI INI" style="margin-top: 15px;box-shadow: 0px 2px 3px rgb(106,106,106);">
                            </div>
                        </div>
                        <a href="../dev" class="btn btn-sm btn-dark btn-block" style="font-style:italic;text-transform:uppercase;">Buka Halaman Admin</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#no_id").change(function(){
                var no_id = $("#no_id").val();
 
                $.ajax({
                    url: 'form-read-custbook.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'no_id': no_id
                    },
                    success: function (cust) {
                        $("#nama").val(cust['nama']);
                        $("#tel").val(cust['no_tlp']);
                        $("#tgl_lahir").val(cust['tgl_lahir']);
                        $("#jk").val(cust['jenis_kelamin']);
                        $("#alamat").val(cust['alamat']);
                        $("#pekerjaan").val(cust['pekerjaan']);
                    }
                });
            });
        });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>

</body>

</html>
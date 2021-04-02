<!DOCTYPE html>
<html style="background: linear-gradient(black, white);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SIKM</title>
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" type="text/css" href="assets/vendors/css/chosen/chosen.min.css">
    <script src="assets/vendors/js/chosen/chosen.jquery.min.js" type="text/javascript"></script>
</head>

<body style="background: linear-gradient(54deg, rgba(105,46,133,0.78) 12%, rgb(50,93,188) 55%, rgba(111,165,42,0.66) 90%), #325dbc;">
    <div>
        <div class="container-fluid" style="background: #ff9900;">
            <div class="row" style="padding: 15px;">                                
                <div class="col-12 text-center"><img class="img-fluid" src="assets/img/LOGO%20PTUN%20PALU%20NEW.png" width="55px"></div>
                <div class="col">
                    <h2 class="text-center" style="font-weight: bold;font-style: normal;color: #ffffff;">E - SKM</h2>
                    <h6 class="text-center" style="color: rgb(255,255,255);line-height: 0px;">Elektornik - Survey Kepuasan Masyarakat</h6>
                </div>
            </div>
        </div>
    </div>
    <hr style="border-width: 10px;">
    <div class="container" style="background: rgba(255,255,255,0);">
        <div class="row text-center">
            <div class="col-8 offset-2">
                <form method="POST" action="form-create-sikm.php ">
                    <div role="tablist" id="accordion-1">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-1" href="#accordion-1 .item-1">Biodata</a></h5>
                            </div>
                            <div class="collapse show item-1" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                <select class="custom-select custom-select-sm" autofocus="" required="" name="nama" id="nama">
                                <optgroup label="Pilih Nama Dibawah">
                                    <option disabled selected hidden value="">Nama</option>
                                    <?php 
                                        include('koneksi.php');
                                        $sql = mysqli_query($koneksi, "select * from tbl_biodata");
                                        while ($data = mysqli_fetch_array($sql)) {
                                     ?>
                                     <option value="<?=$data['nama']?>"><?=$data['nama']?></option>
                                     <?php 
                                        }
                                      ?>
                                </optgroup>
                                </select>
                                    <input name="no_tlp" id="no_tlp" class="form-control form-control-sm" type="text" placeholder="No. Telepon / Hp" style="margin-top: 10px;">
                                    <input name="tanggal" class="form-control form-control-sm" type="datetime-local" style="margin-top: 10px;">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="#accordion-1 .item-2">Fasilitas Pengadilan</a></h5>
                            </div>
                            <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col" style="font-size: 16px;"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Fasilitas Informasi</label></div>
                                    </div>
                                    <div class="form-group" style="border-width: 1px;border-bottom-width: 0.4px;border-bottom-style: dotted;font-size: 12;text-align: center;">
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-1" name="fasilitas-informasi" value="Sangat Puas"><label class="custom-control-label" for="formCheck-1">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-2" name="fasilitas-informasi" value="Puas"><label class="custom-control-label" for="formCheck-2">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-3" name="fasilitas-informasi" value="Cukup Puas"><label class="custom-control-label" for="formCheck-3">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-4" name="fasilitas-informasi" value="Kurang Puas"><label class="custom-control-label" for="formCheck-4">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Fasilitas Toilet</label></div>
                                    <div class="form-group text-center" style="border-width: 1px;border-style: none;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-5" name="fasilitas-toilet" value="Sangat Puas"><label class="custom-control-label" for="formCheck-5">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-6" name="fasilitas-toilet" value="Puas"><label class="custom-control-label" for="formCheck-6">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-7" name="fasilitas-toilet" value="Cukup Puas"><label class="custom-control-label" for="formCheck-7">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-8" name="fasilitas-toilet" value="Kurang Puas"><label class="custom-control-label" for="formCheck-8">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Parkir Kendaraan</label></div>
                                    <div class="form-group text-center" style="border-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-9" name="parkir-kendaraan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-9">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-10" name="parkir-kendaraan" value="Puas"><label class="custom-control-label" for="formCheck-10">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-11" name="parkir-kendaraan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-11">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-12" name="parkir-kendaraan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-12">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Kebersihan</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-13" name="kebersihan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-13">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-14" name="kebersihan" value="Puas"><label class="custom-control-label" for="formCheck-14">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-15" name="kebersihan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-15">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-16" name="kebersihan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-16">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Taman</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-17" name="taman" value="Sangat Puas"><label class="custom-control-label" for="formCheck-17">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-18" name="taman" value="Puas"><label class="custom-control-label" for="formCheck-18">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-19" name="taman" value="Cukup Puas"><label class="custom-control-label" for="formCheck-19">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-20" name="taman" value="Kurang Puas"><label class="custom-control-label" for="formCheck-20">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Sarana Ibadah</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-21" name="sarana-ibadah" value="Sangat Puas"><label class="custom-control-label" for="formCheck-21">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-22" name="sarana-ibadah" value="Puas"><label class="custom-control-label" for="formCheck-22">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-23" name="sarana-ibadah" value="Cukup Puas"><label class="custom-control-label" for="formCheck-23">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-24" name="sarana-ibadah" value="Kurang Puas"><label class="custom-control-label" for="formCheck-24">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Ruang Tunggu</label></div>
                                    <div class="form-group text-center" style="border-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-29" name="ruang-tunggu" value="Sangat Puas"><label class="custom-control-label" for="formCheck-29">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-30" name="ruang-tunggu" value="Puas"><label class="custom-control-label" for="formCheck-30">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-31" name="ruang-tunggu" value="Cukup Puas"><label class="custom-control-label" for="formCheck-31">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-32" name="ruang-tunggu" value="Kurang Puas"><label class="custom-control-label" for="formCheck-32">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="#accordion-1 .item-3">Prosedur Pendaftaran</a></h5>
                            </div>
                            <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Sistem Pembayaran</label></div>
                                    <div class="form-group text-center" style="border-style: none;border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-33" name="sistem-pembayaran" value="Sangat Puas"><label class="custom-control-label" for="formCheck-33">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-34" name="sistem-pembayaran" value="Puas"><label class="custom-control-label" for="formCheck-34">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-35" name="sistem-pembayaran" value="Cukup Puas"><label class="custom-control-label" for="formCheck-35">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-36" name="sistem-pembayaran" value="Kurang Puas"><label class="custom-control-label" for="formCheck-36">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pelayanan Pendaftaran</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-37" name="pelayanan-pendaftaran" value="Sangat Puas"><label class="custom-control-label" for="formCheck-37">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-38" name="pelayanan-pendaftaran" value="Puas"><label class="custom-control-label" for="formCheck-38">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-39" name="pelayanan-pendaftaran" value="Cukup Puas"><label class="custom-control-label" for="formCheck-39">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-40" name="pelayanan-pendaftaran" value="Kurang Puas"><label class="custom-control-label" for="formCheck-40">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-4" href="#accordion-1 .item-4">Persidangan</a></h5>
                            </div>
                            <div class="collapse item-4" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Persiapan Persidangan</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-41" name="persiapan-persidangan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-41">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-42" name="persiapan-persidangan" value="Puas"><label class="custom-control-label" for="formCheck-42">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-43" name="persiapan-persidangan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-43">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-44" name="persiapan-persidangan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-44">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Fasilitas Ruang Sidang</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-45" name="fasilitas-rsidang" value="Sangat Puas"><label class="custom-control-label" for="formCheck-45">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-46" name="fasilitas-rsidang" value="Puas"><label class="custom-control-label" for="formCheck-46">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-47" name="fasilitas-rsidang" value="Cukup Puas"><label class="custom-control-label" for="formCheck-47">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-48" name="fasilitas-rsidang" value="Kurang Puas"><label class="custom-control-label" for="formCheck-48">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Proses Persidangan</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-49" name="proses-persidangan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-49">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-50" name="proses-persidangan" value="Puas"><label class="custom-control-label" for="formCheck-50">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-51" name="proses-persidangan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-51">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-52" name="proses-persidangan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-52">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Waktu Pemeriksaan</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-53" name="waktu-pemeriksaan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-53">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-54" name="waktu-pemeriksaan" value="Puas"><label class="custom-control-label" for="formCheck-54">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-55" name="waktu-pemeriksaan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-55">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-56" name="waktu-pemeriksaan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-56">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pemeriksaan Setempat</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-57" name="pemeriksaan-setempat" value="Sangat Puas"><label class="custom-control-label" for="formCheck-57">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-58" name="pemeriksaan-setempat" value="Puas"><label class="custom-control-label" for="formCheck-58">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-59" name="pemeriksaan-setempat" value="Cukup Puas"><label class="custom-control-label" for="formCheck-59">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-60" name="pemeriksaan-setempat" value="Kurang Puas"><label class="custom-control-label" for="formCheck-60">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-5" href="#accordion-1 .item-5">Hakim</a></h5>
                            </div>
                            <div class="collapse item-5" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Profesionalitas Hakim</label></div>
                                    <div class="form-group text-center" style="border-bottom-style: none;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-61" name="profesionalitas-hakim" value="Sangat Puas"><label class="custom-control-label" for="formCheck-61">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-62" name="profesionalitas-hakim" value="Puas"><label class="custom-control-label" for="formCheck-62">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-63" name="profesionalitas-hakim" value="Cukup Puas"><label class="custom-control-label" for="formCheck-63">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-64" name="profesionalitas-hakim" value="Kurang Puas"><label class="custom-control-label" for="formCheck-64">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-6" href="#accordion-1 .item-6">Salinan Putusan</a></h5>
                            </div>
                            <div class="collapse item-6" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pemberian Salinan Putusan</label></div>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-65" name="pemberian-sputusan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-65">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-66" name="pemberian-sputusan" value="Puas"><label class="custom-control-label" for="formCheck-66">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-67" name="pemberian-sputusan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-67">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-68" name="pemberian-sputusan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-68">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-7" href="#accordion-1 .item-7">Informasi</a></h5>
                            </div>
                            <div class="collapse item-7" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pelayanan Informasi</label></div>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-69" name="pelayanan-informasi" value="Sangat Puas"><label class="custom-control-label" for="formCheck-69">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-70" name="pelayanan-informasi" value="Puas"><label class="custom-control-label" for="formCheck-70">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-71" name="pelayanan-informasi" value="Cukup Puas"><label class="custom-control-label" for="formCheck-71">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-72" name="pelayanan-informasi" value="Kurang Puas"><label class="custom-control-label" for="formCheck-72">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-8" href="#accordion-1 .item-8">Pengaduan</a></h5>
                            </div>
                            <div class="collapse item-8" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pelayanan Pengaduan</label></div>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-73" name="pelayanan-pengaduan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-73">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-74" name="pelayanan-pengaduan" value="Puas"><label class="custom-control-label" for="formCheck-74">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-75" name="pelayanan-pengaduan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-75">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-76" name="pelayanan-pengaduan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-76">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-9" href="#accordion-1 .item-9">Persuratan</a></h5>
                            </div>
                            <div class="collapse item-9" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pelayanan Persuratan</label></div>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-77" name="pelayanan-persuratan" value="Sangat Puas"><label class="custom-control-label" for="formCheck-77">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-78" name="pelayanan-persuratan" value="Puas"><label class="custom-control-label" for="formCheck-78">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-79" name="pelayanan-persuratan" value="Cukup Puas"><label class="custom-control-label" for="formCheck-79">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-80" name="pelayanan-persuratan" value="Kurang Puas"><label class="custom-control-label" for="formCheck-80">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-10" href="#accordion-1 .item-10">Pengembalian Sisa Biaya Panjar</a></h5>
                            </div>
                            <div class="collapse item-10" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Pengembalian Sisa Biaya Panjar</label></div>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-81" name="psbp" value="Sangat Puas"><label class="custom-control-label" for="formCheck-81">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-82" name="psbp" value="Puas"><label class="custom-control-label" for="formCheck-82">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-83" name="psbp" value="Cukup Puas"><label class="custom-control-label" for="formCheck-83">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-84" name="psbp" value="Kurang Puas"><label class="custom-control-label" for="formCheck-84">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-11" href="#accordion-1 .item-11">Permohonan Eksekusi</a></h5>
                            </div>
                            <div class="collapse item-11" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Eksekusi</label></div>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-89" name="eksekusi" value="Sangat Puas"><label class="custom-control-label" for="formCheck-89">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-90" name="eksekusi" value="Puas"><label class="custom-control-label" for="formCheck-90">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-91" name="eksekusi" value="Cukup Puas"><label class="custom-control-label" for="formCheck-91">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-92" name="eksekusi" value="Kurang Puas"><label class="custom-control-label" for="formCheck-92">Kurang Puas</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-12" href="#accordion-1 .item-12">Aparatur Pengadilan</a></h5>
                            </div>
                            <div class="collapse item-12" role="tabpanel" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Sikap Petugas</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-85" name="sikap-petugas" value="Sangat Puas"><label class="custom-control-label" for="formCheck-85">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-86" name="sikap-petugas" value="Puas"><label class="custom-control-label" for="formCheck-86">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-87" name="sikap-petugas" value="Cukup Puas"><label class="custom-control-label" for="formCheck-87">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-88" name="sikap-petugas" value="Kurang Puas"><label class="custom-control-label" for="formCheck-88">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Kemampuan Pengetahuan Petugas</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-93" name="kemampuan-ppetugas" value="Sangat Puas"><label class="custom-control-label" for="formCheck-93">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-94" name="kemampuan-ppetugas" value="Puas"><label class="custom-control-label" for="formCheck-94">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-95" name="kemampuan-ppetugas" value="Cukup Puas"><label class="custom-control-label" for="formCheck-95">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-96" name="kemampuan-ppetugas" value="Kurang Puas"><label class="custom-control-label" for="formCheck-96">Kurang Puas</label></div>
                                    </div>
                                    <div class="col"><label class="col-form-label" style="margin-bottom: 0px;font-weight: bold;">Penampilan Petugas</label></div>
                                    <div class="form-group text-center" style="border-bottom-width: 1px;border-bottom-style: dotted;">
                                        <div class="custom-control custom-control-inline text-left custom-radio"><input class="custom-control-input" type="radio" id="formCheck-97" name="penampilan-petugas" value="Sangat Puas"><label class="custom-control-label" for="formCheck-97">Sangat Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-98" name="penampilan-petugas" value="Puas"><label class="custom-control-label" for="formCheck-98">Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-99" name="penampilan-petugas" value="Cukup Puas"><label class="custom-control-label" for="formCheck-99">Cukup Puas</label></div>
                                        <div class="custom-control custom-control-inline custom-radio"><input class="custom-control-input" type="radio" id="formCheck-100" name="penampilan-petugas" value="Kurang Puas"><label class="custom-control-label" for="formCheck-100">Kurang Puas</label></div>
                                    </div>
                                    <div class="col" style="text-align: left;"><label class="col-form-label" style="margin-bottom: 0px;font-weight: normal;font-style: italic;">*Kritik dan Saran Untuk Layanan Pengadilan Tata Usaha Negara Palu</label></div><textarea name="kritik-saran" class="form-control" rows="6" placeholder="Tuliskan kritik dan saran ....."
                                        style="font-size: 12px;"></textarea><button class="btn btn-success btn-block text-uppercase" type="submit" style="margin-top: 10px;">simpan</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr style="border-width: 10px;">
    <div class="footer-basic" style="background: rgb(255,153,0);padding-top: 30px;padding-bottom: 30px;">
        <footer>
            <div class="social" style="padding-bottom: 0px;"><a href="https://www.instagram.com/ptunpalu/" style="border-color: rgb(255,255,255);"><i class="fab fa-instagram" style="color: rgb(255,255,255);"></i></a><a href="https://www.youtube.com/user/PTUNPALU" style="border-color: #ffffff;"><i class="fab fa-youtube" style="color: rgb(255,255,255);"></i></a>
                <a
                    href="https://www.facebook.com/ptunpalu1998" style="border-color: #ffffff;"><i class="fab fa-facebook" style="color: rgb(247,251,255);"></i></a>
            </div>
            <p class="copyright" style="color: rgb(255,255,255);">Pengadilan Tata Usaha Negara Palu © 2021</p>
        </footer>
    </div>
    <script>
        $(function() {
            $("#nama").change(function(){
                var nama = $("#nama").val();
 
                $.ajax({
                    url: 'form-read-sikm.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'nama': nama
                    },
                    success: function (cust) {
                        $("#no_tlp").val(cust['no_tlp']);
                    }
                });
            });
        });
    </script>

    <script>
        $('document').ready(function(){
            $("#nama").chosen({
                no_result_text: "maaf kategori yang dicari tidak ada"
            });
        })
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
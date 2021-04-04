<?php
include("../koneksi.php");
include("page/result-chart.php");
$halaman = "grafik";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Grafik Keseluruhan e-SKM</title>
    <?php include("page/head.php"); ?>
    <style>
        #judul h3 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Element');
            data.addColumn('number', 'Percentage');
            data.addRows([
                ['Sangat Puas', <?php echo $jlh_sp; ?>],
                ['Puas', <?php echo $jlh_p; ?>],
                ['Cukup Puas', <?php echo $jlh_cp; ?>],
                ['Kurang Puas', <?php echo $jlh_kp; ?>]
            ]);

            var options = {
                'chartArea': {
                    'width': '95%'
                },
                colors: ['#4285F4', '#0F9D58', '#F4B400', '#DB4437'], //Recolor bars
                is3D: true
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
            chart.draw(data, options);
            
            // Paul Irish’s Debounced resize plug-in
            $(window).smartresize(function() {
                chart.draw(data, options);
            });
        }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Bulan', 'SP', 'P', 'CP', 'KP'],
                ['Januari', <?php echo $result_jan_sp; ?>, <?php echo $result_jan_p; ?>, <?php echo $result_jan_cp; ?>, <?php echo $result_jan_kp; ?>],
                ['Februari', <?php echo $result_feb_sp; ?>, <?php echo $result_feb_p; ?>, <?php echo $result_feb_cp; ?>, <?php echo $result_feb_kp; ?>],
                ['Maret', <?php echo $result_mar_sp; ?>, <?php echo $result_mar_p; ?>, <?php echo $result_mar_cp; ?>, <?php echo $result_mar_kp; ?>],
                ['April', <?php echo $result_apr_sp; ?>, <?php echo $result_apr_p; ?>, <?php echo $result_apr_cp; ?>, <?php echo $result_apr_kp; ?>],
                ['Mei', <?php echo $result_mei_sp; ?>, <?php echo $result_mei_p; ?>, <?php echo $result_mei_cp; ?>, <?php echo $result_mei_kp; ?>],
                ['Juni', <?php echo $result_jun_sp; ?>, <?php echo $result_jun_sp; ?>, <?php echo $result_jun_cp; ?>, <?php echo $result_jun_kp; ?>],
                ['Juli', <?php echo $result_jul_sp; ?>, <?php echo $result_jul_sp; ?>, <?php echo $result_jul_cp; ?>, <?php echo $result_jul_kp; ?>],
                ['Agustus', <?php echo $result_agu_sp; ?>, <?php echo $result_agu_sp; ?>, <?php echo $result_agu_cp; ?>, <?php echo $result_agu_kp; ?>],
                ['September', <?php echo $result_sep_sp; ?>, <?php echo $result_sep_sp; ?>, <?php echo $result_sep_cp; ?>, <?php echo $result_sep_kp; ?>],
                ['Oktober', <?php echo $result_okt_sp; ?>, <?php echo $result_okt_sp; ?>, <?php echo $result_okt_cp; ?>, <?php echo $result_okt_kp; ?>],
                ['November', <?php echo $result_nov_sp; ?>, <?php echo $result_nov_sp; ?>, <?php echo $result_nov_cp; ?>, <?php echo $result_nov_kp; ?>],
                ['Desember', <?php echo $result_des_sp; ?>, <?php echo $result_des_sp; ?>, <?php echo $result_des_cp; ?>, <?php echo $result_des_kp; ?>],
            ]);

            var options = {
                bars: 'vertical', // Required for Material Bar Charts.
                colors: ['#4285F4', '#0F9D58', '#F4B400', '#DB4437'] //Recolor bars
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4 mt-4" id="judul">
                        <h3 class="text-dark mb-0">Data Grafik Indeks Kepuasan Masyarakat Pada Pengadilan Tata Usaha Negara Palu</h3>
                    </div>
                    <div class="row" data-aos="fade-left" data-aos-duration="750" data-aos-once="true">

                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <span>jumlah pengunjung hari ini</span>
                                            </div>
                                            <?php
                                            include("../koneksi.php");
                                            $hari_ini = date("Y-m-d");
                                            $data_pengunjung = mysqli_query($koneksi, "select * from tbl_biodata where tanggal LIKE '$hari_ini%'");
                                            $jumlah_pengunjung_hari = mysqli_num_rows($data_pengunjung);
                                            ?>
                                            <div class="text-dark font-weight-bold h5 mb-0"><span><?php echo $jumlah_pengunjung_hari; ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Data Pengunjung keseluruhan</span></div>
                                            <div class="text-dark font-weight-bold h5 mb-0">
                                                <?php
                                                include("../koneksi.php");
                                                $data_pengunjung = mysqli_query($koneksi, "select * from tbl_biodata");
                                                $jumlah_pengunjung = mysqli_num_rows($data_pengunjung);
                                                ?>
                                                <span><?php echo $jumlah_pengunjung; ?></span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4 mb-4">
                            <div class="card shadow border-left-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>nilai ikm</span></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3">
                                                        <?php
                                                        include("../koneksi.php");

                                                        $sql = mysqli_query($koneksi, "select * from tbl_nilaiikm where id IN(select MAX(id) from tbl_nilaiikm)");
                                                        while ($data = mysqli_fetch_array($sql)) {
                                                        ?>
                                                            <span><?php echo $data['nilai']; ?></span>
                                                    </div>
                                                <?php
                                                        }
                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Grafik Indeks Kepuasan Masyarakat</h6>
                                    <div class="dropdown no-arrow">
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area" id="barchart_material"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary font-weight-bold m-0">Grafik Jumlah Pilihan IKM</h6>
                                    <div class="dropdown no-arrow">
                                        <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area" id="myPieChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <?php include("page/footer.php");?>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/vendors/js/chart/Chart.bundle.js"></script>
    <script src="../assets/vendors/js/chart/Chart.bundle.min.js"></script>
    <script src="../assets/vendors/js/chart/Chart.js"></script>
    <script src="../assets/vendors/js/chart/Chart.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>

</body>

</html>
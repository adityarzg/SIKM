<?php
    include("../koneksi.php");
    //mengaktifkan session
    session_start();

    //cek apakah user telah login
    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    }

    include("page/head.php");
    include("page/result-chart.php");
    $halaman = "beranda";
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - e-SKM</title>
</head>
<body id="page-top">
    <div id="wrapper">
        <?php include("page/sidebar.php"); ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <?php include("page/row-logprofile.php") ?>
                        </ul>
                    </div>
                </nav>
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3></div>
                <div class="row" data-aos="fade-left" data-aos-duration="750"
                    data-aos-once="true">

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
                                                		while ($data=mysqli_fetch_array($sql)){
                                                			?>
                                                			<span><?php echo $data['nilai']; ?></span></div>
                                                		<?php
                                                		}
                                                	 ?>
                                                <div class="collapse" id="ikm">
			                                    	<form method="POST" action="form-create-nilaiIKM.php">
			                                    		<input class="form-control form-control-sm" type="text" name="nilai_ikm" placeholder="Tentukan nilai IKM">
			                                    		<input type="submit" name="submit" value="SIMPAN" class="btn btn-sm btn-success" style="margin-top: 5px;">
			                                    	</form>
			                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary" data-target="#ikm" data-toggle="collapse"><div class="col-auto"><i class="fas fa-pencil-alt fa-2x text-gray-300"></i></div></button>
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
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="chart-ikm"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Grafik Jumlah Pilihan IKM</h6>
                                <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="chart-ikm-2"></canvas></div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Pengadilan Tata Usaha Negara Palu © 2021</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
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
    <script>
        var ctx = document.getElementById('chart-ikm').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: [
                  {
                    label: 'Sangat Puas',
                    data: [
                        <?php echo $result_jan_sp; ?>,
                        <?php echo $result_feb_sp; ?>,
                        <?php echo $result_mar_sp; ?>,
                        <?php echo $result_apr_sp; ?>,
                        <?php echo $result_mei_sp; ?>,
                        <?php echo $result_jun_sp; ?>,
                        <?php echo $result_jul_sp; ?>,
                        <?php echo $result_agu_sp; ?>,
                        <?php echo $result_sep_sp; ?>,
                        <?php echo $result_okt_sp; ?>,
                        <?php echo $result_nov_sp; ?>,
                        <?php echo $result_des_sp; ?>
                    ],
                    backgroundColor: '#1cc88a',
                  },
                  {
                    label: 'Puas',
                    data: [
                        <?php echo $result_jan_p; ?>,
                        <?php echo $result_feb_p; ?>,
                        <?php echo $result_mar_p; ?>,
                        <?php echo $result_apr_p; ?>,
                        <?php echo $result_mei_p; ?>,
                        <?php echo $result_jun_p; ?>,
                        <?php echo $result_jul_p; ?>,
                        <?php echo $result_agu_p; ?>,
                        <?php echo $result_sep_p; ?>,
                        <?php echo $result_okt_p; ?>,
                        <?php echo $result_nov_p; ?>,
                        <?php echo $result_des_p; ?>
                    ],
                    backgroundColor: '#4e73df',
                  },
                  {
                    label: 'Cukup Puas',
                    data: [
                        <?php echo $result_jan_cp; ?>,
                        <?php echo $result_feb_cp; ?>,
                        <?php echo $result_mar_cp; ?>,
                        <?php echo $result_apr_cp; ?>,
                        <?php echo $result_mei_cp; ?>,
                        <?php echo $result_jun_cp; ?>,
                        <?php echo $result_jul_cp; ?>,
                        <?php echo $result_agu_cp; ?>,
                        <?php echo $result_sep_cp; ?>,
                        <?php echo $result_okt_cp; ?>,
                        <?php echo $result_nov_cp; ?>,
                        <?php echo $result_des_cp; ?>
                    ],
                    backgroundColor: '#f0fb60',
                  },
                  {
                    label: 'Kurang Puas',
                    data: [
                        <?php echo $result_jan_kp; ?>,
                        <?php echo $result_feb_kp; ?>,
                        <?php echo $result_mar_kp; ?>,
                        <?php echo $result_apr_kp; ?>,
                        <?php echo $result_mei_kp; ?>,
                        <?php echo $result_jun_kp; ?>,
                        <?php echo $result_jul_kp; ?>,
                        <?php echo $result_agu_kp; ?>,
                        <?php echo $result_sep_kp; ?>,
                        <?php echo $result_okt_kp; ?>,
                        <?php echo $result_nov_kp; ?>,
                        <?php echo $result_des_kp; ?>
                    ],
                    backgroundColor: '#fd2824',
                  }
                ]
              },
            options: {
            scales: {
              xAxes: [{ stacked: true, ticks: {beginAtZero: true } }],
              yAxes: [{ stacked: true }],
            },
            responsive: true,
            maintainAspectRatio: false,
          }
        });
    </script>

    <script>
        var ctx = document.getElementById("chart-ikm-2");
        var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas'],
            datasets: [{
              label: 'IKM',
              data: [
                <?php echo $jlh_sp; ?>, 
                <?php echo $jlh_p; ?>,
                <?php echo $jlh_cp; ?>,
                <?php echo $jlh_kp; ?>
              ],
              backgroundColor: [
                '#1cc88a',
                '#4e73df',
                '#f0fb60',
                '#fd2824'
              ]
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
          }
        });
    </script>
</body>

</html>
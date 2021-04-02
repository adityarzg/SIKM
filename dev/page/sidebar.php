<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-user-astronaut"></i></div>
            <div class="sidebar-brand-text mx-3"><span>e-SKM</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav" id="accordionSidebar">
            <li class="nav-item">
                <a <?php if ($halaman == "beranda") {echo "class='nav-link active'";} ?> class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a <?php if ($halaman == "pengunjung") { echo "class='nav-link active'";} ?> class="nav-link" href="data-pengunjung.php"><i class="fas fa-table"></i><span>Daftar Pengunjung</span></a>
                <a <?php if ($halaman == "kunjungan") { echo "class='nav-link active'";} ?> class="nav-link" href="data-kunjungan.php"><i class="fas fa-table"></i><span>Daftar Kunjungan</span></a>
                <a <?php if ($halaman == "survey") { echo "class='nav-link active'";} ?> class="nav-link" href="data-survey.php"><i class="fas fa-table"></i><span>Data Survey IKM</span></a>
                <a <?php if ($halaman == "grafik") { echo "class='nav-link active'";} ?> class="nav-link" href="#"><i class="fas fa-chart-bar"></i><span>Grafik Keseluruhan</span></a>

                <hr style="border: 1px solid white;width: 90%">

                <a <?php if ($halaman == "user") { echo "class='nav-link active'";} ?> class="nav-link" href="data-user.php"><i class="fas fa-user"></i><span>Pengguna Aplikasi</span></a>
                <a <?php if ($halaman == "satker") { echo "class='nav-link active'";} ?> class="nav-link" href="#"><i class="fas fa-cog"></i><span>Pengaturan Satuan Kerja</span></a>
            </li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>
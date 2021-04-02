<?php 
  function get_rekap($data, $hasil, $bulan){

    include("../koneksi.php");

    $year = date('Y');

    $var_no = 1;
    for ($month=1; $month < 13; $month++) { 

      $start_date = $year.'-'.$month.'-01 00:00:00';
      $end_date = $year.'-'.$month.'-31 23:59:59';

      $process_fi = "SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                    WHERE
                      ".$data."='".$hasil."' AND
                      tanggal BETWEEN '".$start_date."' AND '".$end_date."'";

      $exe_fi = mysqli_query($koneksi, $process_fi);
      $result_fi[$var_no] = mysqli_fetch_array($exe_fi);
      
      $var_no ++;
    }

    return $result_fi[$bulan]['rekapitulasi'];

  }

/*--------------------------------Fasilitas Informasi-----------------------------------*/
  echo 'Fasilitas informasi Sangat Puas <br/>';
  echo $chart_fisp_1 = get_rekap('fasilitas_informasi', 'Sangat Puas', 1); echo ' - ';
  echo $chart_fisp_2 = get_rekap('fasilitas_informasi', 'Sangat Puas', 2); echo ' - ';
  echo $chart_fisp_3 = get_rekap('fasilitas_informasi', 'Sangat Puas', 3); echo ' - ';
  echo $chart_fisp_4 = get_rekap('fasilitas_informasi', 'Sangat Puas', 4); echo ' - ';
  echo $chart_fisp_5 = get_rekap('fasilitas_informasi', 'Sangat Puas', 5); echo ' - ';
  echo $chart_fisp_6 = get_rekap('fasilitas_informasi', 'Sangat Puas', 6); echo ' - ';
  echo $chart_fisp_7 = get_rekap('fasilitas_informasi', 'Sangat Puas', 7); echo ' - ';
  echo $chart_fisp_8 = get_rekap('fasilitas_informasi', 'Sangat Puas', 8); echo ' - ';
  echo $chart_fisp_9 = get_rekap('fasilitas_informasi', 'Sangat Puas', 9); echo ' - ';
  echo $chart_fisp_10 = get_rekap('fasilitas_informasi', 'Sangat Puas', 10); echo ' - ';
  echo $chart_fisp_11 = get_rekap('fasilitas_informasi', 'Sangat Puas', 11); echo ' - ';
  echo $chart_fisp_12 = get_rekap('fasilitas_informasi', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas informasi Puas <br/>';
  echo $chart_fip_1 = get_rekap('fasilitas_informasi', 'Puas', 1); echo ' - ';
  echo $chart_fip_2 = get_rekap('fasilitas_informasi', 'Puas', 2); echo ' - ';
  echo $chart_fip_3 = get_rekap('fasilitas_informasi', 'Puas', 3); echo ' - ';
  echo $chart_fip_4 = get_rekap('fasilitas_informasi', 'Puas', 4); echo ' - ';
  echo $chart_fip_5 = get_rekap('fasilitas_informasi', 'Puas', 5); echo ' - ';
  echo $chart_fip_6 = get_rekap('fasilitas_informasi', 'Puas', 6); echo ' - ';
  echo $chart_fip_7 = get_rekap('fasilitas_informasi', 'Puas', 7); echo ' - ';
  echo $chart_fip_8 = get_rekap('fasilitas_informasi', 'Puas', 8); echo ' - ';
  echo $chart_fip_9 = get_rekap('fasilitas_informasi', 'Puas', 9); echo ' - ';
  echo $chart_fip_10 = get_rekap('fasilitas_informasi', 'Puas', 10); echo ' - ';
  echo $chart_fip_11 = get_rekap('fasilitas_informasi', 'Puas', 11); echo ' - ';
  echo $chart_fip_12 = get_rekap('fasilitas_informasi', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas informasi Cukup Puas <br/>';
  echo $chart_ficp_1 = get_rekap('fasilitas_informasi', 'Cukup Puas', 1); echo ' - ';
  echo $chart_ficp_2 = get_rekap('fasilitas_informasi', 'Cukup Puas', 2); echo ' - ';
  echo $chart_ficp_3 = get_rekap('fasilitas_informasi', 'Cukup Puas', 3); echo ' - ';
  echo $chart_ficp_4 = get_rekap('fasilitas_informasi', 'Cukup Puas', 4); echo ' - ';
  echo $chart_ficp_5 = get_rekap('fasilitas_informasi', 'Cukup Puas', 5); echo ' - ';
  echo $chart_ficp_6 = get_rekap('fasilitas_informasi', 'Cukup Puas', 6); echo ' - ';
  echo $chart_ficp_7 = get_rekap('fasilitas_informasi', 'Cukup Puas', 7); echo ' - ';
  echo $chart_ficp_8 = get_rekap('fasilitas_informasi', 'Cukup Puas', 8); echo ' - ';
  echo $chart_ficp_9 = get_rekap('fasilitas_informasi', 'Cukup Puas', 9); echo ' - ';
  echo $chart_ficp_10 = get_rekap('fasilitas_informasi', 'Cukup Puas', 10); echo ' - ';
  echo $chart_ficp_11 = get_rekap('fasilitas_informasi', 'Cukup Puas', 11); echo ' - ';
  echo $chart_ficp_12 = get_rekap('fasilitas_informasi', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas informasi Kurang Puas <br/>';
  echo $chart_fikp_1 = get_rekap('fasilitas_informasi', 'Kurang Puas', 1); echo ' - ';
  echo $chart_fikp_2 = get_rekap('fasilitas_informasi', 'Kurang Puas', 2); echo ' - ';
  echo $chart_fikp_3 = get_rekap('fasilitas_informasi', 'Kurang Puas', 3); echo ' - ';
  echo $chart_fikp_4 = get_rekap('fasilitas_informasi', 'Kurang Puas', 4); echo ' - ';
  echo $chart_fikp_5 = get_rekap('fasilitas_informasi', 'Kurang Puas', 5); echo ' - ';
  echo $chart_fikp_6 = get_rekap('fasilitas_informasi', 'Kurang Puas', 6); echo ' - ';
  echo $chart_fikp_7 = get_rekap('fasilitas_informasi', 'Kurang Puas', 7); echo ' - ';
  echo $chart_fikp_8 = get_rekap('fasilitas_informasi', 'Kurang Puas', 8); echo ' - ';
  echo $chart_fikp_9 = get_rekap('fasilitas_informasi', 'Kurang Puas', 9); echo ' - ';
  echo $chart_fikp_10 = get_rekap('fasilitas_informasi', 'Kurang Puas', 10); echo ' - ';
  echo $chart_fikp_11 = get_rekap('fasilitas_informasi', 'Kurang Puas', 11); echo ' - ';
  echo $chart_fikp_12 = get_rekap('fasilitas_informasi', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Fasilitas toilet sangat puas<br/>';
  echo $chart_ftsp_1 = get_rekap('fasilitas_toilet', 'Sangat Puas', 1); echo ' - ';
  echo $chart_ftsp_2 = get_rekap('fasilitas_toilet', 'Sangat Puas', 2); echo ' - ';
  echo $chart_ftsp_3 = get_rekap('fasilitas_toilet', 'Sangat Puas', 3); echo ' - ';
  echo $chart_ftsp_4 = get_rekap('fasilitas_toilet', 'Sangat Puas', 4); echo ' - ';
  echo $chart_ftsp_5 = get_rekap('fasilitas_toilet', 'Sangat Puas', 5); echo ' - ';
  echo $chart_ftsp_6 = get_rekap('fasilitas_toilet', 'Sangat Puas', 6); echo ' - ';
  echo $chart_ftsp_7 = get_rekap('fasilitas_toilet', 'Sangat Puas', 7); echo ' - ';
  echo $chart_ftsp_8 = get_rekap('fasilitas_toilet', 'Sangat Puas', 8); echo ' - ';
  echo $chart_ftsp_9 = get_rekap('fasilitas_toilet', 'Sangat Puas', 9); echo ' - ';
  echo $chart_ftsp_10 = get_rekap('fasilitas_toilet', 'Sangat Puas', 10); echo ' - ';
  echo $chart_ftsp_11 = get_rekap('fasilitas_toilet', 'Sangat Puas', 11); echo ' - ';
  echo $chart_ftsp_12 = get_rekap('fasilitas_toilet', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas toilet puas<br/>';
  echo $chart_ftp_1 = get_rekap('fasilitas_toilet', 'Puas', 1); echo ' - ';
  echo $chart_ftp_2 = get_rekap('fasilitas_toilet', 'Puas', 2); echo ' - ';
  echo $chart_ftp_3 = get_rekap('fasilitas_toilet', 'Puas', 3); echo ' - ';
  echo $chart_ftp_4 = get_rekap('fasilitas_toilet', 'Puas', 4); echo ' - ';
  echo $chart_ftp_5 = get_rekap('fasilitas_toilet', 'Puas', 5); echo ' - ';
  echo $chart_ftp_6 = get_rekap('fasilitas_toilet', 'Puas', 6); echo ' - ';
  echo $chart_ftp_7 = get_rekap('fasilitas_toilet', 'Puas', 7); echo ' - ';
  echo $chart_ftp_8 = get_rekap('fasilitas_toilet', 'Puas', 8); echo ' - ';
  echo $chart_ftp_9 = get_rekap('fasilitas_toilet', 'Puas', 9); echo ' - ';
  echo $chart_ftp_10 = get_rekap('fasilitas_toilet', 'Puas', 10); echo ' - ';
  echo $chart_ftp_11 = get_rekap('fasilitas_toilet', 'Puas', 11); echo ' - ';
  echo $chart_ftp_12 = get_rekap('fasilitas_toilet', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas toilet cukup puas<br/>';
  echo $chart_ftcp_1 = get_rekap('fasilitas_toilet', 'Cukup Puas', 1); echo ' - ';
  echo $chart_ftcp_2 = get_rekap('fasilitas_toilet', 'Cukup Puas', 2); echo ' - ';
  echo $chart_ftcp_3 = get_rekap('fasilitas_toilet', 'Cukup Puas', 3); echo ' - ';
  echo $chart_ftcp_4 = get_rekap('fasilitas_toilet', 'Cukup Puas', 4); echo ' - ';
  echo $chart_ftcp_5 = get_rekap('fasilitas_toilet', 'Cukup Puas', 5); echo ' - ';
  echo $chart_ftcp_6 = get_rekap('fasilitas_toilet', 'Cukup Puas', 6); echo ' - ';
  echo $chart_ftcp_7 = get_rekap('fasilitas_toilet', 'Cukup Puas', 7); echo ' - ';
  echo $chart_ftcp_8 = get_rekap('fasilitas_toilet', 'Cukup Puas', 8); echo ' - ';
  echo $chart_ftcp_9 = get_rekap('fasilitas_toilet', 'Cukup Puas', 9); echo ' - ';
  echo $chart_ftcp_10 = get_rekap('fasilitas_toilet', 'Cukup Puas', 10); echo ' - ';
  echo $chart_ftcp_11 = get_rekap('fasilitas_toilet', 'Cukup Puas', 11); echo ' - ';
  echo $chart_ftcp_12 = get_rekap('fasilitas_toilet', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas toilet Kurang Puas<br/>';
  echo $chart_ftkp_1 = get_rekap('fasilitas_toilet', 'Kurang Puas', 1); echo ' - ';
  echo $chart_ftkp_2 = get_rekap('fasilitas_toilet', 'Kurang Puas', 2); echo ' - ';
  echo $chart_ftkp_3 = get_rekap('fasilitas_toilet', 'Kurang Puas', 3); echo ' - ';
  echo $chart_ftkp_4 = get_rekap('fasilitas_toilet', 'Kurang Puas', 4); echo ' - ';
  echo $chart_ftkp_5 = get_rekap('fasilitas_toilet', 'Kurang Puas', 5); echo ' - ';
  echo $chart_ftkp_6 = get_rekap('fasilitas_toilet', 'Kurang Puas', 6); echo ' - ';
  echo $chart_ftkp_7 = get_rekap('fasilitas_toilet', 'Kurang Puas', 7); echo ' - ';
  echo $chart_ftkp_8 = get_rekap('fasilitas_toilet', 'Kurang Puas', 8); echo ' - ';
  echo $chart_ftkp_9 = get_rekap('fasilitas_toilet', 'Kurang Puas', 9); echo ' - ';
  echo $chart_ftkp_10 = get_rekap('fasilitas_toilet', 'Kurang Puas', 10); echo ' - ';
  echo $chart_ftkp_11 = get_rekap('fasilitas_toilet', 'Kurang Puas', 11); echo ' - ';
  echo $chart_ftkp_12 = get_rekap('fasilitas_toilet', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Parkir Kendaraan sangat puas<br/>';
  echo $chart_pksp_1 = get_rekap('parkir_kendaraan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_pksp_2 = get_rekap('parkir_kendaraan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_pksp_3 = get_rekap('parkir_kendaraan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_pksp_4 = get_rekap('parkir_kendaraan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_pksp_5 = get_rekap('parkir_kendaraan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_pksp_6 = get_rekap('parkir_kendaraan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_pksp_7 = get_rekap('parkir_kendaraan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_pksp_8 = get_rekap('parkir_kendaraan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_pksp_9 = get_rekap('parkir_kendaraan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_pksp_10 = get_rekap('parkir_kendaraan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_pksp_11 = get_rekap('parkir_kendaraan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_pksp_12 = get_rekap('parkir_kendaraan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Parkir Kendaraan puas<br/>';
  echo $chart_pkp_1 = get_rekap('parkir_kendaraan', 'Puas', 1); echo ' - ';
  echo $chart_pkp_2 = get_rekap('parkir_kendaraan', 'Puas', 2); echo ' - ';
  echo $chart_pkp_3 = get_rekap('parkir_kendaraan', 'Puas', 3); echo ' - ';
  echo $chart_pkp_4 = get_rekap('parkir_kendaraan', 'Puas', 4); echo ' - ';
  echo $chart_pkp_5 = get_rekap('parkir_kendaraan', 'Puas', 5); echo ' - ';
  echo $chart_pkp_6 = get_rekap('parkir_kendaraan', 'Puas', 6); echo ' - ';
  echo $chart_pkp_7 = get_rekap('parkir_kendaraan', 'Puas', 7); echo ' - ';
  echo $chart_pkp_8 = get_rekap('parkir_kendaraan', 'Puas', 8); echo ' - ';
  echo $chart_pkp_9 = get_rekap('parkir_kendaraan', 'Puas', 9); echo ' - ';
  echo $chart_pkp_10 = get_rekap('parkir_kendaraan', 'Puas', 10); echo ' - ';
  echo $chart_pkp_11 = get_rekap('parkir_kendaraan', 'Puas', 11); echo ' - ';
  echo $chart_pkp_12 = get_rekap('parkir_kendaraan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Parkir Kendaraan cukup puas<br/>';
  echo $chart_pkcp_1 = get_rekap('parkir_kendaraan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_pkcp_2 = get_rekap('parkir_kendaraan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_pkcp_3 = get_rekap('parkir_kendaraan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_pkcp_4 = get_rekap('parkir_kendaraan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_pkcp_5 = get_rekap('parkir_kendaraan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_pkcp_6 = get_rekap('parkir_kendaraan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_pkcp_7 = get_rekap('parkir_kendaraan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_pkcp_8 = get_rekap('parkir_kendaraan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_pkcp_9 = get_rekap('parkir_kendaraan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_pkcp_10 = get_rekap('parkir_kendaraan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_pkcp_11 = get_rekap('parkir_kendaraan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_pkcp_12 = get_rekap('parkir_kendaraan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Parkir Kendaraan Kurang Puas<br/>';
  echo $chart_pkkp_1 = get_rekap('parkir_kendaraan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pkkp_2 = get_rekap('parkir_kendaraan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pkkp_3 = get_rekap('parkir_kendaraan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pkkp_4 = get_rekap('parkir_kendaraan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pkkp_5 = get_rekap('parkir_kendaraan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pkkp_6 = get_rekap('parkir_kendaraan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pkkp_7 = get_rekap('parkir_kendaraan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pkkp_8 = get_rekap('parkir_kendaraan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pkkp_9 = get_rekap('parkir_kendaraan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pkkp_10 = get_rekap('parkir_kendaraan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pkkp_11 = get_rekap('parkir_kendaraan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pkkp_12 = get_rekap('parkir_kendaraan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Kebersihan sangat puas<br/>';
  echo $chart_ksp_1 = get_rekap('kebersihan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_ksp_2 = get_rekap('kebersihan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_ksp_3 = get_rekap('kebersihan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_ksp_4 = get_rekap('kebersihan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_ksp_5 = get_rekap('kebersihan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_ksp_6 = get_rekap('kebersihan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_ksp_7 = get_rekap('kebersihan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_ksp_8 = get_rekap('kebersihan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_ksp_9 = get_rekap('kebersihan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_ksp_10 = get_rekap('kebersihan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_ksp_11 = get_rekap('kebersihan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_ksp_12 = get_rekap('kebersihan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Kebersihan puas<br/>';
  echo $chart_kp_1 = get_rekap('kebersihan', 'Puas', 1); echo ' - ';
  echo $chart_kp_2 = get_rekap('kebersihan', 'Puas', 2); echo ' - ';
  echo $chart_kp_3 = get_rekap('kebersihan', 'Puas', 3); echo ' - ';
  echo $chart_kp_4 = get_rekap('kebersihan', 'Puas', 4); echo ' - ';
  echo $chart_kp_5 = get_rekap('kebersihan', 'Puas', 5); echo ' - ';
  echo $chart_kp_6 = get_rekap('kebersihan', 'Puas', 6); echo ' - ';
  echo $chart_kp_7 = get_rekap('kebersihan', 'Puas', 7); echo ' - ';
  echo $chart_kp_8 = get_rekap('kebersihan', 'Puas', 8); echo ' - ';
  echo $chart_kp_9 = get_rekap('kebersihan', 'Puas', 9); echo ' - ';
  echo $chart_kp_10 = get_rekap('kebersihan', 'Puas', 10); echo ' - ';
  echo $chart_kp_11 = get_rekap('kebersihan', 'Puas', 11); echo ' - ';
  echo $chart_kp_12 = get_rekap('kebersihan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Kebersihan cukup puas<br/>';
  echo $chart_kcp_1 = get_rekap('kebersihan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_kcp_2 = get_rekap('kebersihan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_kcp_3 = get_rekap('kebersihan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_kcp_4 = get_rekap('kebersihan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_kcp_5 = get_rekap('kebersihan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_kcp_6 = get_rekap('kebersihan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_kcp_7 = get_rekap('kebersihan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_kcp_8 = get_rekap('kebersihan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_kcp_9 = get_rekap('kebersihan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_kcp_10 = get_rekap('kebersihan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_kcp_11 = get_rekap('kebersihan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_kcp_12 = get_rekap('kebersihan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Kebersihan Kurang Puas<br/>';
  echo $chart_kkp_1 = get_rekap('kebersihan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_kkp_2 = get_rekap('kebersihan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_kkp_3 = get_rekap('kebersihan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_kkp_4 = get_rekap('kebersihan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_kkp_5 = get_rekap('kebersihan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_kkp_6 = get_rekap('kebersihan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_kkp_7 = get_rekap('kebersihan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_kkp_8 = get_rekap('kebersihan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_kkp_9 = get_rekap('kebersihan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_kkp_10 = get_rekap('kebersihan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_kkp_11 = get_rekap('kebersihan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_kkp_12 = get_rekap('kebersihan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'taman sangat puas<br/>';
  echo $chart_tsp_1 = get_rekap('taman', 'Sangat Puas', 1); echo ' - ';
  echo $chart_tsp_2 = get_rekap('taman', 'Sangat Puas', 2); echo ' - ';
  echo $chart_tsp_3 = get_rekap('taman', 'Sangat Puas', 3); echo ' - ';
  echo $chart_tsp_4 = get_rekap('taman', 'Sangat Puas', 4); echo ' - ';
  echo $chart_tsp_5 = get_rekap('taman', 'Sangat Puas', 5); echo ' - ';
  echo $chart_tsp_6 = get_rekap('taman', 'Sangat Puas', 6); echo ' - ';
  echo $chart_tsp_7 = get_rekap('taman', 'Sangat Puas', 7); echo ' - ';
  echo $chart_tsp_8 = get_rekap('taman', 'Sangat Puas', 8); echo ' - ';
  echo $chart_tsp_9 = get_rekap('taman', 'Sangat Puas', 9); echo ' - ';
  echo $chart_tsp_10 = get_rekap('taman', 'Sangat Puas', 10); echo ' - ';
  echo $chart_tsp_11 = get_rekap('taman', 'Sangat Puas', 11); echo ' - ';
  echo $chart_tsp_12 = get_rekap('taman', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'taman puas<br/>';
  echo $chart_tp_1 = get_rekap('taman', 'Puas', 1); echo ' - ';
  echo $chart_tp_2 = get_rekap('taman', 'Puas', 2); echo ' - ';
  echo $chart_tp_3 = get_rekap('taman', 'Puas', 3); echo ' - ';
  echo $chart_tp_4 = get_rekap('taman', 'Puas', 4); echo ' - ';
  echo $chart_tp_5 = get_rekap('taman', 'Puas', 5); echo ' - ';
  echo $chart_tp_6 = get_rekap('taman', 'Puas', 6); echo ' - ';
  echo $chart_tp_7 = get_rekap('taman', 'Puas', 7); echo ' - ';
  echo $chart_tp_8 = get_rekap('taman', 'Puas', 8); echo ' - ';
  echo $chart_tp_9 = get_rekap('taman', 'Puas', 9); echo ' - ';
  echo $chart_tp_10 = get_rekap('taman', 'Puas', 10); echo ' - ';
  echo $chart_tp_11 = get_rekap('taman', 'Puas', 11); echo ' - ';
  echo $chart_tp_12 = get_rekap('taman', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'taman cukup puas<br/>';
  echo $chart_tcp_1 = get_rekap('taman', 'Cukup Puas', 1); echo ' - ';
  echo $chart_tcp_2 = get_rekap('taman', 'Cukup Puas', 2); echo ' - ';
  echo $chart_tcp_3 = get_rekap('taman', 'Cukup Puas', 3); echo ' - ';
  echo $chart_tcp_4 = get_rekap('taman', 'Cukup Puas', 4); echo ' - ';
  echo $chart_tcp_5 = get_rekap('taman', 'Cukup Puas', 5); echo ' - ';
  echo $chart_tcp_6 = get_rekap('taman', 'Cukup Puas', 6); echo ' - ';
  echo $chart_tcp_7 = get_rekap('taman', 'Cukup Puas', 7); echo ' - ';
  echo $chart_tcp_8 = get_rekap('taman', 'Cukup Puas', 8); echo ' - ';
  echo $chart_tcp_9 = get_rekap('taman', 'Cukup Puas', 9); echo ' - ';
  echo $chart_tcp_10 = get_rekap('taman', 'Cukup Puas', 10); echo ' - ';
  echo $chart_tcp_11 = get_rekap('taman', 'Cukup Puas', 11); echo ' - ';
  echo $chart_tcp_12 = get_rekap('taman', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'taman Kurang Puas<br/>';
  echo $chart_tkp_1 = get_rekap('taman', 'Kurang Puas', 1); echo ' - ';
  echo $chart_tkp_2 = get_rekap('taman', 'Kurang Puas', 2); echo ' - ';
  echo $chart_tkp_3 = get_rekap('taman', 'Kurang Puas', 3); echo ' - ';
  echo $chart_tkp_4 = get_rekap('taman', 'Kurang Puas', 4); echo ' - ';
  echo $chart_tkp_5 = get_rekap('taman', 'Kurang Puas', 5); echo ' - ';
  echo $chart_tkp_6 = get_rekap('taman', 'Kurang Puas', 6); echo ' - ';
  echo $chart_tkp_7 = get_rekap('taman', 'Kurang Puas', 7); echo ' - ';
  echo $chart_tkp_8 = get_rekap('taman', 'Kurang Puas', 8); echo ' - ';
  echo $chart_tkp_9 = get_rekap('taman', 'Kurang Puas', 9); echo ' - ';
  echo $chart_tkp_10 = get_rekap('taman', 'Kurang Puas', 10); echo ' - ';
  echo $chart_tkp_11 = get_rekap('taman', 'Kurang Puas', 11); echo ' - ';
  echo $chart_tkp_12 = get_rekap('taman', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'sarana ibadah sangat puas<br/>';
  echo $chart_sisp_1 = get_rekap('sarana_ibadah', 'Sangat Puas', 1); echo ' - ';
  echo $chart_sisp_2 = get_rekap('sarana_ibadah', 'Sangat Puas', 2); echo ' - ';
  echo $chart_sisp_3 = get_rekap('sarana_ibadah', 'Sangat Puas', 3); echo ' - ';
  echo $chart_sisp_4 = get_rekap('sarana_ibadah', 'Sangat Puas', 4); echo ' - ';
  echo $chart_sisp_5 = get_rekap('sarana_ibadah', 'Sangat Puas', 5); echo ' - ';
  echo $chart_sisp_6 = get_rekap('sarana_ibadah', 'Sangat Puas', 6); echo ' - ';
  echo $chart_sisp_7 = get_rekap('sarana_ibadah', 'Sangat Puas', 7); echo ' - ';
  echo $chart_sisp_8 = get_rekap('sarana_ibadah', 'Sangat Puas', 8); echo ' - ';
  echo $chart_sisp_9 = get_rekap('sarana_ibadah', 'Sangat Puas', 9); echo ' - ';
  echo $chart_sisp_10 = get_rekap('sarana_ibadah', 'Sangat Puas', 10); echo ' - ';
  echo $chart_sisp_11 = get_rekap('sarana_ibadah', 'Sangat Puas', 11); echo ' - ';
  echo $chart_sisp_12 = get_rekap('sarana_ibadah', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'sarana ibadah puas<br/>';
  echo $chart_sip_1 = get_rekap('sarana_ibadah', 'Puas', 1); echo ' - ';
  echo $chart_sip_2 = get_rekap('sarana_ibadah', 'Puas', 2); echo ' - ';
  echo $chart_sip_3 = get_rekap('sarana_ibadah', 'Puas', 3); echo ' - ';
  echo $chart_sip_4 = get_rekap('sarana_ibadah', 'Puas', 4); echo ' - ';
  echo $chart_sip_5 = get_rekap('sarana_ibadah', 'Puas', 5); echo ' - ';
  echo $chart_sip_6 = get_rekap('sarana_ibadah', 'Puas', 6); echo ' - ';
  echo $chart_sip_7 = get_rekap('sarana_ibadah', 'Puas', 7); echo ' - ';
  echo $chart_sip_8 = get_rekap('sarana_ibadah', 'Puas', 8); echo ' - ';
  echo $chart_sip_9 = get_rekap('sarana_ibadah', 'Puas', 9); echo ' - ';
  echo $chart_sip_10 = get_rekap('sarana_ibadah', 'Puas', 10); echo ' - ';
  echo $chart_sip_11 = get_rekap('sarana_ibadah', 'Puas', 11); echo ' - ';
  echo $chart_sip_12 = get_rekap('sarana_ibadah', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'sarana ibadah cukup puas<br/>';
  echo $chart_sicp_1 = get_rekap('sarana_ibadah', 'Cukup Puas', 1); echo ' - ';
  echo $chart_sicp_2 = get_rekap('sarana_ibadah', 'Cukup Puas', 2); echo ' - ';
  echo $chart_sicp_3 = get_rekap('sarana_ibadah', 'Cukup Puas', 3); echo ' - ';
  echo $chart_sicp_4 = get_rekap('sarana_ibadah', 'Cukup Puas', 4); echo ' - ';
  echo $chart_sicp_5 = get_rekap('sarana_ibadah', 'Cukup Puas', 5); echo ' - ';
  echo $chart_sicp_6 = get_rekap('sarana_ibadah', 'Cukup Puas', 6); echo ' - ';
  echo $chart_sicp_7 = get_rekap('sarana_ibadah', 'Cukup Puas', 7); echo ' - ';
  echo $chart_sicp_8 = get_rekap('sarana_ibadah', 'Cukup Puas', 8); echo ' - ';
  echo $chart_sicp_9 = get_rekap('sarana_ibadah', 'Cukup Puas', 9); echo ' - ';
  echo $chart_sicp_10 = get_rekap('sarana_ibadah', 'Cukup Puas', 10); echo ' - ';
  echo $chart_sicp_11 = get_rekap('sarana_ibadah', 'Cukup Puas', 11); echo ' - ';
  echo $chart_sicp_12 = get_rekap('sarana_ibadah', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'sarana ibadah Kurang Puas<br/>';
  echo $chart_sikp_1 = get_rekap('sarana_ibadah', 'Kurang Puas', 1); echo ' - ';
  echo $chart_sikp_2 = get_rekap('sarana_ibadah', 'Kurang Puas', 2); echo ' - ';
  echo $chart_sikp_3 = get_rekap('sarana_ibadah', 'Kurang Puas', 3); echo ' - ';
  echo $chart_sikp_4 = get_rekap('sarana_ibadah', 'Kurang Puas', 4); echo ' - ';
  echo $chart_sikp_5 = get_rekap('sarana_ibadah', 'Kurang Puas', 5); echo ' - ';
  echo $chart_sikp_6 = get_rekap('sarana_ibadah', 'Kurang Puas', 6); echo ' - ';
  echo $chart_sikp_7 = get_rekap('sarana_ibadah', 'Kurang Puas', 7); echo ' - ';
  echo $chart_sikp_8 = get_rekap('sarana_ibadah', 'Kurang Puas', 8); echo ' - ';
  echo $chart_sikp_9 = get_rekap('sarana_ibadah', 'Kurang Puas', 9); echo ' - ';
  echo $chart_sikp_10 = get_rekap('sarana_ibadah', 'Kurang Puas', 10); echo ' - ';
  echo $chart_sikp_11 = get_rekap('sarana_ibadah', 'Kurang Puas', 11); echo ' - ';
  echo $chart_sikp_12 = get_rekap('sarana_ibadah', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Ruang Tunggu sangat puas<br/>';
  echo $chart_rtsp_1 = get_rekap('ruang_tunggu', 'Sangat Puas', 1); echo ' - ';
  echo $chart_rtsp_2 = get_rekap('ruang_tunggu', 'Sangat Puas', 2); echo ' - ';
  echo $chart_rtsp_3 = get_rekap('ruang_tunggu', 'Sangat Puas', 3); echo ' - ';
  echo $chart_rtsp_4 = get_rekap('ruang_tunggu', 'Sangat Puas', 4); echo ' - ';
  echo $chart_rtsp_5 = get_rekap('ruang_tunggu', 'Sangat Puas', 5); echo ' - ';
  echo $chart_rtsp_6 = get_rekap('ruang_tunggu', 'Sangat Puas', 6); echo ' - ';
  echo $chart_rtsp_7 = get_rekap('ruang_tunggu', 'Sangat Puas', 7); echo ' - ';
  echo $chart_rtsp_8 = get_rekap('ruang_tunggu', 'Sangat Puas', 8); echo ' - ';
  echo $chart_rtsp_9 = get_rekap('ruang_tunggu', 'Sangat Puas', 9); echo ' - ';
  echo $chart_rtsp_10 = get_rekap('ruang_tunggu', 'Sangat Puas', 10); echo ' - ';
  echo $chart_rtsp_11 = get_rekap('ruang_tunggu', 'Sangat Puas', 11); echo ' - ';
  echo $chart_rtsp_12 = get_rekap('ruang_tunggu', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Ruang Tunggu puas<br/>';
  echo $chart_rtp_1 = get_rekap('ruang_tunggu', 'Puas', 1); echo ' - ';
  echo $chart_rtp_2 = get_rekap('ruang_tunggu', 'Puas', 2); echo ' - ';
  echo $chart_rtp_3 = get_rekap('ruang_tunggu', 'Puas', 3); echo ' - ';
  echo $chart_rtp_4 = get_rekap('ruang_tunggu', 'Puas', 4); echo ' - ';
  echo $chart_rtp_5 = get_rekap('ruang_tunggu', 'Puas', 5); echo ' - ';
  echo $chart_rtp_6 = get_rekap('ruang_tunggu', 'Puas', 6); echo ' - ';
  echo $chart_rtp_7 = get_rekap('ruang_tunggu', 'Puas', 7); echo ' - ';
  echo $chart_rtp_8 = get_rekap('ruang_tunggu', 'Puas', 8); echo ' - ';
  echo $chart_rtp_9 = get_rekap('ruang_tunggu', 'Puas', 9); echo ' - ';
  echo $chart_rtp_10 = get_rekap('ruang_tunggu', 'Puas', 10); echo ' - ';
  echo $chart_rtp_11 = get_rekap('ruang_tunggu', 'Puas', 11); echo ' - ';
  echo $chart_rtp_12 = get_rekap('ruang_tunggu', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Ruang Tunggu cukup puas<br/>';
  echo $chart_rtcp_1 = get_rekap('ruang_tunggu', 'Cukup Puas', 1); echo ' - ';
  echo $chart_rtcp_2 = get_rekap('ruang_tunggu', 'Cukup Puas', 2); echo ' - ';
  echo $chart_rtcp_3 = get_rekap('ruang_tunggu', 'Cukup Puas', 3); echo ' - ';
  echo $chart_rtcp_4 = get_rekap('ruang_tunggu', 'Cukup Puas', 4); echo ' - ';
  echo $chart_rtcp_5 = get_rekap('ruang_tunggu', 'Cukup Puas', 5); echo ' - ';
  echo $chart_rtcp_6 = get_rekap('ruang_tunggu', 'Cukup Puas', 6); echo ' - ';
  echo $chart_rtcp_7 = get_rekap('ruang_tunggu', 'Cukup Puas', 7); echo ' - ';
  echo $chart_rtcp_8 = get_rekap('ruang_tunggu', 'Cukup Puas', 8); echo ' - ';
  echo $chart_rtcp_9 = get_rekap('ruang_tunggu', 'Cukup Puas', 9); echo ' - ';
  echo $chart_rtcp_10 = get_rekap('ruang_tunggu', 'Cukup Puas', 10); echo ' - ';
  echo $chart_rtcp_11 = get_rekap('ruang_tunggu', 'Cukup Puas', 11); echo ' - ';
  echo $chart_rtcp_12 = get_rekap('ruang_tunggu', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Ruang Tunggu Kurang Puas<br/>';
  echo $chart_rtkp_1 = get_rekap('ruang_tunggu', 'Kurang Puas', 1); echo ' - ';
  echo $chart_rtkp_2 = get_rekap('ruang_tunggu', 'Kurang Puas', 2); echo ' - ';
  echo $chart_rtkp_3 = get_rekap('ruang_tunggu', 'Kurang Puas', 3); echo ' - ';
  echo $chart_rtkp_4 = get_rekap('ruang_tunggu', 'Kurang Puas', 4); echo ' - ';
  echo $chart_rtkp_5 = get_rekap('ruang_tunggu', 'Kurang Puas', 5); echo ' - ';
  echo $chart_rtkp_6 = get_rekap('ruang_tunggu', 'Kurang Puas', 6); echo ' - ';
  echo $chart_rtkp_7 = get_rekap('ruang_tunggu', 'Kurang Puas', 7); echo ' - ';
  echo $chart_rtkp_8 = get_rekap('ruang_tunggu', 'Kurang Puas', 8); echo ' - ';
  echo $chart_rtkp_9 = get_rekap('ruang_tunggu', 'Kurang Puas', 9); echo ' - ';
  echo $chart_rtkp_10 = get_rekap('ruang_tunggu', 'Kurang Puas', 10); echo ' - ';
  echo $chart_rtkp_11 = get_rekap('ruang_tunggu', 'Kurang Puas', 11); echo ' - ';
  echo $chart_rtkp_12 = get_rekap('ruang_tunggu', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Sistem Pembayaran sangat puas<br/>';
  echo $chart_spsp_1 = get_rekap('sistem_pembayaran', 'Sangat Puas', 1); echo ' - ';
  echo $chart_spsp_2 = get_rekap('sistem_pembayaran', 'Sangat Puas', 2); echo ' - ';
  echo $chart_spsp_3 = get_rekap('sistem_pembayaran', 'Sangat Puas', 3); echo ' - ';
  echo $chart_spsp_4 = get_rekap('sistem_pembayaran', 'Sangat Puas', 4); echo ' - ';
  echo $chart_spsp_5 = get_rekap('sistem_pembayaran', 'Sangat Puas', 5); echo ' - ';
  echo $chart_spsp_6 = get_rekap('sistem_pembayaran', 'Sangat Puas', 6); echo ' - ';
  echo $chart_spsp_7 = get_rekap('sistem_pembayaran', 'Sangat Puas', 7); echo ' - ';
  echo $chart_spsp_8 = get_rekap('sistem_pembayaran', 'Sangat Puas', 8); echo ' - ';
  echo $chart_spsp_9 = get_rekap('sistem_pembayaran', 'Sangat Puas', 9); echo ' - ';
  echo $chart_spsp_10 = get_rekap('sistem_pembayaran', 'Sangat Puas', 10); echo ' - ';
  echo $chart_spsp_11 = get_rekap('sistem_pembayaran', 'Sangat Puas', 11); echo ' - ';
  echo $chart_spsp_12 = get_rekap('sistem_pembayaran', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Sistem Pembayaran puas<br/>';
  echo $chart_spp_1 = get_rekap('sistem_pembayaran', 'Puas', 1); echo ' - ';
  echo $chart_spp_2 = get_rekap('sistem_pembayaran', 'Puas', 2); echo ' - ';
  echo $chart_spp_3 = get_rekap('sistem_pembayaran', 'Puas', 3); echo ' - ';
  echo $chart_spp_4 = get_rekap('sistem_pembayaran', 'Puas', 4); echo ' - ';
  echo $chart_spp_5 = get_rekap('sistem_pembayaran', 'Puas', 5); echo ' - ';
  echo $chart_spp_6 = get_rekap('sistem_pembayaran', 'Puas', 6); echo ' - ';
  echo $chart_spp_7 = get_rekap('sistem_pembayaran', 'Puas', 7); echo ' - ';
  echo $chart_spp_8 = get_rekap('sistem_pembayaran', 'Puas', 8); echo ' - ';
  echo $chart_spp_9 = get_rekap('sistem_pembayaran', 'Puas', 9); echo ' - ';
  echo $chart_spp_10 = get_rekap('sistem_pembayaran', 'Puas', 10); echo ' - ';
  echo $chart_spp_11 = get_rekap('sistem_pembayaran', 'Puas', 11); echo ' - ';
  echo $chart_spp_12 = get_rekap('sistem_pembayaran', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Sistem Pembayaran cukup puas<br/>';
  echo $chart_spcp_1 = get_rekap('sistem_pembayaran', 'Cukup Puas', 1); echo ' - ';
  echo $chart_spcp_2 = get_rekap('sistem_pembayaran', 'Cukup Puas', 2); echo ' - ';
  echo $chart_spcp_3 = get_rekap('sistem_pembayaran', 'Cukup Puas', 3); echo ' - ';
  echo $chart_spcp_4 = get_rekap('sistem_pembayaran', 'Cukup Puas', 4); echo ' - ';
  echo $chart_spcp_5 = get_rekap('sistem_pembayaran', 'Cukup Puas', 5); echo ' - ';
  echo $chart_spcp_6 = get_rekap('sistem_pembayaran', 'Cukup Puas', 6); echo ' - ';
  echo $chart_spcp_7 = get_rekap('sistem_pembayaran', 'Cukup Puas', 7); echo ' - ';
  echo $chart_spcp_8 = get_rekap('sistem_pembayaran', 'Cukup Puas', 8); echo ' - ';
  echo $chart_spcp_9 = get_rekap('sistem_pembayaran', 'Cukup Puas', 9); echo ' - ';
  echo $chart_spcp_10 = get_rekap('sistem_pembayaran', 'Cukup Puas', 10); echo ' - ';
  echo $chart_spcp_11 = get_rekap('sistem_pembayaran', 'Cukup Puas', 11); echo ' - ';
  echo $chart_spcp_12 = get_rekap('sistem_pembayaran', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Sistem Pembayaran Kurang Puas<br/>';
  echo $chart_spkp_1 = get_rekap('sistem_pembayaran', 'Kurang Puas', 1); echo ' - ';
  echo $chart_spkp_2 = get_rekap('sistem_pembayaran', 'Kurang Puas', 2); echo ' - ';
  echo $chart_spkp_3 = get_rekap('sistem_pembayaran', 'Kurang Puas', 3); echo ' - ';
  echo $chart_spkp_4 = get_rekap('sistem_pembayaran', 'Kurang Puas', 4); echo ' - ';
  echo $chart_spkp_5 = get_rekap('sistem_pembayaran', 'Kurang Puas', 5); echo ' - ';
  echo $chart_spkp_6 = get_rekap('sistem_pembayaran', 'Kurang Puas', 6); echo ' - ';
  echo $chart_spkp_7 = get_rekap('sistem_pembayaran', 'Kurang Puas', 7); echo ' - ';
  echo $chart_spkp_8 = get_rekap('sistem_pembayaran', 'Kurang Puas', 8); echo ' - ';
  echo $chart_spkp_9 = get_rekap('sistem_pembayaran', 'Kurang Puas', 9); echo ' - ';
  echo $chart_spkp_10 = get_rekap('sistem_pembayaran', 'Kurang Puas', 10); echo ' - ';
  echo $chart_spkp_11 = get_rekap('sistem_pembayaran', 'Kurang Puas', 11); echo ' - ';
  echo $chart_spkp_12 = get_rekap('sistem_pembayaran', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pelayanan Pendaftaran sangat puas<br/>';
  echo $chart_ppsp_1 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 1); echo ' - ';
  echo $chart_ppsp_2 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 2); echo ' - ';
  echo $chart_ppsp_3 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 3); echo ' - ';
  echo $chart_ppsp_4 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 4); echo ' - ';
  echo $chart_ppsp_5 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 5); echo ' - ';
  echo $chart_ppsp_6 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 6); echo ' - ';
  echo $chart_ppsp_7 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 7); echo ' - ';
  echo $chart_ppsp_8 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 8); echo ' - ';
  echo $chart_ppsp_9 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 9); echo ' - ';
  echo $chart_ppsp_10 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 10); echo ' - ';
  echo $chart_ppsp_11 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 11); echo ' - ';
  echo $chart_ppsp_12 = get_rekap('pelayanan_pendaftaran', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Pendaftaran puas<br/>';
  echo $chart_ppp_1 = get_rekap('pelayanan_pendaftaran', 'Puas', 1); echo ' - ';
  echo $chart_ppp_2 = get_rekap('pelayanan_pendaftaran', 'Puas', 2); echo ' - ';
  echo $chart_ppp_3 = get_rekap('pelayanan_pendaftaran', 'Puas', 3); echo ' - ';
  echo $chart_ppp_4 = get_rekap('pelayanan_pendaftaran', 'Puas', 4); echo ' - ';
  echo $chart_ppp_5 = get_rekap('pelayanan_pendaftaran', 'Puas', 5); echo ' - ';
  echo $chart_ppp_6 = get_rekap('pelayanan_pendaftaran', 'Puas', 6); echo ' - ';
  echo $chart_ppp_7 = get_rekap('pelayanan_pendaftaran', 'Puas', 7); echo ' - ';
  echo $chart_ppp_8 = get_rekap('pelayanan_pendaftaran', 'Puas', 8); echo ' - ';
  echo $chart_ppp_9 = get_rekap('pelayanan_pendaftaran', 'Puas', 9); echo ' - ';
  echo $chart_ppp_10 = get_rekap('pelayanan_pendaftaran', 'Puas', 10); echo ' - ';
  echo $chart_ppp_11 = get_rekap('pelayanan_pendaftaran', 'Puas', 11); echo ' - ';
  echo $chart_ppp_12 = get_rekap('pelayanan_pendaftaran', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Pendaftaran cukup puas<br/>';
  echo $chart_ppcp_1 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 1); echo ' - ';
  echo $chart_ppcp_2 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 2); echo ' - ';
  echo $chart_ppcp_3 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 3); echo ' - ';
  echo $chart_ppcp_4 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 4); echo ' - ';
  echo $chart_ppcp_5 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 5); echo ' - ';
  echo $chart_ppcp_6 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 6); echo ' - ';
  echo $chart_ppcp_7 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 7); echo ' - ';
  echo $chart_ppcp_8 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 8); echo ' - ';
  echo $chart_ppcp_9 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 9); echo ' - ';
  echo $chart_ppcp_10 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 10); echo ' - ';
  echo $chart_ppcp_11 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 11); echo ' - ';
  echo $chart_ppcp_12 = get_rekap('pelayanan_pendaftaran', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Pendaftaran Kurang Puas<br/>';
  echo $chart_ppkp_1 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 1); echo ' - ';
  echo $chart_ppkp_2 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 2); echo ' - ';
  echo $chart_ppkp_3 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 3); echo ' - ';
  echo $chart_ppkp_4 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 4); echo ' - ';
  echo $chart_ppkp_5 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 5); echo ' - ';
  echo $chart_ppkp_6 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 6); echo ' - ';
  echo $chart_ppkp_7 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 7); echo ' - ';
  echo $chart_ppkp_8 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 8); echo ' - ';
  echo $chart_ppkp_9 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 9); echo ' - ';
  echo $chart_ppkp_10 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 10); echo ' - ';
  echo $chart_ppkp_11 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 11); echo ' - ';
  echo $chart_ppkp_12 = get_rekap('pelayanan_pendaftaran', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Persiapan Persidangan sangat puas<br/>';
  echo $chart_ppersp_1 = get_rekap('persiapan_persidangan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_ppersp_2 = get_rekap('persiapan_persidangan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_ppersp_3 = get_rekap('persiapan_persidangan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_ppersp_4 = get_rekap('persiapan_persidangan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_ppersp_5 = get_rekap('persiapan_persidangan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_ppersp_6 = get_rekap('persiapan_persidangan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_ppersp_7 = get_rekap('persiapan_persidangan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_ppersp_8 = get_rekap('persiapan_persidangan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_ppersp_9 = get_rekap('persiapan_persidangan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_ppersp_10 = get_rekap('persiapan_persidangan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_ppersp_11 = get_rekap('persiapan_persidangan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_ppersp_12 = get_rekap('persiapan_persidangan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Persiapan Persidangan puas<br/>';
  echo $chart_pperp_1 = get_rekap('persiapan_persidangan', 'Puas', 1); echo ' - ';
  echo $chart_pperp_2 = get_rekap('persiapan_persidangan', 'Puas', 2); echo ' - ';
  echo $chart_pperp_3 = get_rekap('persiapan_persidangan', 'Puas', 3); echo ' - ';
  echo $chart_pperp_4 = get_rekap('persiapan_persidangan', 'Puas', 4); echo ' - ';
  echo $chart_pperp_5 = get_rekap('persiapan_persidangan', 'Puas', 5); echo ' - ';
  echo $chart_pperp_6 = get_rekap('persiapan_persidangan', 'Puas', 6); echo ' - ';
  echo $chart_pperp_7 = get_rekap('persiapan_persidangan', 'Puas', 7); echo ' - ';
  echo $chart_pperp_8 = get_rekap('persiapan_persidangan', 'Puas', 8); echo ' - ';
  echo $chart_pperp_9 = get_rekap('persiapan_persidangan', 'Puas', 9); echo ' - ';
  echo $chart_pperp_10 = get_rekap('persiapan_persidangan', 'Puas', 10); echo ' - ';
  echo $chart_pperp_11 = get_rekap('persiapan_persidangan', 'Puas', 11); echo ' - ';
  echo $chart_pperp_12 = get_rekap('persiapan_persidangan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Persiapan Persidangan cukup puas<br/>';
  echo $chart_ppercp_1 = get_rekap('persiapan_persidangan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_ppercp_2 = get_rekap('persiapan_persidangan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_ppercp_3 = get_rekap('persiapan_persidangan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_ppercp_4 = get_rekap('persiapan_persidangan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_ppercp_5 = get_rekap('persiapan_persidangan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_ppercp_6 = get_rekap('persiapan_persidangan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_ppercp_7 = get_rekap('persiapan_persidangan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_ppercp_8 = get_rekap('persiapan_persidangan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_ppercp_9 = get_rekap('persiapan_persidangan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_ppercp_10 = get_rekap('persiapan_persidangan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_ppercp_11 = get_rekap('persiapan_persidangan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_ppercp_12 = get_rekap('persiapan_persidangan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Persiapan Persidangan Kurang Puas<br/>';
  echo $chart_pperkp_1 = get_rekap('persiapan_persidangan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pperkp_2 = get_rekap('persiapan_persidangan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pperkp_3 = get_rekap('persiapan_persidangan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pperkp_4 = get_rekap('persiapan_persidangan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pperkp_5 = get_rekap('persiapan_persidangan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pperkp_6 = get_rekap('persiapan_persidangan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pperkp_7 = get_rekap('persiapan_persidangan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pperkp_8 = get_rekap('persiapan_persidangan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pperkp_9 = get_rekap('persiapan_persidangan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pperkp_10 = get_rekap('persiapan_persidangan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pperkp_11 = get_rekap('persiapan_persidangan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pperkp_12 = get_rekap('persiapan_persidangan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Fasilitas Ruang Sidang sangat puas<br/>';
  echo $chart_frssp_1 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 1); echo ' - ';
  echo $chart_frssp_2 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 2); echo ' - ';
  echo $chart_frssp_3 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 3); echo ' - ';
  echo $chart_frssp_4 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 4); echo ' - ';
  echo $chart_frssp_5 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 5); echo ' - ';
  echo $chart_frssp_6 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 6); echo ' - ';
  echo $chart_frssp_7 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 7); echo ' - ';
  echo $chart_frssp_8 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 8); echo ' - ';
  echo $chart_frssp_9 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 9); echo ' - ';
  echo $chart_frssp_10 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 10); echo ' - ';
  echo $chart_frssp_11 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 11); echo ' - ';
  echo $chart_frssp_12 = get_rekap('fasilitas_ruang_sidang', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas Ruang Sidang puas<br/>';
  echo $chart_frsp_1 = get_rekap('fasilitas_ruang_sidang', 'Puas', 1); echo ' - ';
  echo $chart_frsp_2 = get_rekap('fasilitas_ruang_sidang', 'Puas', 2); echo ' - ';
  echo $chart_frsp_3 = get_rekap('fasilitas_ruang_sidang', 'Puas', 3); echo ' - ';
  echo $chart_frsp_4 = get_rekap('fasilitas_ruang_sidang', 'Puas', 4); echo ' - ';
  echo $chart_frsp_5 = get_rekap('fasilitas_ruang_sidang', 'Puas', 5); echo ' - ';
  echo $chart_frsp_6 = get_rekap('fasilitas_ruang_sidang', 'Puas', 6); echo ' - ';
  echo $chart_frsp_7 = get_rekap('fasilitas_ruang_sidang', 'Puas', 7); echo ' - ';
  echo $chart_frsp_8 = get_rekap('fasilitas_ruang_sidang', 'Puas', 8); echo ' - ';
  echo $chart_frsp_9 = get_rekap('fasilitas_ruang_sidang', 'Puas', 9); echo ' - ';
  echo $chart_frsp_10 = get_rekap('fasilitas_ruang_sidang', 'Puas', 10); echo ' - ';
  echo $chart_frsp_11 = get_rekap('fasilitas_ruang_sidang', 'Puas', 11); echo ' - ';
  echo $chart_frsp_12 = get_rekap('fasilitas_ruang_sidang', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas Ruang Sidang cukup puas<br/>';
  echo $chart_frscp_1 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 1); echo ' - ';
  echo $chart_frscp_2 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 2); echo ' - ';
  echo $chart_frscp_3 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 3); echo ' - ';
  echo $chart_frscp_4 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 4); echo ' - ';
  echo $chart_frscp_5 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 5); echo ' - ';
  echo $chart_frscp_6 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 6); echo ' - ';
  echo $chart_frscp_7 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 7); echo ' - ';
  echo $chart_frscp_8 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 8); echo ' - ';
  echo $chart_frscp_9 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 9); echo ' - ';
  echo $chart_frscp_10 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 10); echo ' - ';
  echo $chart_frscp_11 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 11); echo ' - ';
  echo $chart_frscp_12 = get_rekap('fasilitas_ruang_sidang', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Fasilitas Ruang Sidang Kurang Puas<br/>';
  echo $chart_frskp_1 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 1); echo ' - ';
  echo $chart_frskp_2 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 2); echo ' - ';
  echo $chart_frskp_3 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 3); echo ' - ';
  echo $chart_frskp_4 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 4); echo ' - ';
  echo $chart_frskp_5 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 5); echo ' - ';
  echo $chart_frskp_6 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 6); echo ' - ';
  echo $chart_frskp_7 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 7); echo ' - ';
  echo $chart_frskp_8 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 8); echo ' - ';
  echo $chart_frskp_9 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 9); echo ' - ';
  echo $chart_frskp_10 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 10); echo ' - ';
  echo $chart_frskp_11 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 11); echo ' - ';
  echo $chart_frskp_12 = get_rekap('fasilitas_ruang_sidang', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Proses Persidangan sangat puas<br/>';
  echo $chart_propersp_1 = get_rekap('proses_persidangan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_propersp_2 = get_rekap('proses_persidangan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_propersp_3 = get_rekap('proses_persidangan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_propersp_4 = get_rekap('proses_persidangan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_propersp_5 = get_rekap('proses_persidangan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_propersp_6 = get_rekap('proses_persidangan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_propersp_7 = get_rekap('proses_persidangan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_propersp_8 = get_rekap('proses_persidangan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_propersp_9 = get_rekap('proses_persidangan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_propersp_10 = get_rekap('proses_persidangan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_propersp_11 = get_rekap('proses_persidangan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_propersp_12 = get_rekap('proses_persidangan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Proses Persidangan puas<br/>';
  echo $chart_properp_1 = get_rekap('proses_persidangan', 'Puas', 1); echo ' - ';
  echo $chart_properp_2 = get_rekap('proses_persidangan', 'Puas', 2); echo ' - ';
  echo $chart_properp_3 = get_rekap('proses_persidangan', 'Puas', 3); echo ' - ';
  echo $chart_properp_4 = get_rekap('proses_persidangan', 'Puas', 4); echo ' - ';
  echo $chart_properp_5 = get_rekap('proses_persidangan', 'Puas', 5); echo ' - ';
  echo $chart_properp_6 = get_rekap('proses_persidangan', 'Puas', 6); echo ' - ';
  echo $chart_properp_7 = get_rekap('proses_persidangan', 'Puas', 7); echo ' - ';
  echo $chart_properp_8 = get_rekap('proses_persidangan', 'Puas', 8); echo ' - ';
  echo $chart_properp_9 = get_rekap('proses_persidangan', 'Puas', 9); echo ' - ';
  echo $chart_properp_10 = get_rekap('proses_persidangan', 'Puas', 10); echo ' - ';
  echo $chart_properp_11 = get_rekap('proses_persidangan', 'Puas', 11); echo ' - ';
  echo $chart_properp_12 = get_rekap('proses_persidangan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Proses Persidangan cukup puas<br/>';
  echo $chart_propercp_1 = get_rekap('proses_persidangan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_propercp_2 = get_rekap('proses_persidangan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_propercp_3 = get_rekap('proses_persidangan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_propercp_4 = get_rekap('proses_persidangan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_propercp_5 = get_rekap('proses_persidangan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_propercp_6 = get_rekap('proses_persidangan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_propercp_7 = get_rekap('proses_persidangan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_propercp_8 = get_rekap('proses_persidangan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_propercp_9 = get_rekap('proses_persidangan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_propercp_10 = get_rekap('proses_persidangan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_propercp_11 = get_rekap('proses_persidangan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_propercp_12 = get_rekap('proses_persidangan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Proses Persidangan Kurang Puas<br/>';
  echo $chart_properkp_1 = get_rekap('proses_persidangan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_properkp_2 = get_rekap('proses_persidangan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_properkp_3 = get_rekap('proses_persidangan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_properkp_4 = get_rekap('proses_persidangan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_properkp_5 = get_rekap('proses_persidangan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_properkp_6 = get_rekap('proses_persidangan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_properkp_7 = get_rekap('proses_persidangan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_properkp_8 = get_rekap('proses_persidangan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_properkp_9 = get_rekap('proses_persidangan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_properkp_10 = get_rekap('proses_persidangan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_properkp_11 = get_rekap('proses_persidangan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_properkp_12 = get_rekap('proses_persidangan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Waktu Pemeriksaan sangat puas<br/>';
  echo $chart_wpsp_1 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_wpsp_2 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_wpsp_3 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_wpsp_4 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_wpsp_5 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_wpsp_6 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_wpsp_7 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_wpsp_8 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_wpsp_9 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_wpsp_10 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_wpsp_11 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_wpsp_12 = get_rekap('waktu_pemeriksaan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Waktu Pemeriksaan puas<br/>';
  echo $chart_wpp_1 = get_rekap('waktu_pemeriksaan', 'Puas', 1); echo ' - ';
  echo $chart_wpp_2 = get_rekap('waktu_pemeriksaan', 'Puas', 2); echo ' - ';
  echo $chart_wpp_3 = get_rekap('waktu_pemeriksaan', 'Puas', 3); echo ' - ';
  echo $chart_wpp_4 = get_rekap('waktu_pemeriksaan', 'Puas', 4); echo ' - ';
  echo $chart_wpp_5 = get_rekap('waktu_pemeriksaan', 'Puas', 5); echo ' - ';
  echo $chart_wpp_6 = get_rekap('waktu_pemeriksaan', 'Puas', 6); echo ' - ';
  echo $chart_wpp_7 = get_rekap('waktu_pemeriksaan', 'Puas', 7); echo ' - ';
  echo $chart_wpp_8 = get_rekap('waktu_pemeriksaan', 'Puas', 8); echo ' - ';
  echo $chart_wpp_9 = get_rekap('waktu_pemeriksaan', 'Puas', 9); echo ' - ';
  echo $chart_wpp_10 = get_rekap('waktu_pemeriksaan', 'Puas', 10); echo ' - ';
  echo $chart_wpp_11 = get_rekap('waktu_pemeriksaan', 'Puas', 11); echo ' - ';
  echo $chart_wpp_12 = get_rekap('waktu_pemeriksaan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Waktu Pemeriksaan cukup puas<br/>';
  echo $chart_wpcp_1 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_wpcp_2 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_wpcp_3 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_wpcp_4 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_wpcp_5 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_wpcp_6 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_wpcp_7 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_wpcp_8 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_wpcp_9 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_wpcp_10 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_wpcp_11 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_wpcp_12 = get_rekap('waktu_pemeriksaan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Waktu Pemeriksaan Kurang Puas<br/>';
  echo $chart_wpkp_1 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_wpkp_2 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_wpkp_3 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_wpkp_4 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_wpkp_5 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_wpkp_6 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_wpkp_7 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_wpkp_8 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_wpkp_9 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_wpkp_10 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_wpkp_11 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_wpkp_12 = get_rekap('waktu_pemeriksaan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pemeriksaan Setempat sangat puas<br/>';
  echo $chart_pssp_1 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 1); echo ' - ';
  echo $chart_pssp_2 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 2); echo ' - ';
  echo $chart_pssp_3 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 3); echo ' - ';
  echo $chart_pssp_4 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 4); echo ' - ';
  echo $chart_pssp_5 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 5); echo ' - ';
  echo $chart_pssp_6 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 6); echo ' - ';
  echo $chart_pssp_7 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 7); echo ' - ';
  echo $chart_pssp_8 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 8); echo ' - ';
  echo $chart_pssp_9 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 9); echo ' - ';
  echo $chart_pssp_10 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 10); echo ' - ';
  echo $chart_pssp_11 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 11); echo ' - ';
  echo $chart_pssp_12 = get_rekap('pemeriksaan_setempat', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pemeriksaan Setempat puas<br/>';
  echo $chart_psp_1 = get_rekap('pemeriksaan_setempat', 'Puas', 1); echo ' - ';
  echo $chart_psp_2 = get_rekap('pemeriksaan_setempat', 'Puas', 2); echo ' - ';
  echo $chart_psp_3 = get_rekap('pemeriksaan_setempat', 'Puas', 3); echo ' - ';
  echo $chart_psp_4 = get_rekap('pemeriksaan_setempat', 'Puas', 4); echo ' - ';
  echo $chart_psp_5 = get_rekap('pemeriksaan_setempat', 'Puas', 5); echo ' - ';
  echo $chart_psp_6 = get_rekap('pemeriksaan_setempat', 'Puas', 6); echo ' - ';
  echo $chart_psp_7 = get_rekap('pemeriksaan_setempat', 'Puas', 7); echo ' - ';
  echo $chart_psp_8 = get_rekap('pemeriksaan_setempat', 'Puas', 8); echo ' - ';
  echo $chart_psp_9 = get_rekap('pemeriksaan_setempat', 'Puas', 9); echo ' - ';
  echo $chart_psp_10 = get_rekap('pemeriksaan_setempat', 'Puas', 10); echo ' - ';
  echo $chart_psp_11 = get_rekap('pemeriksaan_setempat', 'Puas', 11); echo ' - ';
  echo $chart_psp_12 = get_rekap('pemeriksaan_setempat', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pemeriksaan Setempat cukup puas<br/>';
  echo $chart_pscp_1 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 1); echo ' - ';
  echo $chart_pscp_2 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 2); echo ' - ';
  echo $chart_pscp_3 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 3); echo ' - ';
  echo $chart_pscp_4 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 4); echo ' - ';
  echo $chart_pscp_5 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 5); echo ' - ';
  echo $chart_pscp_6 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 6); echo ' - ';
  echo $chart_pscp_7 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 7); echo ' - ';
  echo $chart_pscp_8 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 8); echo ' - ';
  echo $chart_pscp_9 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 9); echo ' - ';
  echo $chart_pscp_10 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 10); echo ' - ';
  echo $chart_pscp_11 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 11); echo ' - ';
  echo $chart_pscp_12 = get_rekap('pemeriksaan_setempat', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pemeriksaan Setempat Kurang Puas<br/>';
  echo $chart_pskp_1 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pskp_2 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pskp_3 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pskp_4 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pskp_5 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pskp_6 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pskp_7 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pskp_8 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pskp_9 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pskp_10 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pskp_11 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pskp_12 = get_rekap('pemeriksaan_setempat', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Profesionalitas Hakim sangat puas<br/>';
  echo $chart_phsp_1 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 1); echo ' - ';
  echo $chart_phsp_2 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 2); echo ' - ';
  echo $chart_phsp_3 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 3); echo ' - ';
  echo $chart_phsp_4 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 4); echo ' - ';
  echo $chart_phsp_5 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 5); echo ' - ';
  echo $chart_phsp_6 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 6); echo ' - ';
  echo $chart_phsp_7 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 7); echo ' - ';
  echo $chart_phsp_8 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 8); echo ' - ';
  echo $chart_phsp_9 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 9); echo ' - ';
  echo $chart_phsp_10 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 10); echo ' - ';
  echo $chart_phsp_11 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 11); echo ' - ';
  echo $chart_phsp_12 = get_rekap('profesionalitas_hakim', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Profesionalitas Hakim puas<br/>';
  echo $chart_php_1 = get_rekap('profesionalitas_hakim', 'Puas', 1); echo ' - ';
  echo $chart_php_2 = get_rekap('profesionalitas_hakim', 'Puas', 2); echo ' - ';
  echo $chart_php_3 = get_rekap('profesionalitas_hakim', 'Puas', 3); echo ' - ';
  echo $chart_php_4 = get_rekap('profesionalitas_hakim', 'Puas', 4); echo ' - ';
  echo $chart_php_5 = get_rekap('profesionalitas_hakim', 'Puas', 5); echo ' - ';
  echo $chart_php_6 = get_rekap('profesionalitas_hakim', 'Puas', 6); echo ' - ';
  echo $chart_php_7 = get_rekap('profesionalitas_hakim', 'Puas', 7); echo ' - ';
  echo $chart_php_8 = get_rekap('profesionalitas_hakim', 'Puas', 8); echo ' - ';
  echo $chart_php_9 = get_rekap('profesionalitas_hakim', 'Puas', 9); echo ' - ';
  echo $chart_php_10 = get_rekap('profesionalitas_hakim', 'Puas', 10); echo ' - ';
  echo $chart_php_11 = get_rekap('profesionalitas_hakim', 'Puas', 11); echo ' - ';
  echo $chart_php_12 = get_rekap('profesionalitas_hakim', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Profesionalitas Hakim cukup puas<br/>';
  echo $chart_phcp_1 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 1); echo ' - ';
  echo $chart_phcp_2 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 2); echo ' - ';
  echo $chart_phcp_3 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 3); echo ' - ';
  echo $chart_phcp_4 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 4); echo ' - ';
  echo $chart_phcp_5 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 5); echo ' - ';
  echo $chart_phcp_6 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 6); echo ' - ';
  echo $chart_phcp_7 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 7); echo ' - ';
  echo $chart_phcp_8 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 8); echo ' - ';
  echo $chart_phcp_9 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 9); echo ' - ';
  echo $chart_phcp_10 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 10); echo ' - ';
  echo $chart_phcp_11 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 11); echo ' - ';
  echo $chart_phcp_12 = get_rekap('profesionalitas_hakim', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Profesionalitas Hakim Kurang Puas<br/>';
  echo $chart_phkp_1 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 1); echo ' - ';
  echo $chart_phkp_2 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 2); echo ' - ';
  echo $chart_phkp_3 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 3); echo ' - ';
  echo $chart_phkp_4 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 4); echo ' - ';
  echo $chart_phkp_5 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 5); echo ' - ';
  echo $chart_phkp_6 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 6); echo ' - ';
  echo $chart_phkp_7 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 7); echo ' - ';
  echo $chart_phkp_8 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 8); echo ' - ';
  echo $chart_phkp_9 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 9); echo ' - ';
  echo $chart_phkp_10 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 10); echo ' - ';
  echo $chart_phkp_11 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 11); echo ' - ';
  echo $chart_phkp_12 = get_rekap('profesionalitas_hakim', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pemberian Salinan Putusan sangat puas<br/>';
  echo $chart_pspsp_1 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_pspsp_2 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_pspsp_3 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_pspsp_4 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_pspsp_5 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_pspsp_6 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_pspsp_7 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_pspsp_8 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_pspsp_9 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_pspsp_10 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_pspsp_11 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_pspsp_12 = get_rekap('pemberian_salinan_putusan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pemberian Salinan Putusan puas<br/>';
  echo $chart_pspp_1 = get_rekap('pemberian_salinan_putusan', 'Puas', 1); echo ' - ';
  echo $chart_pspp_2 = get_rekap('pemberian_salinan_putusan', 'Puas', 2); echo ' - ';
  echo $chart_pspp_3 = get_rekap('pemberian_salinan_putusan', 'Puas', 3); echo ' - ';
  echo $chart_pspp_4 = get_rekap('pemberian_salinan_putusan', 'Puas', 4); echo ' - ';
  echo $chart_pspp_5 = get_rekap('pemberian_salinan_putusan', 'Puas', 5); echo ' - ';
  echo $chart_pspp_6 = get_rekap('pemberian_salinan_putusan', 'Puas', 6); echo ' - ';
  echo $chart_pspp_7 = get_rekap('pemberian_salinan_putusan', 'Puas', 7); echo ' - ';
  echo $chart_pspp_8 = get_rekap('pemberian_salinan_putusan', 'Puas', 8); echo ' - ';
  echo $chart_pspp_9 = get_rekap('pemberian_salinan_putusan', 'Puas', 9); echo ' - ';
  echo $chart_pspp_10 = get_rekap('pemberian_salinan_putusan', 'Puas', 10); echo ' - ';
  echo $chart_pspp_11 = get_rekap('pemberian_salinan_putusan', 'Puas', 11); echo ' - ';
  echo $chart_pspp_12 = get_rekap('pemberian_salinan_putusan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pemberian Salinan Putusan cukup puas<br/>';
  echo $chart_pspcp_1 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_pspcp_2 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_pspcp_3 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_pspcp_4 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_pspcp_5 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_pspcp_6 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_pspcp_7 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_pspcp_8 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_pspcp_9 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_pspcp_10 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_pspcp_11 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_pspcp_12 = get_rekap('pemberian_salinan_putusan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pemberian Salinan Putusan Kurang Puas<br/>';
  echo $chart_pspkp_1 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pspkp_2 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pspkp_3 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pspkp_4 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pspkp_5 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pspkp_6 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pspkp_7 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pspkp_8 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pspkp_9 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pspkp_10 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pspkp_11 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pspkp_12 = get_rekap('pemberian_salinan_putusan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pelayanan Informasi sangat puas<br/>';
  echo $chart_pisp_1 = get_rekap('pelayanan_informasi', 'Sangat Puas', 1); echo ' - ';
  echo $chart_pisp_2 = get_rekap('pelayanan_informasi', 'Sangat Puas', 2); echo ' - ';
  echo $chart_pisp_3 = get_rekap('pelayanan_informasi', 'Sangat Puas', 3); echo ' - ';
  echo $chart_pisp_4 = get_rekap('pelayanan_informasi', 'Sangat Puas', 4); echo ' - ';
  echo $chart_pisp_5 = get_rekap('pelayanan_informasi', 'Sangat Puas', 5); echo ' - ';
  echo $chart_pisp_6 = get_rekap('pelayanan_informasi', 'Sangat Puas', 6); echo ' - ';
  echo $chart_pisp_7 = get_rekap('pelayanan_informasi', 'Sangat Puas', 7); echo ' - ';
  echo $chart_pisp_8 = get_rekap('pelayanan_informasi', 'Sangat Puas', 8); echo ' - ';
  echo $chart_pisp_9 = get_rekap('pelayanan_informasi', 'Sangat Puas', 9); echo ' - ';
  echo $chart_pisp_10 = get_rekap('pelayanan_informasi', 'Sangat Puas', 10); echo ' - ';
  echo $chart_pisp_11 = get_rekap('pelayanan_informasi', 'Sangat Puas', 11); echo ' - ';
  echo $chart_pisp_12 = get_rekap('pelayanan_informasi', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Informasi puas<br/>';
  echo $chart_pip_1 = get_rekap('pelayanan_informasi', 'Puas', 1); echo ' - ';
  echo $chart_pip_2 = get_rekap('pelayanan_informasi', 'Puas', 2); echo ' - ';
  echo $chart_pip_3 = get_rekap('pelayanan_informasi', 'Puas', 3); echo ' - ';
  echo $chart_pip_4 = get_rekap('pelayanan_informasi', 'Puas', 4); echo ' - ';
  echo $chart_pip_5 = get_rekap('pelayanan_informasi', 'Puas', 5); echo ' - ';
  echo $chart_pip_6 = get_rekap('pelayanan_informasi', 'Puas', 6); echo ' - ';
  echo $chart_pip_7 = get_rekap('pelayanan_informasi', 'Puas', 7); echo ' - ';
  echo $chart_pip_8 = get_rekap('pelayanan_informasi', 'Puas', 8); echo ' - ';
  echo $chart_pip_9 = get_rekap('pelayanan_informasi', 'Puas', 9); echo ' - ';
  echo $chart_pip_10 = get_rekap('pelayanan_informasi', 'Puas', 10); echo ' - ';
  echo $chart_pip_11 = get_rekap('pelayanan_informasi', 'Puas', 11); echo ' - ';
  echo $chart_pip_12 = get_rekap('pelayanan_informasi', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Informasi cukup puas<br/>';
  echo $chart_picp_1 = get_rekap('pelayanan_informasi', 'Cukup Puas', 1); echo ' - ';
  echo $chart_picp_2 = get_rekap('pelayanan_informasi', 'Cukup Puas', 2); echo ' - ';
  echo $chart_picp_3 = get_rekap('pelayanan_informasi', 'Cukup Puas', 3); echo ' - ';
  echo $chart_picp_4 = get_rekap('pelayanan_informasi', 'Cukup Puas', 4); echo ' - ';
  echo $chart_picp_5 = get_rekap('pelayanan_informasi', 'Cukup Puas', 5); echo ' - ';
  echo $chart_picp_6 = get_rekap('pelayanan_informasi', 'Cukup Puas', 6); echo ' - ';
  echo $chart_picp_7 = get_rekap('pelayanan_informasi', 'Cukup Puas', 7); echo ' - ';
  echo $chart_picp_8 = get_rekap('pelayanan_informasi', 'Cukup Puas', 8); echo ' - ';
  echo $chart_picp_9 = get_rekap('pelayanan_informasi', 'Cukup Puas', 9); echo ' - ';
  echo $chart_picp_10 = get_rekap('pelayanan_informasi', 'Cukup Puas', 10); echo ' - ';
  echo $chart_picp_11 = get_rekap('pelayanan_informasi', 'Cukup Puas', 11); echo ' - ';
  echo $chart_picp_12 = get_rekap('pelayanan_informasi', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Informasi Kurang Puas<br/>';
  echo $chart_pikp_1 = get_rekap('pelayanan_informasi', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pikp_2 = get_rekap('pelayanan_informasi', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pikp_3 = get_rekap('pelayanan_informasi', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pikp_4 = get_rekap('pelayanan_informasi', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pikp_5 = get_rekap('pelayanan_informasi', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pikp_6 = get_rekap('pelayanan_informasi', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pikp_7 = get_rekap('pelayanan_informasi', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pikp_8 = get_rekap('pelayanan_informasi', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pikp_9 = get_rekap('pelayanan_informasi', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pikp_10 = get_rekap('pelayanan_informasi', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pikp_11 = get_rekap('pelayanan_informasi', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pikp_12 = get_rekap('pelayanan_informasi', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pelayanan Pengaduan sangat puas<br/>';
  echo $chart_pelpengsp_1 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_pelpengsp_2 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_pelpengsp_3 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_pelpengsp_4 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_pelpengsp_5 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_pelpengsp_6 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_pelpengsp_7 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_pelpengsp_8 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_pelpengsp_9 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_pelpengsp_10 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_pelpengsp_11 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_pelpengsp_12 = get_rekap('pelayanan_pengaduan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Pengaduan puas<br/>';
  echo $chart_pelpengp_1 = get_rekap('pelayanan_pengaduan', 'Puas', 1); echo ' - ';
  echo $chart_pelpengp_2 = get_rekap('pelayanan_pengaduan', 'Puas', 2); echo ' - ';
  echo $chart_pelpengp_3 = get_rekap('pelayanan_pengaduan', 'Puas', 3); echo ' - ';
  echo $chart_pelpengp_4 = get_rekap('pelayanan_pengaduan', 'Puas', 4); echo ' - ';
  echo $chart_pelpengp_5 = get_rekap('pelayanan_pengaduan', 'Puas', 5); echo ' - ';
  echo $chart_pelpengp_6 = get_rekap('pelayanan_pengaduan', 'Puas', 6); echo ' - ';
  echo $chart_pelpengp_7 = get_rekap('pelayanan_pengaduan', 'Puas', 7); echo ' - ';
  echo $chart_pelpengp_8 = get_rekap('pelayanan_pengaduan', 'Puas', 8); echo ' - ';
  echo $chart_pelpengp_9 = get_rekap('pelayanan_pengaduan', 'Puas', 9); echo ' - ';
  echo $chart_pelpengp_10 = get_rekap('pelayanan_pengaduan', 'Puas', 10); echo ' - ';
  echo $chart_pelpengp_11 = get_rekap('pelayanan_pengaduan', 'Puas', 11); echo ' - ';
  echo $chart_pelpengp_12 = get_rekap('pelayanan_pengaduan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Pengaduan cukup puas<br/>';
  echo $chart_pelpengcp_1 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_pelpengcp_2 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_pelpengcp_3 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_pelpengcp_4 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_pelpengcp_5 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_pelpengcp_6 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_pelpengcp_7 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_pelpengcp_8 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_pelpengcp_9 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_pelpengcp_10 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_pelpengcp_11 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_pelpengcp_12 = get_rekap('pelayanan_pengaduan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Pengaduan Kurang Puas<br/>';
  echo $chart_pelpengkp_1 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pelpengkp_2 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pelpengkp_3 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pelpengkp_4 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pelpengkp_5 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pelpengkp_6 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pelpengkp_7 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pelpengkp_8 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pelpengkp_9 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pelpengkp_10 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pelpengkp_11 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pelpengkp_12 = get_rekap('pelayanan_pengaduan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pelayanan Persuratan sangat puas<br/>';
  echo $chart_pelperssp_1 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 1); echo ' - ';
  echo $chart_pelperssp_2 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 2); echo ' - ';
  echo $chart_pelperssp_3 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 3); echo ' - ';
  echo $chart_pelperssp_4 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 4); echo ' - ';
  echo $chart_pelperssp_5 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 5); echo ' - ';
  echo $chart_pelperssp_6 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 6); echo ' - ';
  echo $chart_pelperssp_7 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 7); echo ' - ';
  echo $chart_pelperssp_8 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 8); echo ' - ';
  echo $chart_pelperssp_9 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 9); echo ' - ';
  echo $chart_pelperssp_10 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 10); echo ' - ';
  echo $chart_pelperssp_11 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 11); echo ' - ';
  echo $chart_pelperssp_12 = get_rekap('pelayanan_persuratan', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Persuratan puas<br/>';
  echo $chart_pelpersp_1 = get_rekap('pelayanan_persuratan', 'Puas', 1); echo ' - ';
  echo $chart_pelpersp_2 = get_rekap('pelayanan_persuratan', 'Puas', 2); echo ' - ';
  echo $chart_pelpersp_3 = get_rekap('pelayanan_persuratan', 'Puas', 3); echo ' - ';
  echo $chart_pelpersp_4 = get_rekap('pelayanan_persuratan', 'Puas', 4); echo ' - ';
  echo $chart_pelpersp_5 = get_rekap('pelayanan_persuratan', 'Puas', 5); echo ' - ';
  echo $chart_pelpersp_6 = get_rekap('pelayanan_persuratan', 'Puas', 6); echo ' - ';
  echo $chart_pelpersp_7 = get_rekap('pelayanan_persuratan', 'Puas', 7); echo ' - ';
  echo $chart_pelpersp_8 = get_rekap('pelayanan_persuratan', 'Puas', 8); echo ' - ';
  echo $chart_pelpersp_9 = get_rekap('pelayanan_persuratan', 'Puas', 9); echo ' - ';
  echo $chart_pelpersp_10 = get_rekap('pelayanan_persuratan', 'Puas', 10); echo ' - ';
  echo $chart_pelpersp_11 = get_rekap('pelayanan_persuratan', 'Puas', 11); echo ' - ';
  echo $chart_pelpersp_12 = get_rekap('pelayanan_persuratan', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Persuratan cukup puas<br/>';
  echo $chart_pelperscp_1 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 1); echo ' - ';
  echo $chart_pelperscp_2 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 2); echo ' - ';
  echo $chart_pelperscp_3 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 3); echo ' - ';
  echo $chart_pelperscp_4 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 4); echo ' - ';
  echo $chart_pelperscp_5 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 5); echo ' - ';
  echo $chart_pelperscp_6 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 6); echo ' - ';
  echo $chart_pelperscp_7 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 7); echo ' - ';
  echo $chart_pelperscp_8 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 8); echo ' - ';
  echo $chart_pelperscp_9 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 9); echo ' - ';
  echo $chart_pelperscp_10 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 10); echo ' - ';
  echo $chart_pelperscp_11 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 11); echo ' - ';
  echo $chart_pelperscp_12 = get_rekap('pelayanan_persuratan', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pelayanan Persuratan Kurang Puas<br/>';
  echo $chart_pelperskp_1 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 1); echo ' - ';
  echo $chart_pelperskp_2 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 2); echo ' - ';
  echo $chart_pelperskp_3 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 3); echo ' - ';
  echo $chart_pelperskp_4 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 4); echo ' - ';
  echo $chart_pelperskp_5 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 5); echo ' - ';
  echo $chart_pelperskp_6 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 6); echo ' - ';
  echo $chart_pelperskp_7 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 7); echo ' - ';
  echo $chart_pelperskp_8 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 8); echo ' - ';
  echo $chart_pelperskp_9 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 9); echo ' - ';
  echo $chart_pelperskp_10 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 10); echo ' - ';
  echo $chart_pelperskp_11 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 11); echo ' - ';
  echo $chart_pelperskp_12 = get_rekap('pelayanan_persuratan', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Pengembalian Sisa Biaya Panjar sangat puas<br/>';
  echo $chart_psbpsp_1 = get_rekap('psbp', 'Sangat Puas', 1); echo ' - ';
  echo $chart_psbpsp_2 = get_rekap('psbp', 'Sangat Puas', 2); echo ' - ';
  echo $chart_psbpsp_3 = get_rekap('psbp', 'Sangat Puas', 3); echo ' - ';
  echo $chart_psbpsp_4 = get_rekap('psbp', 'Sangat Puas', 4); echo ' - ';
  echo $chart_psbpsp_5 = get_rekap('psbp', 'Sangat Puas', 5); echo ' - ';
  echo $chart_psbpsp_6 = get_rekap('psbp', 'Sangat Puas', 6); echo ' - ';
  echo $chart_psbpsp_7 = get_rekap('psbp', 'Sangat Puas', 7); echo ' - ';
  echo $chart_psbpsp_8 = get_rekap('psbp', 'Sangat Puas', 8); echo ' - ';
  echo $chart_psbpsp_9 = get_rekap('psbp', 'Sangat Puas', 9); echo ' - ';
  echo $chart_psbpsp_10 = get_rekap('psbp', 'Sangat Puas', 10); echo ' - ';
  echo $chart_psbpsp_11 = get_rekap('psbp', 'Sangat Puas', 11); echo ' - ';
  echo $chart_psbpsp_12 = get_rekap('psbp', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pengembalian Sisa Biaya Panjar puas<br/>';
  echo $chart_psbpp_1 = get_rekap('psbp', 'Puas', 1); echo ' - ';
  echo $chart_psbpp_2 = get_rekap('psbp', 'Puas', 2); echo ' - ';
  echo $chart_psbpp_3 = get_rekap('psbp', 'Puas', 3); echo ' - ';
  echo $chart_psbpp_4 = get_rekap('psbp', 'Puas', 4); echo ' - ';
  echo $chart_psbpp_5 = get_rekap('psbp', 'Puas', 5); echo ' - ';
  echo $chart_psbpp_6 = get_rekap('psbp', 'Puas', 6); echo ' - ';
  echo $chart_psbpp_7 = get_rekap('psbp', 'Puas', 7); echo ' - ';
  echo $chart_psbpp_8 = get_rekap('psbp', 'Puas', 8); echo ' - ';
  echo $chart_psbpp_9 = get_rekap('psbp', 'Puas', 9); echo ' - ';
  echo $chart_psbpp_10 = get_rekap('psbp', 'Puas', 10); echo ' - ';
  echo $chart_psbpp_11 = get_rekap('psbp', 'Puas', 11); echo ' - ';
  echo $chart_psbpp_12 = get_rekap('psbp', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pengembalian Sisa Biaya Panjar cukup puas<br/>';
  echo $chart_psbpcp_1 = get_rekap('psbp', 'Cukup Puas', 1); echo ' - ';
  echo $chart_psbpcp_2 = get_rekap('psbp', 'Cukup Puas', 2); echo ' - ';
  echo $chart_psbpcp_3 = get_rekap('psbp', 'Cukup Puas', 3); echo ' - ';
  echo $chart_psbpcp_4 = get_rekap('psbp', 'Cukup Puas', 4); echo ' - ';
  echo $chart_psbpcp_5 = get_rekap('psbp', 'Cukup Puas', 5); echo ' - ';
  echo $chart_psbpcp_6 = get_rekap('psbp', 'Cukup Puas', 6); echo ' - ';
  echo $chart_psbpcp_7 = get_rekap('psbp', 'Cukup Puas', 7); echo ' - ';
  echo $chart_psbpcp_8 = get_rekap('psbp', 'Cukup Puas', 8); echo ' - ';
  echo $chart_psbpcp_9 = get_rekap('psbp', 'Cukup Puas', 9); echo ' - ';
  echo $chart_psbpcp_10 = get_rekap('psbp', 'Cukup Puas', 10); echo ' - ';
  echo $chart_psbpcp_11 = get_rekap('psbp', 'Cukup Puas', 11); echo ' - ';
  echo $chart_psbpcp_12 = get_rekap('psbp', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Pengembalian Sisa Biaya Panjar Kurang Puas<br/>';
  echo $chart_psbpkp_1 = get_rekap('psbp', 'Kurang Puas', 1); echo ' - ';
  echo $chart_psbpkp_2 = get_rekap('psbp', 'Kurang Puas', 2); echo ' - ';
  echo $chart_psbpkp_3 = get_rekap('psbp', 'Kurang Puas', 3); echo ' - ';
  echo $chart_psbpkp_4 = get_rekap('psbp', 'Kurang Puas', 4); echo ' - ';
  echo $chart_psbpkp_5 = get_rekap('psbp', 'Kurang Puas', 5); echo ' - ';
  echo $chart_psbpkp_6 = get_rekap('psbp', 'Kurang Puas', 6); echo ' - ';
  echo $chart_psbpkp_7 = get_rekap('psbp', 'Kurang Puas', 7); echo ' - ';
  echo $chart_psbpkp_8 = get_rekap('psbp', 'Kurang Puas', 8); echo ' - ';
  echo $chart_psbpkp_9 = get_rekap('psbp', 'Kurang Puas', 9); echo ' - ';
  echo $chart_psbpkp_10 = get_rekap('psbp', 'Kurang Puas', 10); echo ' - ';
  echo $chart_psbpkp_11 = get_rekap('psbp', 'Kurang Puas', 11); echo ' - ';
  echo $chart_psbpkp_12 = get_rekap('psbp', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Eksekusi sangat puas<br/>';
  echo $chart_esp_1 = get_rekap('eksekusi', 'Sangat Puas', 1); echo ' - ';
  echo $chart_esp_2 = get_rekap('eksekusi', 'Sangat Puas', 2); echo ' - ';
  echo $chart_esp_3 = get_rekap('eksekusi', 'Sangat Puas', 3); echo ' - ';
  echo $chart_esp_4 = get_rekap('eksekusi', 'Sangat Puas', 4); echo ' - ';
  echo $chart_esp_5 = get_rekap('eksekusi', 'Sangat Puas', 5); echo ' - ';
  echo $chart_esp_6 = get_rekap('eksekusi', 'Sangat Puas', 6); echo ' - ';
  echo $chart_esp_7 = get_rekap('eksekusi', 'Sangat Puas', 7); echo ' - ';
  echo $chart_esp_8 = get_rekap('eksekusi', 'Sangat Puas', 8); echo ' - ';
  echo $chart_esp_9 = get_rekap('eksekusi', 'Sangat Puas', 9); echo ' - ';
  echo $chart_esp_10 = get_rekap('eksekusi', 'Sangat Puas', 10); echo ' - ';
  echo $chart_esp_11 = get_rekap('eksekusi', 'Sangat Puas', 11); echo ' - ';
  echo $chart_esp_12 = get_rekap('eksekusi', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Eksekusi puas<br/>';
  echo $chart_ep_1 = get_rekap('eksekusi', 'Puas', 1); echo ' - ';
  echo $chart_ep_2 = get_rekap('eksekusi', 'Puas', 2); echo ' - ';
  echo $chart_ep_3 = get_rekap('eksekusi', 'Puas', 3); echo ' - ';
  echo $chart_ep_4 = get_rekap('eksekusi', 'Puas', 4); echo ' - ';
  echo $chart_ep_5 = get_rekap('eksekusi', 'Puas', 5); echo ' - ';
  echo $chart_ep_6 = get_rekap('eksekusi', 'Puas', 6); echo ' - ';
  echo $chart_ep_7 = get_rekap('eksekusi', 'Puas', 7); echo ' - ';
  echo $chart_ep_8 = get_rekap('eksekusi', 'Puas', 8); echo ' - ';
  echo $chart_ep_9 = get_rekap('eksekusi', 'Puas', 9); echo ' - ';
  echo $chart_ep_10 = get_rekap('eksekusi', 'Puas', 10); echo ' - ';
  echo $chart_ep_11 = get_rekap('eksekusi', 'Puas', 11); echo ' - ';
  echo $chart_ep_12 = get_rekap('eksekusi', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Eksekusi cukup puas<br/>';
  echo $chart_ecp_1 = get_rekap('eksekusi', 'Cukup Puas', 1); echo ' - ';
  echo $chart_ecp_2 = get_rekap('eksekusi', 'Cukup Puas', 2); echo ' - ';
  echo $chart_ecp_3 = get_rekap('eksekusi', 'Cukup Puas', 3); echo ' - ';
  echo $chart_ecp_4 = get_rekap('eksekusi', 'Cukup Puas', 4); echo ' - ';
  echo $chart_ecp_5 = get_rekap('eksekusi', 'Cukup Puas', 5); echo ' - ';
  echo $chart_ecp_6 = get_rekap('eksekusi', 'Cukup Puas', 6); echo ' - ';
  echo $chart_ecp_7 = get_rekap('eksekusi', 'Cukup Puas', 7); echo ' - ';
  echo $chart_ecp_8 = get_rekap('eksekusi', 'Cukup Puas', 8); echo ' - ';
  echo $chart_ecp_9 = get_rekap('eksekusi', 'Cukup Puas', 9); echo ' - ';
  echo $chart_ecp_10 = get_rekap('eksekusi', 'Cukup Puas', 10); echo ' - ';
  echo $chart_ecp_11 = get_rekap('eksekusi', 'Cukup Puas', 11); echo ' - ';
  echo $chart_ecp_12 = get_rekap('eksekusi', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Eksekusi Kurang Puas<br/>';
  echo $chart_ekp_1 = get_rekap('eksekusi', 'Kurang Puas', 1); echo ' - ';
  echo $chart_ekp_2 = get_rekap('eksekusi', 'Kurang Puas', 2); echo ' - ';
  echo $chart_ekp_3 = get_rekap('eksekusi', 'Kurang Puas', 3); echo ' - ';
  echo $chart_ekp_4 = get_rekap('eksekusi', 'Kurang Puas', 4); echo ' - ';
  echo $chart_ekp_5 = get_rekap('eksekusi', 'Kurang Puas', 5); echo ' - ';
  echo $chart_ekp_6 = get_rekap('eksekusi', 'Kurang Puas', 6); echo ' - ';
  echo $chart_ekp_7 = get_rekap('eksekusi', 'Kurang Puas', 7); echo ' - ';
  echo $chart_ekp_8 = get_rekap('eksekusi', 'Kurang Puas', 8); echo ' - ';
  echo $chart_ekp_9 = get_rekap('eksekusi', 'Kurang Puas', 9); echo ' - ';
  echo $chart_ekp_10 = get_rekap('eksekusi', 'Kurang Puas', 10); echo ' - ';
  echo $chart_ekp_11 = get_rekap('eksekusi', 'Kurang Puas', 11); echo ' - ';
  echo $chart_ekp_12 = get_rekap('eksekusi', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Sikap Petugas sangat puas<br/>';
  echo $chart_sikpetsp_1 = get_rekap('sikap_petugas', 'Sangat Puas', 1); echo ' - ';
  echo $chart_sikpetsp_2 = get_rekap('sikap_petugas', 'Sangat Puas', 2); echo ' - ';
  echo $chart_sikpetsp_3 = get_rekap('sikap_petugas', 'Sangat Puas', 3); echo ' - ';
  echo $chart_sikpetsp_4 = get_rekap('sikap_petugas', 'Sangat Puas', 4); echo ' - ';
  echo $chart_sikpetsp_5 = get_rekap('sikap_petugas', 'Sangat Puas', 5); echo ' - ';
  echo $chart_sikpetsp_6 = get_rekap('sikap_petugas', 'Sangat Puas', 6); echo ' - ';
  echo $chart_sikpetsp_7 = get_rekap('sikap_petugas', 'Sangat Puas', 7); echo ' - ';
  echo $chart_sikpetsp_8 = get_rekap('sikap_petugas', 'Sangat Puas', 8); echo ' - ';
  echo $chart_sikpetsp_9 = get_rekap('sikap_petugas', 'Sangat Puas', 9); echo ' - ';
  echo $chart_sikpetsp_10 = get_rekap('sikap_petugas', 'Sangat Puas', 10); echo ' - ';
  echo $chart_sikpetsp_11 = get_rekap('sikap_petugas', 'Sangat Puas', 11); echo ' - ';
  echo $chart_sikpetsp_12 = get_rekap('sikap_petugas', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Sikap Petugas puas<br/>';
  echo $chart_sikpetp_1 = get_rekap('sikap_petugas', 'Puas', 1); echo ' - ';
  echo $chart_sikpetp_2 = get_rekap('sikap_petugas', 'Puas', 2); echo ' - ';
  echo $chart_sikpetp_3 = get_rekap('sikap_petugas', 'Puas', 3); echo ' - ';
  echo $chart_sikpetp_4 = get_rekap('sikap_petugas', 'Puas', 4); echo ' - ';
  echo $chart_sikpetp_5 = get_rekap('sikap_petugas', 'Puas', 5); echo ' - ';
  echo $chart_sikpetp_6 = get_rekap('sikap_petugas', 'Puas', 6); echo ' - ';
  echo $chart_sikpetp_7 = get_rekap('sikap_petugas', 'Puas', 7); echo ' - ';
  echo $chart_sikpetp_8 = get_rekap('sikap_petugas', 'Puas', 8); echo ' - ';
  echo $chart_sikpetp_9 = get_rekap('sikap_petugas', 'Puas', 9); echo ' - ';
  echo $chart_sikpetp_10 = get_rekap('sikap_petugas', 'Puas', 10); echo ' - ';
  echo $chart_sikpetp_11 = get_rekap('sikap_petugas', 'Puas', 11); echo ' - ';
  echo $chart_sikpetp_12 = get_rekap('sikap_petugas', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Sikap Petugas cukup puas<br/>';
  echo $chart_sikpetcp_1 = get_rekap('sikap_petugas', 'Cukup Puas', 1); echo ' - ';
  echo $chart_sikpetcp_2 = get_rekap('sikap_petugas', 'Cukup Puas', 2); echo ' - ';
  echo $chart_sikpetcp_3 = get_rekap('sikap_petugas', 'Cukup Puas', 3); echo ' - ';
  echo $chart_sikpetcp_4 = get_rekap('sikap_petugas', 'Cukup Puas', 4); echo ' - ';
  echo $chart_sikpetcp_5 = get_rekap('sikap_petugas', 'Cukup Puas', 5); echo ' - ';
  echo $chart_sikpetcp_6 = get_rekap('sikap_petugas', 'Cukup Puas', 6); echo ' - ';
  echo $chart_sikpetcp_7 = get_rekap('sikap_petugas', 'Cukup Puas', 7); echo ' - ';
  echo $chart_sikpetcp_8 = get_rekap('sikap_petugas', 'Cukup Puas', 8); echo ' - ';
  echo $chart_sikpetcp_9 = get_rekap('sikap_petugas', 'Cukup Puas', 9); echo ' - ';
  echo $chart_sikpetcp_10 = get_rekap('sikap_petugas', 'Cukup Puas', 10); echo ' - ';
  echo $chart_sikpetcp_11 = get_rekap('sikap_petugas', 'Cukup Puas', 11); echo ' - ';
  echo $chart_sikpetcp_12 = get_rekap('sikap_petugas', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Sikap Petugas Kurang Puas<br/>';
  echo $chart_sikpetkp_1 = get_rekap('sikap_petugas', 'Kurang Puas', 1); echo ' - ';
  echo $chart_sikpetkp_2 = get_rekap('sikap_petugas', 'Kurang Puas', 2); echo ' - ';
  echo $chart_sikpetkp_3 = get_rekap('sikap_petugas', 'Kurang Puas', 3); echo ' - ';
  echo $chart_sikpetkp_4 = get_rekap('sikap_petugas', 'Kurang Puas', 4); echo ' - ';
  echo $chart_sikpetkp_5 = get_rekap('sikap_petugas', 'Kurang Puas', 5); echo ' - ';
  echo $chart_sikpetkp_6 = get_rekap('sikap_petugas', 'Kurang Puas', 6); echo ' - ';
  echo $chart_sikpetkp_7 = get_rekap('sikap_petugas', 'Kurang Puas', 7); echo ' - ';
  echo $chart_sikpetkp_8 = get_rekap('sikap_petugas', 'Kurang Puas', 8); echo ' - ';
  echo $chart_sikpetkp_9 = get_rekap('sikap_petugas', 'Kurang Puas', 9); echo ' - ';
  echo $chart_sikpetkp_10 = get_rekap('sikap_petugas', 'Kurang Puas', 10); echo ' - ';
  echo $chart_sikpetkp_11 = get_rekap('sikap_petugas', 'Kurang Puas', 11); echo ' - ';
  echo $chart_sikpetkp_12 = get_rekap('sikap_petugas', 'Kurang Puas', 12);

/*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Kemampuan Petugas sangat puas<br/>';
  echo $chart_kempetsp_1 = get_rekap('kemampuan_petugas', 'Sangat Puas', 1); echo ' - ';
  echo $chart_kempetsp_2 = get_rekap('kemampuan_petugas', 'Sangat Puas', 2); echo ' - ';
  echo $chart_kempetsp_3 = get_rekap('kemampuan_petugas', 'Sangat Puas', 3); echo ' - ';
  echo $chart_kempetsp_4 = get_rekap('kemampuan_petugas', 'Sangat Puas', 4); echo ' - ';
  echo $chart_kempetsp_5 = get_rekap('kemampuan_petugas', 'Sangat Puas', 5); echo ' - ';
  echo $chart_kempetsp_6 = get_rekap('kemampuan_petugas', 'Sangat Puas', 6); echo ' - ';
  echo $chart_kempetsp_7 = get_rekap('kemampuan_petugas', 'Sangat Puas', 7); echo ' - ';
  echo $chart_kempetsp_8 = get_rekap('kemampuan_petugas', 'Sangat Puas', 8); echo ' - ';
  echo $chart_kempetsp_9 = get_rekap('kemampuan_petugas', 'Sangat Puas', 9); echo ' - ';
  echo $chart_kempetsp_10 = get_rekap('kemampuan_petugas', 'Sangat Puas', 10); echo ' - ';
  echo $chart_kempetsp_11 = get_rekap('kemampuan_petugas', 'Sangat Puas', 11); echo ' - ';
  echo $chart_kempetsp_12 = get_rekap('kemampuan_petugas', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Kemampuan Petugas puas<br/>';
  echo $chart_kempetp_1 = get_rekap('kemampuan_petugas', 'Puas', 1); echo ' - ';
  echo $chart_kempetp_2 = get_rekap('kemampuan_petugas', 'Puas', 2); echo ' - ';
  echo $chart_kempetp_3 = get_rekap('kemampuan_petugas', 'Puas', 3); echo ' - ';
  echo $chart_kempetp_4 = get_rekap('kemampuan_petugas', 'Puas', 4); echo ' - ';
  echo $chart_kempetp_5 = get_rekap('kemampuan_petugas', 'Puas', 5); echo ' - ';
  echo $chart_kempetp_6 = get_rekap('kemampuan_petugas', 'Puas', 6); echo ' - ';
  echo $chart_kempetp_7 = get_rekap('kemampuan_petugas', 'Puas', 7); echo ' - ';
  echo $chart_kempetp_8 = get_rekap('kemampuan_petugas', 'Puas', 8); echo ' - ';
  echo $chart_kempetp_9 = get_rekap('kemampuan_petugas', 'Puas', 9); echo ' - ';
  echo $chart_kempetp_10 = get_rekap('kemampuan_petugas', 'Puas', 10); echo ' - ';
  echo $chart_kempetp_11 = get_rekap('kemampuan_petugas', 'Puas', 11); echo ' - ';
  echo $chart_kempetp_12 = get_rekap('kemampuan_petugas', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Kemampuan Petugas cukup puas<br/>';
  echo $chart_kempetcp_1 = get_rekap('kemampuan_petugas', 'Cukup Puas', 1); echo ' - ';
  echo $chart_kempetcp_2 = get_rekap('kemampuan_petugas', 'Cukup Puas', 2); echo ' - ';
  echo $chart_kempetcp_3 = get_rekap('kemampuan_petugas', 'Cukup Puas', 3); echo ' - ';
  echo $chart_kempetcp_4 = get_rekap('kemampuan_petugas', 'Cukup Puas', 4); echo ' - ';
  echo $chart_kempetcp_5 = get_rekap('kemampuan_petugas', 'Cukup Puas', 5); echo ' - ';
  echo $chart_kempetcp_6 = get_rekap('kemampuan_petugas', 'Cukup Puas', 6); echo ' - ';
  echo $chart_kempetcp_7 = get_rekap('kemampuan_petugas', 'Cukup Puas', 7); echo ' - ';
  echo $chart_kempetcp_8 = get_rekap('kemampuan_petugas', 'Cukup Puas', 8); echo ' - ';
  echo $chart_kempetcp_9 = get_rekap('kemampuan_petugas', 'Cukup Puas', 9); echo ' - ';
  echo $chart_kempetcp_10 = get_rekap('kemampuan_petugas', 'Cukup Puas', 10); echo ' - ';
  echo $chart_kempetcp_11 = get_rekap('kemampuan_petugas', 'Cukup Puas', 11); echo ' - ';
  echo $chart_kempetcp_12 = get_rekap('kemampuan_petugas', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Kemampuan Petugas Kurang Puas<br/>';
  echo $chart_kempetkp_1 = get_rekap('kemampuan_petugas', 'Kurang Puas', 1); echo ' - ';
  echo $chart_kempetkp_2 = get_rekap('kemampuan_petugas', 'Kurang Puas', 2); echo ' - ';
  echo $chart_kempetkp_3 = get_rekap('kemampuan_petugas', 'Kurang Puas', 3); echo ' - ';
  echo $chart_kempetkp_4 = get_rekap('kemampuan_petugas', 'Kurang Puas', 4); echo ' - ';
  echo $chart_kempetkp_5 = get_rekap('kemampuan_petugas', 'Kurang Puas', 5); echo ' - ';
  echo $chart_kempetkp_6 = get_rekap('kemampuan_petugas', 'Kurang Puas', 6); echo ' - ';
  echo $chart_kempetkp_7 = get_rekap('kemampuan_petugas', 'Kurang Puas', 7); echo ' - ';
  echo $chart_kempetkp_8 = get_rekap('kemampuan_petugas', 'Kurang Puas', 8); echo ' - ';
  echo $chart_kempetkp_9 = get_rekap('kemampuan_petugas', 'Kurang Puas', 9); echo ' - ';
  echo $chart_kempetkp_10 = get_rekap('kemampuan_petugas', 'Kurang Puas', 10); echo ' - ';
  echo $chart_kempetkp_11 = get_rekap('kemampuan_petugas', 'Kurang Puas', 11); echo ' - ';
  echo $chart_kempetkp_12 = get_rekap('kemampuan_petugas', 'Kurang Puas', 12);

  /*------------------------------------------------------------------------------------*/

                  echo "<hr style='width: 350px;margin-left:0px;'>";

  /*--------------------------------Fasilitas Toilet------------------------------------*/
  echo '<br/>';
  echo 'Penampilan Petugas sangat puas<br/>';
  echo $chart_penpetsp_1 = get_rekap('penampilan_petugas', 'Sangat Puas', 1); echo ' - ';
  echo $chart_penpetsp_2 = get_rekap('penampilan_petugas', 'Sangat Puas', 2); echo ' - ';
  echo $chart_penpetsp_3 = get_rekap('penampilan_petugas', 'Sangat Puas', 3); echo ' - ';
  echo $chart_penpetsp_4 = get_rekap('penampilan_petugas', 'Sangat Puas', 4); echo ' - ';
  echo $chart_penpetsp_5 = get_rekap('penampilan_petugas', 'Sangat Puas', 5); echo ' - ';
  echo $chart_penpetsp_6 = get_rekap('penampilan_petugas', 'Sangat Puas', 6); echo ' - ';
  echo $chart_penpetsp_7 = get_rekap('penampilan_petugas', 'Sangat Puas', 7); echo ' - ';
  echo $chart_penpetsp_8 = get_rekap('penampilan_petugas', 'Sangat Puas', 8); echo ' - ';
  echo $chart_penpetsp_9 = get_rekap('penampilan_petugas', 'Sangat Puas', 9); echo ' - ';
  echo $chart_penpetsp_10 = get_rekap('penampilan_petugas', 'Sangat Puas', 10); echo ' - ';
  echo $chart_penpetsp_11 = get_rekap('penampilan_petugas', 'Sangat Puas', 11); echo ' - ';
  echo $chart_penpetsp_12 = get_rekap('penampilan_petugas', 'Sangat Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Penampilan Petugas puas<br/>';
  echo $chart_penpetp_1 = get_rekap('penampilan_petugas', 'Puas', 1); echo ' - ';
  echo $chart_penpetp_2 = get_rekap('penampilan_petugas', 'Puas', 2); echo ' - ';
  echo $chart_penpetp_3 = get_rekap('penampilan_petugas', 'Puas', 3); echo ' - ';
  echo $chart_penpetp_4 = get_rekap('penampilan_petugas', 'Puas', 4); echo ' - ';
  echo $chart_penpetp_5 = get_rekap('penampilan_petugas', 'Puas', 5); echo ' - ';
  echo $chart_penpetp_6 = get_rekap('penampilan_petugas', 'Puas', 6); echo ' - ';
  echo $chart_penpetp_7 = get_rekap('penampilan_petugas', 'Puas', 7); echo ' - ';
  echo $chart_penpetp_8 = get_rekap('penampilan_petugas', 'Puas', 8); echo ' - ';
  echo $chart_penpetp_9 = get_rekap('penampilan_petugas', 'Puas', 9); echo ' - ';
  echo $chart_penpetp_10 = get_rekap('penampilan_petugas', 'Puas', 10); echo ' - ';
  echo $chart_penpetp_11 = get_rekap('penampilan_petugas', 'Puas', 11); echo ' - ';
  echo $chart_penpetp_12 = get_rekap('penampilan_petugas', 'Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Penampilan Petugas cukup puas<br/>';
  echo $chart_penpetcp_1 = get_rekap('penampilan_petugas', 'Cukup Puas', 1); echo ' - ';
  echo $chart_penpetcp_2 = get_rekap('penampilan_petugas', 'Cukup Puas', 2); echo ' - ';
  echo $chart_penpetcp_3 = get_rekap('penampilan_petugas', 'Cukup Puas', 3); echo ' - ';
  echo $chart_penpetcp_4 = get_rekap('penampilan_petugas', 'Cukup Puas', 4); echo ' - ';
  echo $chart_penpetcp_5 = get_rekap('penampilan_petugas', 'Cukup Puas', 5); echo ' - ';
  echo $chart_penpetcp_6 = get_rekap('penampilan_petugas', 'Cukup Puas', 6); echo ' - ';
  echo $chart_penpetcp_7 = get_rekap('penampilan_petugas', 'Cukup Puas', 7); echo ' - ';
  echo $chart_penpetcp_8 = get_rekap('penampilan_petugas', 'Cukup Puas', 8); echo ' - ';
  echo $chart_penpetcp_9 = get_rekap('penampilan_petugas', 'Cukup Puas', 9); echo ' - ';
  echo $chart_penpetcp_10 = get_rekap('penampilan_petugas', 'Cukup Puas', 10); echo ' - ';
  echo $chart_penpetcp_11 = get_rekap('penampilan_petugas', 'Cukup Puas', 11); echo ' - ';
  echo $chart_penpetcp_12 = get_rekap('penampilan_petugas', 'Cukup Puas', 12);

  echo '<br/>';
  echo '<br/>';
  echo 'Penampilan Petugas Kurang Puas<br/>';
  echo $chart_penpetkp_1 = get_rekap('penampilan_petugas', 'Kurang Puas', 1); echo ' - ';
  echo $chart_penpetkp_2 = get_rekap('penampilan_petugas', 'Kurang Puas', 2); echo ' - ';
  echo $chart_penpetkp_3 = get_rekap('penampilan_petugas', 'Kurang Puas', 3); echo ' - ';
  echo $chart_penpetkp_4 = get_rekap('penampilan_petugas', 'Kurang Puas', 4); echo ' - ';
  echo $chart_penpetkp_5 = get_rekap('penampilan_petugas', 'Kurang Puas', 5); echo ' - ';
  echo $chart_penpetkp_6 = get_rekap('penampilan_petugas', 'Kurang Puas', 6); echo ' - ';
  echo $chart_penpetkp_7 = get_rekap('penampilan_petugas', 'Kurang Puas', 7); echo ' - ';
  echo $chart_penpetkp_8 = get_rekap('penampilan_petugas', 'Kurang Puas', 8); echo ' - ';
  echo $chart_penpetkp_9 = get_rekap('penampilan_petugas', 'Kurang Puas', 9); echo ' - ';
  echo $chart_penpetkp_10 = get_rekap('penampilan_petugas', 'Kurang Puas', 10); echo ' - ';
  echo $chart_penpetkp_11 = get_rekap('penampilan_petugas', 'Kurang Puas', 11); echo ' - ';
  echo $chart_penpetkp_12 = get_rekap('penampilan_petugas', 'Kurang Puas', 12);
<?php 
	include("../../koneksi.php");

  $today = date('Y');

	$result_jan_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="01"');
	$result_feb_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="02"');
	$result_mar_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="03"');
	$result_apr_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="04"');
	$result_mei_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="05"');
	$result_jun_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="06"');
	$result_jul_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="07"');
	$result_agt_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="08"');
	$result_sep_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="09"');
	$result_okt_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="10"');
	$result_nov_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="11"');
	$result_des_spuasfi = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_informasi="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="12"');
  $tampil_jan_spuasfi = mysqli_fetch_array($result_jan_spuasfi);
  $tampil_feb_spuasfi = mysqli_fetch_array($result_feb_spuasfi);
  $tampil_mar_spuasfi = mysqli_fetch_array($result_mar_spuasfi);
  $tampil_apr_spuasfi = mysqli_fetch_array($result_apr_spuasfi);
  $tampil_mei_spuasfi = mysqli_fetch_array($result_mei_spuasfi);
  $tampil_jun_spuasfi = mysqli_fetch_array($result_jun_spuasfi);
  $tampil_jul_spuasfi = mysqli_fetch_array($result_jul_spuasfi);
  $tampil_agt_spuasfi = mysqli_fetch_array($result_agt_spuasfi);
  $tampil_sep_spuasfi = mysqli_fetch_array($result_sep_spuasfi);
  $tampil_okt_spuasfi = mysqli_fetch_array($result_okt_spuasfi);
  $tampil_nov_spuasfi = mysqli_fetch_array($result_nov_spuasfi);
  $tampil_des_spuasfi = mysqli_fetch_array($result_des_spuasfi);

  $result_jan_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="01"');
  $result_feb_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="02"');
  $result_mar_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="03"');
  $result_apr_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="04"');
  $result_mei_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="05"');
  $result_jun_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="06"');
  $result_jul_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="07"');
  $result_agt_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="08"');
  $result_sep_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="09"');
  $result_okt_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="10"');
  $result_nov_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="11"');
  $result_des_spuas = mysqli_query($koneksi,'SELECT COUNT(*) as rekapitulasi FROM tbl_survey 
                                              WHERE fasilitas_toilet="Sangat Puas" 
                                              AND LEFT(tanggal,4)='.$today.' AND MID(tanggal,6,2)="12"');
  $tampil_jan_spuas = mysqli_fetch_array($result_jan_spuas);
  $tampil_feb_spuas = mysqli_fetch_array($result_feb_spuas);
  $tampil_mar_spuas = mysqli_fetch_array($result_mar_spuas);
  $tampil_apr_spuas = mysqli_fetch_array($result_apr_spuas);
  $tampil_mei_spuas = mysqli_fetch_array($result_mei_spuas);
  $tampil_jun_spuas = mysqli_fetch_array($result_jun_spuas);
  $tampil_jul_spuas = mysqli_fetch_array($result_jul_spuas);
  $tampil_agt_spuas = mysqli_fetch_array($result_agt_spuas);
  $tampil_sep_spuas = mysqli_fetch_array($result_sep_spuas);
  $tampil_okt_spuas = mysqli_fetch_array($result_okt_spuas);
  $tampil_nov_spuas = mysqli_fetch_array($result_nov_spuas);
  $tampil_des_spuas = mysqli_fetch_array($result_des_spuas);

  echo "FI= ";
  echo $tampil_mar_spuasfi['rekapitulasi'];
  echo " FT= ";
  echo $tampil_mar_spuas['rekapitulasi'];
 ?>
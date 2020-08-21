<?php
session_start();
include "header.php";
?>
<!-- Main content -->
<section class="content">
    <?php

    error_reporting(0);

    $page = $_GET['p'];

    if($page=="home"){
        include "home.php";
    }else if($page=="register"){
        include "register.php";
    }else if($page=="login"){
        include "login.php";
            //dokter
    }else if($page=="tambah_dokter"){
        include "tambah_dokter.php";
    }else if($page=="data_dokter"){
        include "data_dokter.php";
    }else if($page=="edit_dokter"){
        include "edit_dokter.php";
            //obat
    }else if($page=="data_obat"){
        include "data_obat.php";
    }else if($page=="tambah_obat"){
        include "tambah_obat.php";
    }else if($page=="edit_obat"){
        include "edit_obat.php";
            //hewan
    }else if($page=="tambah_hewan"){
        include "tambah_hewan.php";
    }else if($page=="data_hewan"){
        include "data_hewan.php";
    }else if($page=="edit_hewan"){
        include "edit_hewan.php";
            //poemeriksaan
    }else if($page=="tambah_pemeriksaan"){
        include "tambah_pemeriksaan.php";
    }else if($page=="data_pemeriksaan"){
        include "data_pemeriksaan.php";
    }else if($page=="edit_pemeriksaan"){
        include "edit_pemeriksaan.php";
    }else if($page=="ajax_detail_hewan"){
        include "ajax_detail_hewan.php";
    }else if($page=="detail_pemeriksaan"){
        include "detail_pemeriksaan.php";
             //laporan
    }else if($page=="laporan_pemeriksaan"){
        include "laporan_pemeriksaan.php";
    }else if($page=="awal=&akhir=&submit=Lihat+Laporan"){
        include "awal=&akhir=&submit=Lihat+Laporan.php";
        
    }else if($page=="datapenjualan"){
        include "datapenjualan.php";
    }else{
        include 'home.php';
    }

    ?>
</section>
<?php
include "footer.php";
?>
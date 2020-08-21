<?php

include "koneksi.php";

$tanggal = date("Y-m-d H:i:s");
$kode_hewan = $_POST['kode_hewan'];
$kode_dokter = $_POST['kode_dokter'];
$kode_obat = $_POST['kode_obat'];
$sakit = $_POST['sakit'];
$harga = $_POST['harga'];

$insert = mysqli_query($mysqli, "insert into tbl_pemeriksaan set tanggal='$tanggal', kode_hewan='$kode_hewan', kode_dokter='$kode_dokter', kode_obat='$kode_obat', sakit='$sakit', harga='$harga'");
if($insert){
    echo "<script>alert('proses tambah pemeriksaan berhasil');window.location.href='index.php?p=datapemeriksaan'</script>";
}else{
    echo "<script>alert('proses tambah pemeriksaan gagal');window.history.go(-1);</script>";
}
?>
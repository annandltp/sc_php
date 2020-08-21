<?php

include "koneksi.php";
$id = $_GET['id'];
$tanggal = $_POST['tanggal'];
$kode_hewan = $_POST['kode_hewan'];
$kode_dokter = $_POST['kode_dokter'];
$kode_obat = $_POST['kode_obat'];
$sakit = $_POST['sakit'];
$harga = $_POST['harga'];

$update = mysqli_query($mysqli, "update tbl_pemeriksaan set tanggal='$tanggal', kode_hewan='$kode_hewan', kode_dokter='$kode_dokter', kode_obat='$kode_obat', sakit='$sakit', harga='$harga' where kode_pemeriksaan='$id'");
if($update){
    echo "<script>alert('proses tambah pemeriksaan berhasil');window.location.href='index.php?p=datapemeriksaan'</script>";
}else{
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}

?>
<?php

include "koneksi.php";
$id = $_GET['id'];
$nama_hewan = $_POST['nama_hewan'];
$nama_pemilik = $_POST['nama_pemilik'];
$jenis_hewan = $_POST['jenis_hewan'];

$update = mysqli_query($mysqli, "update tbl_hewan set nama_hewan='$nama_hewan', nama_pemilik='$nama_pemilik', jenis_hewan='$jenis_hewan' where kode_hewan='$id' ");
if($update){
    echo "<script>alert('proses edit berhasil');window.location.href='index.php?p=historistock'</script>";
}else{
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}

?>
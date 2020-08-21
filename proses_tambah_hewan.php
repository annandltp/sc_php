<?php

include "koneksi.php";

$nama_hewan = $_POST['nama_hewan'];
$nama_pemilik = $_POST['nama_pemilik'];
$jenis_hewan = $_POST['jenis_hewan'];

$insert = mysqli_query($mysqli, "insert into tbl_hewan set nama_hewan='$nama_hewan', nama_pemilik='$nama_pemilik', jenis_hewan='$jenis_hewan'");
if($insert){
    echo "<script>alert('proses tambah hewan berhasil');window.location.href='index.php?p=datahewan'</script>";
}else{
    echo "<script>alert('proses tambah hewan gagal');window.history.go(-1);</script>";
}
?>
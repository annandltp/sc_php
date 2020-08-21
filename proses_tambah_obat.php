<?php

include "koneksi.php";

$nama_obat = $_POST['nama_obat'];
$harga = $_POST['harga'];

$insert = mysqli_query($mysqli, "insert into tbl_obat set nama_obat='$nama_obat', harga='$harga'");
if($insert){
    echo "<script>alert('proses tambah stock berhasil');window.location.href='index.php?p=databarang'</script>";
}else{
    echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
}
?>
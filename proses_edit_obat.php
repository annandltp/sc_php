<?php

include "koneksi.php";
$id = $_GET['id'];
$nama_obat = $_POST['nama_obat'];
$harga = $_POST['harga'];

$update = mysqli_query($mysqli, "update tbl_obat set nama_obat='$nama_obat', harga='$harga' where kode_obat='$id' ");
if($update){
    echo "<script>alert('proses edit berhasil');window.location.href='index.php?p=historistock'</script>";
}else{
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}

?>
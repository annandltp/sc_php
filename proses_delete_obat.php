<?php

include "koneksi.php";

//$idBarang = $_GET['idBarang'];
$id = $_GET['id'];
//$stok = $_GET['stok'];

$delete = mysqli_query($mysqli, "delete from tbl_obat where kode_obat='$id'");
if($delete){
    //mysqli_query($mysqli, "update barang set tbl_obat=tbl_obat-$stok where idBarang='$idBarang' ");
    echo "<script>alert('proses delete berhasil');window.location.href='index.php?p=databarang'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
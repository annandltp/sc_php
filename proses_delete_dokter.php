<?php
include "koneksi.php";

$data = mysqli_fetch_array(mysqli_query($mysqli, "select * 
		from tbl_dokter where kode_dokter='$_GET[id]'"));

if($data['foto_dokter'] != "")
	unlink("images/dokter/$data[foto_dokter]");

$delete = mysqli_query($mysqli, "delete from tbl_dokter where kode_dokter='$_GET[id]'");
if($delete){
	echo "<script>alert('proses delete berhasil');window.location.href='index.php?p='</script>";
}else{
	echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>
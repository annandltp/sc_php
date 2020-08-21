<?php

include "koneksi.php";

$data = mysqli_fetch_array(mysqli_query($mysqli, "select * 
	from tbl_dokter where kode_dokter='$_GET[id]'"));

if($data['foto_dokter'] != "")
	unlink("images/dokter/$data[foto_dokter]");

$nama_gambar = $_FILES['foto_dokter']['name']; //untuk menunjukkan nama file
	$lokasi_gambar = $_FILES['foto_dokter']['tmp_name']; //untuk menunjukkan lokasi file
	$tipe_gambar = $_FILES['foto_dokter']['type']; //untuk menujukkan tipe file

	$fotoname = date('mdYHis');
	$id = $_GET['id'];
	$nama_dokter = $_POST['nama_dokter'];
	$foto = $fotoname.$nama_gambar;

	if($lokasi_gambar==""){
		$update = mysqli_query($mysqli,"update tbl_dokter set nama_dokter='$nama_dokter' where kode_dokter='$id'");
	}else{
		move_uploaded_file($lokasi_gambar, "images/dokter/$foto");
		$update = mysqli_query($mysqli,"update tbl_dokter set nama_dokter='$nama_dokter', foto_dokter='$foto' where kode_dokter='$id'");
	}

	if($update){
		echo "<script>alert('proses edit berhasil');window.location.href='index.php?p=databarang'</script>";
	}else{
		echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
	}

	?>




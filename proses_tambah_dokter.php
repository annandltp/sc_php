<?php

include "koneksi.php";

	$nama_gambar = substr($_FILES['foto_dokter']['name'],-5); //untuk menunjukkan nama file
	$lokasi_gambar = $_FILES['foto_dokter']['tmp_name']; //untuk menunjukkan lokasi file
	$tipe_gambar = $_FILES['foto_dokter']['type']; //untuk menujukkan tipe file

	$fotoname = date('mdYHis');

	$nama_dokter = $_POST['nama_dokter'];
	$foto = $fotoname.$nama_gambar;

	if($lokasi_gambar==""){
		$insert = mysqli_query($mysqli,"insert into tbl_dokter set nama_dokter='$nama_dokter'");
	}else{
		move_uploaded_file($lokasi_gambar, "images/dokter/$foto");
		$insert = mysqli_query($mysqli,"insert into tbl_dokter set nama_dokter='$nama_dokter', foto_dokter='$foto'  ");
	}

	if($insert){
		echo "<script>alert('proses tambah hewan berhasil');window.location.href='index.php?p=datahewan'</script>";
	}else{
		echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
	}

	?>
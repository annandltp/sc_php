<?php

include "koneksi.php";

$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);



$cek = mysqli_query($mysqli, "select * from tbl_user where username='$username' ");
if(mysqli_num_rows($cek) < 1){





	$insert = mysqli_query($mysqli,"insert into tbl_user set nama_user='$nama_user', username='$username', password='$password'  ");
	if($insert){
		echo "<script>alert('proses simpan berhasil');window.location.href='index.php?p=login'</script>";
	}else{
		echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
	}





}else{
	echo "<script>alert('username sudah dipakai');window.history.go(-1);</script>";
}






?>
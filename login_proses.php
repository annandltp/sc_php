<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$cek = mysqli_query($mysqli,"select * from tbl_user where username='$username' and password='$password' ");
if(mysqli_num_rows($cek)>0){

    $_SESSION['username'] = "$username";
    echo "<script>window.location.href='index.php'</script>";

}else{
    echo "<script>alert('username belum terdaftar');window.history.go(-1);</script>";
}

?>
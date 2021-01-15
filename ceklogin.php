<?php
session_start();

include ("koneksi.php");

$username =$_POST['username'];
$password =md5($_POST['password']);

$data=mysqli_query($koneksi,"SELECT * FROM admin where username='$username' and password='$password'");
$jumlah=mysqli_fetch_array($data);
$cek=mysqli_num_rows($data);

if ($cek>0) {
	$_SESSION['username']=$jumlah['username'];
	$_SESSION['password']=$jumlah['password'];

	echo "<center>Login Berhasil<br>
	<b><a href='admin/index.php'>Masuk Ke Halaman Admin</a></b></center>";

}else{
	echo "<center>Gagal, username & password salah!<br>
	<b><a href='login.php'>ULANGI</a></b></center>";
}

//PROSES LOGIN
?>
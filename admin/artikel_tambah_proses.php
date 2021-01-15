<?php
include "koneksi.php";

$nama_ =$_FILES['gambar']['name'];
$lokasi_gambar =$_FILES['gambar']['tmp_name'];
$tipe_gambar =$_FILES['gambar']['type'];

if ($lokasi_gambar=="") {
	$input=mysqli_query($koneksi,"INSERT INTO artikel SET 
		id_artikel = '$_POST[id_artikel]',
		judul = '$_POST[judul]',
		isi = '$_POST[isi]',
		tanggal ='$_POST[tanggal]'") or die(mysqli_error($koneksi));	
}else{
	move_uploaded_file($lokasi_gambar, "artikel/$nama_gambar");
	$input=mysqli_query($koneksi,"INSERT INTO artikel SET 
		id_artikel = '$_POST[id_artikel]',
		judul = '$_POST[judul]',
		isi = '$_POST[isi]',
		tanggal ='$_POST[tanggal]',
		gambar ='$nama_gambar'") or die(mysqli_error($koneksi));
}
if ($input) {
	echo "Data Berhasil Ditambahkan";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=artikel'>";
}

?>
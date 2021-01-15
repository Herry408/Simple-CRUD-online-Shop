<?php
include "koneksi.php";

$nama_gambar =$_FILES['gambar']['name'];
$lokasi_gambar =$_FILES['gambar']['tmp_name'];
$tipe_gambar =$_FILES['gambar']['type'];

if ($lokasi_gambar=="") {
	$input=mysqli_query($koneksi,"UPDATE artikel SET 
		judul = '$_POST[judul]',
		tanggal = '$_POST[tanggal]',
		isi ='$_POST[isi]'
		 WHERE id_artikel='$_POST[id_artikel]'") or die(mysqli_error($koneksi));	
}else{

	$data=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='$_POST[id_artikel]'"));
	if ($data['gambar']!="") unlink("artikel/$data[gambar]");

	move_uploaded_file($lokasi_gambar, "artikel/$nama_gambar");
	$input=mysqli_query($koneksi,"UPDATE artikel SET 
		judul = '$_POST[judul]',
		tanggal = '$_POST[tanggal]',
		isi ='$_POST[isi]',
		gambar = '$nama_gambar' WHERE id_artikel='$_POST[id_artikel]'
		") or die(mysqli_error($koneksi));	

}
if ($input) {
	echo "Data Berhasil Dirubah";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=artikel'>";
}

?>
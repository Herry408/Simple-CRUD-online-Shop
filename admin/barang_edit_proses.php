<?php
include "koneksi.php";

$nama_gambar =$_FILES['gambar']['name'];
$lokasi_gambar =$_FILES['gambar']['tmp_name'];
$tipe_gambar =$_FILES['gambar']['type'];

if ($lokasi_gambar=="") {
	$input=mysqli_query($koneksi,"UPDATE barang SET 
		nm_brg = '$_POST[nm_brg]',
		kategori = '$_POST[kategori]',
		jumlah ='$_POST[jumlah]',
		keterangan='$_POST[keterangan]',
		harga='$_POST[harga]' WHERE id_barang='$_POST[id_barang]'") or die(mysqli_error($koneksi));	
}else{

	$data=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$_POST[id_barang]'"));
	if ($data['gambar']!="") unlink("gambar_barang/$data[gambar]");

	move_uploaded_file($lokasi_gambar, "gambar_barang/$nama_gambar");
	$input=mysqli_query($koneksi,"UPDATE barang SET 
		nm_brg = '$_POST[nm_brg]',
		kategori = '$_POST[kategori]',
		jumlah ='$_POST[jumlah]',
		keterangan='$_POST[keterangan]',
		harga='$_POST[harga]',
		gambar = '$nama_gambar' WHERE id_barang='$_POST[id_barang]'
		") or die(mysqli_error($koneksi));	

}
if ($input) {
	echo "Data Berhasil Dirubah";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=barang'>";
}

?>
<?php
include "koneksi.php";

$nama_gambar =$_FILES['gambar']['name'];
$lokasi_gambar =$_FILES['gambar']['tmp_name'];
$tipe_gambar =$_FILES['gambar']['type'];

if ($lokasi_gambar=="") {
	$input=mysqli_query($koneksi,"INSERT INTO barang SET 
		id_barang = '$_POST[id_barang]',
		nm_brg = '$_POST[nm_brg]',
		kategori = '$_POST[kategori]',
		jumlah ='$_POST[jumlah]',
		keterangan='$_POST[keterangan]',
		harga='$_POST[harga]'") or die(mysqli_error($koneksi));	
}else{
	move_uploaded_file($lokasi_gambar, "gambar_barang/$nama_gambar");
	$input=mysqli_query($koneksi,"INSERT INTO barang SET 
		id_barang = '$_POST[id_barang]',
		nm_brg = '$_POST[nm_brg]',
		kategori = '$_POST[kategori]',
		jumlah ='$_POST[jumlah]',
		keterangan='$_POST[keterangan]',
		harga='$_POST[harga]',
		gambar = '$nama_gambar'
		") or die(mysqli_error($koneksi));	

}
if ($input) {
	echo "Data Berhasil Ditambahkan";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=barang'>";
}

?>
<?php
include "koneksi.php";

$data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$_GET[id]'"));
if ($data['gambar']!= "")
 unlink("gambar_barang/$data[gambar]");

$hapus=mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$_GET[id]'")
or die(mysqli_error($koneksi));

if ($hapus) {
	echo "Data Berhasil Dihapus";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=barang'>";
}

?>
<?php
include "koneksi.php";

$data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM artikel WHERE id_artikel='$_GET[id]'"));
if ($data['gambar']!= "") unlink("artikel/$data[gambar]");

$hapus=mysqli_query($koneksi, "DELETE FROM artikel WHERE id_artikel='$_GET[id]'")
or die(mysqli_error($koneksi));

if ($hapus) {
	echo "Data Berhasil Dihapus";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=artikel'>";
}

?>
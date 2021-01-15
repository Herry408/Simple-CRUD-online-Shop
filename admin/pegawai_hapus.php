<?php

$hapus=mysqli_query($koneksi,"DELETE FROM pegawai where id_pegawai='$_GET[id]'") or die(mysqli_error());

if ($hapus) {
	echo "Data Telah Dihapus";
	echo "<meta http-equiv='refresh' content='1; url=index.php?page=pegawai'>";
}
?>
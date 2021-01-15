<?php

include ("koneksi.php");

$input = mysqli_query($koneksi,"INSERT INTO jabatan set
	id_jabatan='$_POST[id_jabatan]',
	nama_jabatan='$_POST[nama_jabatan]',
	gaji='$_POST[gaji]'") or die(mysqli_error($koneksi));

if($input){
echo "Data Berhasil disimpan!!!";
echo "<meta http-equiv='refresh' content='1; url=index.php?page=jabatan'>";
}
?>
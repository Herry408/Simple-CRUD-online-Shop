<?php 

include ("koneksi.php");

$input = mysqli_query($koneksi,"UPDATE jabatan set
	nama_jabatan='$_POST[nama_jabatan]',
	gaji='$_POST[gaji]' WHERE id_jabatan='$_POST[id_jabatan]'") or die(mysqli_error($koneksi));

if($input){
echo "Data Berhasil disimpan!!!";
echo "<meta http-equiv='refresh' content='1; url=index.php?page=jabatan'>";
}
?>
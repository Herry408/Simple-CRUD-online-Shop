<?php

include ("koneksi.php");

$input = mysqli_query($koneksi,"UPDATE pegawai set
	nama='$_POST[nama]',
	id_jabatan='$_POST[id_jabatan]',
	alamat='$_POST[alamat]',
	telp='$_POST[telp]' WHERE id_pegawai='$_POST[id_pegawai]'") or die(mysqli_error($koneksi));

if($input){
echo "Data Berhasil disimpan!!!";
echo "<meta http-equiv='refresh' content='1; url=index.php?page=pegawai'>";
}
?>
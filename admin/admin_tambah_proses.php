<?php

include ("koneksi.php");

$input = mysqli_query($koneksi,"INSERT INTO admin set
	id='$_POST[id]',
	username='$_POST[username]',
	password=md5('$_POST[password]'),
	Nama='$_POST[Nama]'") or die(mysqli_error($koneksi));

if($input){
echo "Data Berhasil disimpan!!!";
echo "<meta http-equiv='refresh' content='1; url=index.php?page=admin'>";
}
?>
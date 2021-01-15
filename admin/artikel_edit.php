<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='$_GET[id]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);
?>

<h2>Edit Data Artikel</h2>
<hr>
  <form method="post" action="index.php?page=artikel_edit_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  
  <input type="hidden" name="id_artikel" class="form-control" value="<?=$data['id_artikel'];?>">
  
 <div class="row">
    <div class="col-md-4">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" value="<?=$data['judul'];?>">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Isi</label>
      <textarea class="form-control" name="isi"><?=$data['isi'];?></textarea>
  </div>
  </div>

   <div class="row">
    <div class="col-md-4">
      <label>Tanggal</label>
      <input type="date" name="tanggal" class="form-control" value="<?=$data['tanggal'];?>">
  </div>
  </div>
  
   <div class="row">
    <div class="col-md-4">
      <label>Gambar</label>
      <img src="artikel/<?=$data['gambar'];?>" height="80px" widht="80px">
      <input type="file" name="gambar" class="form-control" required="">
  </div>
  </div>
  <hr>
  
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=artikel"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
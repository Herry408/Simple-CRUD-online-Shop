<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);
?>

<h2>Edit Data Jabatan</h2>
<hr>
  <form method="post" action="index.php?page=jabatan_edit_proses" enctype="multipart/form-data">
  <table cellpadding="8">


<input type="hidden" name="id_jabatan" class="form-control" value="<?=$data['id_jabatan'];?>">

 <div class="row">
    <div class="col-md-4">
      <label>Nama Jabatan</label>
      <input type="text" name="nama_jabatan" class="form-control" required="" value="<?=$data['nama_jabatan'];?>">
  </div>
  </div>
  
 <div class="row">
    <div class="col-md-4">
      <label>Gaji</label>
      <input type="text" name="gaji" class="form-control" required="" value="<?=$data['gaji'];?>">
  </div>
  </div>
   

  </div><br><br>
 
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=jabatan"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
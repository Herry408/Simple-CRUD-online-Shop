<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$_GET[id]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);
?>

<h2>Edit Data Admin</h2>
<hr>
  <form method="post" action="index.php?page=admin_edit_proses" enctype="multipart/form-data">
  <table cellpadding="8">


<input type="hidden" name="id" class="form-control" value="<?=$data['id'];?>">

 <div class="row">
    <div class="col-md-4">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required="" value="<?=$data['username'];?>">
  </div>
  </div>
  
 <div class="row">
    <div class="col-md-4">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required="" value="<?=$data['password'];?>">
  </div>
  </div>
   
 <div class="row">
    <div class="col-md-4">
      <label>Nama</label>
      <input type="text" name="Nama" class="form-control" required="" value="<?=$data['Nama'];?>">
  </div>
  </div><br><br>
 
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=admin"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
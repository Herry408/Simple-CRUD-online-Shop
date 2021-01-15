<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan WHERE id_pegawai='$_GET[id]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);
?>

<h2>Edit Data Admin</h2>
<hr>
  <form method="post" action="index.php?page=pegawai_edit_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  <input type="hidden" name="id_pegawai" value="<?php echo"".$data['id_pegawai']."";?>">

 <div class="row">
    <div class="col-md-4">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required="" value="<?php echo "".$data['nama']."";?>">
  </div>
  </div>
  
 <div class="row">
    <div class="col-md-4">
      <label>Jabatan</label>
     <select class="form-control" name="id_jabatan" required="">
       <option>-Pilih Jabatan-</option>
       <option value="<?php echo ("".$data['id_jabatan']."");?>">
        <?php echo"".$data['nama_jabatan']."";?></option>
     </select>
  </div>
  </div>
   
 <div class="row">
    <div class="col-md-4">
      <label>Alamat</label>
     <textarea class="form-control" name="alamat" required><?php echo $data['alamat'];?></textarea>
  </div>
  </div><br><br>

  <div class="row">
    <div class="col-md-4">
      <label>Telp</label>
      <input class="form-control" type="number" name="telp" required="
      " value="<?php echo "".$data['telp']."";?>">
    </div>
  </div>
 
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=pegawai"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>

 
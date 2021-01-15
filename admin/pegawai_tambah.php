<h2>Tambah Data Admin</h2>
<hr>
  <form method="post" action="index.php?page=pegawai_tambah_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  <div class="row">
    <div class="col-md-4">
      <label>ID</label>
      <input type="text" name="id_pegawai" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" required="">
  </div>
  </div>
  
 <div class="row">
    <div class="col-md-4">
      <label>Jabatan</label>
     <select class="form-control" name="id_jabatan" required="">
       <option>-Pilih Jabatan-</option>
       <?php 
       include "koneksi.php";
        $query = "SELECT * FROM jabatan";
        $jabatan = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      while ($data=mysqli_fetch_array($jabatan)) {
       ?>
       <option value="<?php echo"".$data['id_jabatan']."";?>"><?php echo"".$data['nama_jabatan']."";?></option>
     <?php  } ;?>
     </select>
  </div>
  </div>
   
 <div class="row">
    <div class="col-md-4">
      <label>Alamat</label>
     <textarea class="form-control" name="alamat" required=""></textarea>
  </div>
  </div><br><br>

  <div class="row">
    <div class="col-md-4">
      <label>Telp</label>
      <input class="form-control" type="number" name="telp" required="
      ">
    </div>
  </div>
 
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=pegawai"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>

 
<h2>Tambah Data Jabatan</h2>
<hr>
  <form method="post" action="index.php?page=jabatan_tambah_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  <div class="row">
    <div class="col-md-4">
      <label>ID</label>
      <input type="text" name="id_jabatan" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Nama Jabatan</label>
      <input type="text" name="nama_jabatan" class="form-control" required="">
  </div>
  </div>
  
 <div class="row">
    <div class="col-md-4">
      <label>Gaji</label>
      <input type="text" name="gaji" class="form-control" required="">
  </div>
  </div>
   
 
  </div><br><br>
 
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=jabatan"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
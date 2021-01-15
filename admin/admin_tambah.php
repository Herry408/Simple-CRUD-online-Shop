<h2>Tambah Data Admin</h2>
<hr>
  <form method="post" action="index.php?page=admin_tambah_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  <div class="row">
    <div class="col-md-4">
      <label>ID</label>
      <input type="text" name="id" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Username</label>
      <input type="text" name="username" class="form-control" required="">
  </div>
  </div>
  
 <div class="row">
    <div class="col-md-4">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required="">
  </div>
  </div>
   
 <div class="row">
    <div class="col-md-4">
      <label>Nama</label>
      <input type="text" name="Nama" class="form-control" required="">
  </div>
  </div><br><br>
 
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=admin"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
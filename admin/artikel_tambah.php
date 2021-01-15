<h2>Tambah Data Artikel</h2>
<hr>
  <form method="post" action="index.php?page=artikel_tambah_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  <div class="row">
    <div class="col-md-4">
      <label>ID Artikel</label>
      <input type="text" name="id_artikel" id="id_artikel" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Isi</label>
      <textarea class="form-control" name="isi" required=""></textarea>
  </div>
  </div>

   <div class="row">
    <div class="col-md-4">
      <label>Tanggal</label>
      <input type="date" name="tanggal" class="form-control" required="">
  </div>
  </div>
  
   <div class="row">
    <div class="col-md-4">
      <label>Gambar</label>
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
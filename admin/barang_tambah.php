<h2>Tambah Data Barang</h2>
<hr>
  <form method="post" action="index.php?page=barang_tambah_proses" enctype="multipart/form-data">
  <table cellpadding="8">

  <div class="row">
    <div class="col-md-4">
      <label>ID Barang</label>
      <input type="text" name="id_barang" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Nama Barang</label>
      <input type="text" name="nm_brg" class="form-control" required="">
  </div>
  </div>
  
   <div class="row">
    <div class="col-md-4">
      <label>Kategori</label>
      <select class="form-control" name="kategori" required="">
        <option value="">Pilih Kategori</option>
        <option value="Sepatu">Sepatu</option>
        <option value="Celana">Celana</option>
        <option value="Tshirt">T-Shirt</option>
        <option value="Jaket">Jaket</option>
      </select>    
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Jumlah</label>
      <input type="text" name="jumlah" class="form-control" required="">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Keterangan</label>
      <textarea class="form-control" name="keterangan" required="">Masukkan Kterangan Barang....</textarea>
  </div>
  </div>

   <div class="row">
    <div class="col-md-4">
      <label>Harga</label>
      <input type="text" name="harga" class="form-control" required="">
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
  <a href="index.php?page=barang"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
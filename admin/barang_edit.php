<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$_GET[id]'") or die(mysqli_error());
$data=mysqli_fetch_array($sql);
?>

<h2>Edit Data Barang</h2>
<hr>
  <form method="post" action="index.php?page=barang_edit_proses" enctype="multipart/form-data">
  <table cellpadding="8">
  
      <input type="hidden" name="id_barang" class="form-control" value="<?=$data['id_barang'];?>">
  
 <div class="row">
    <div class="col-md-4">
      <label>Nama Barang</label>
      <input type="text" name="nm_brg" class="form-control" required="" value="<?=$data['nm_brg'];?>">
  </div>
  </div>
  
   <div class="row">
    <div class="col-md-4">
      <label>Kategori</label>
      <select class="form-control" name="kategori" required="">
        <option value="">Pilih Kategori</option>
        <option value="Sepatu"<?php if($data['kategori'] == 'Sepatu'){echo"selected=='selected'";}?>>Sepatu</option>
        <option value="Celana"<?php if($data['kategori'] == 'Celana'){echo"selected=='selected'";}?>>Celana</option>
        <option value="Tshirt"<?php if($data['kategori'] == 'Tshirt'){echo"selected=='selected'";}?>>T-Shirt</option>
        <option value="Jaket"<?php if($data['kategori'] == 'Jaket'){echo"selected=='selected'";}?>>Jaket</option>
      </select>    
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Jumlah</label>
      <input type="text" name="jumlah" class="form-control" required="" value="<?=$data['jumlah'];?>">
  </div>
  </div>

 <div class="row">
    <div class="col-md-4">
      <label>Keterangan</label>
      <textarea class="form-control" name="keterangan" required=""><?=$data['keterangan'];?></textarea>
  </div>
  </div>

   <div class="row">
    <div class="col-md-4">
      <label>Harga</label>
      <input type="text" name="harga" class="form-control" required="" value="<?=$data['harga'];?>">
  </div>
  </div>
  
   <div class="row">
    <div class="col-md-4">
      <label>Gambar</label>
      <img src="gambar_barang/<?=$data['gambar'];?>" height="80px" widht="80px"><br>
      <input type="file" name="gambar" class="form-control">
  </div>
  </div>
  <hr>
  
  <div class="row">
    <div class="col-md-4">
  <input type="submit" value="Simpan" class="button btn-success">
  <a href="index.php?page=barang"><input type="button" value="Batal" class="button btn-danger"></a>
  </form>
  </div>
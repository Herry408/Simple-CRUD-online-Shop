  <h2>Data Barang</h2>        
  <hr>
<a href="index.php?page=map">Tambah Data</a>
<br><br>

  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th></th>
      </tr>
    </thead>

<?php
include "koneksi.php";

$query=mysqli_query($koneksi, "SELECT * FROM barang");
$no=1;
foreach ($query as $data) {

  echo "
  <tbody>
      <tr>
        <td>$no</td>
        <td>".$data['id_barang']."</td>
        <td>".$data['nm_brg']."</td>
        <td>".$data['kategori']."</td>
        <td>".$data['jumlah']."</td>
        <td>".$data['keterangan']."</td>
        <td>".$data['harga']."</td>
        <td><img src='gambar_barang/".$data['gambar']."' widht='80px' height='80px'></td>
        <td>
          <a href='index.php?page=barang_edit&id=".$data['id_barang']."'>Edit</a> |
         <a href='index.php?page=barang_hapus&id=".$data['id_barang']."'>Hapus</a>
        </td>
      </tr>
    </tbody>
  ";
$no++;
}

?>
    
  </table>
  </div>



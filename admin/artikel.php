  <h2>Data Artikel</h2>        
  <hr>
<a href="index.php?page=artikel_tambah">Tambah Data</a>
<br><br>

  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Isi</th>
        <th>Tanggal</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th></th>
      </tr>
    </thead>

<?php
include "koneksi.php";

$query=mysqli_query($koneksi, "SELECT * FROM artikel");
$no=1;
foreach ($query as $data) {

  echo "
  <tbody>
      <tr>
        <td>$no</td>
        <td>".$data['id_artikel']."</td>
        <td>".$data['isi']."</td>
        <td>".$data['tanggal']."</td>
        <td>".$data['judul']."</td>
        <td><img src='artikel/".$data['gambar']."' widht='80px' height='80px'></td>
        <td>
          <a href='index.php?page=artikel_edit&id=".$data['id_artikel']."'>Edit</a> |
         <a href='index.php?page=artikel_hapus&id=".$data['id_artikel']."'>Hapus</a>
        </td>
      </tr>
    </tbody>
  ";
$no++;
}

?>
    
  </table>
  </div>



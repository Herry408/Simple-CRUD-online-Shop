<h2 class="header">Data Jabatan</h2>       
<hr>
<a href="index.php?page=jabatan_tambah">Tambah Data</a>
<br><br>

 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Jabatan</th>
        <th>Gaji</th>
      </tr>
    </thead>

<?php
include "koneksi.php";
$query=mysqli_query($koneksi, "SELECT * FROM  jabatan");
$no=1; 
foreach ($query as $data) {

echo"
<tbody>
      <tr>
        <td>$no</td>
        <td>".$data['id_jabatan']."</td>
        <td>".$data['nama_jabatan']."</td>
        <td>".$data['gaji']."</td>
        <td>
         <a href='index.php?page=jabatan_edit&id=".$data['id_jabatan']."'>Edit</a> |
         <a href='index.php?page=jabatan_hapus&id=".$data['id_jabatan']."'>Hapus</a>
         </td>
        
      </tr>
    </tbody>";
$no++;
}
?>    
  </table>
  </div>

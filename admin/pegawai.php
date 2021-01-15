<h2 class="header">Data Pegawai</h2>       
<hr>
<a href="index.php?page=pegawai_tambah">Tambah Data</a>
<br><br>

 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Pegawai</th>
        <th>Jabatan</th>
        <th>Gaji</th>
        <th>Telp</th>
        <th>Alamat</th>
      </tr>
    </thead>

<?php
include "koneksi.php";
$query=mysqli_query($koneksi, "SELECT * FROM pegawai JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan");
$no=1; 
foreach ($query as $data) {

echo"
<tbody>
      <tr>
        <td>$no</td>
        <td>".$data['id_pegawai']."</td>
        <td>".$data['nama']."</td>
        <td>".$data['nama_jabatan']."</td>
        <td>".$data['gaji']."</td>
        <td>".$data['telp']."</td>
        <td>".$data['alamat']."</td>
        
        <td>
         <a href='index.php?page=pegawai_edit&id=".$data['id_pegawai']."'>Edit</a> |
         <a href='index.php?page=pegawai_hapus&id=".$data['id_pegawai']."'>Hapus</a>
         </td>
        
      </tr>
    </tbody>";
$no++;
}
?>    
  </table>
  </div>

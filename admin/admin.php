<h2 class="header">Data Admin</h2>       
<hr>
<a href="index.php?page=admin_tambah">Tambah Data</a>
<br><br>

 <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
      </tr>
    </thead>

<?php
include "koneksi.php";
$query=mysqli_query($koneksi, "SELECT * FROM admin order by id");
$no=1; 
foreach ($query as $data) {

echo"
<tbody>
      <tr>
        <td>$no</td>
        <td>".$data['id']."</td>
        <td>".$data['username']."</td>
        <td>".$data['password']."</td>
        <td>".$data['Nama']."</td>
        
        <td>
         <a href='index.php?page=admin_edit&id=".$data['id']."'>Edit</a> |
         <a href='index.php?page=admin_hapus&id=".$data['id']."'>Hapus</a>
         </td>
        
      </tr>
    </tbody>";
$no++;
}
?>    
  </table>
  </div>



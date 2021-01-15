<div class="catalog container text-center">    
  <h1>All Of the Best Products</h1><br>

  <?php
        include "koneksi.php";

        $query = "SELECT * FROM barang order by id_barang asc";
        $hasil = mysqli_query($koneksi, $query) or die (mysqli_error());

        while ($row=mysqli_fetch_array($hasil)) {
      
       
        ?>
  <div class="row">
    <div class="col-sm-4">
      <img src="admin/gambar_barang/<?php echo"".$row['gambar']."";?>"  class="img-responsive" style="width:100%" alt="Image">
      <h4><strong><?php echo"".$row['nm_brg']."";?></strong></h4>
      <p>IDR : <?php echo "".$row['harga']."";?></p>
      <p>Stok : <?php echo "".$row['jumlah']."";?></p>
      <button class="button btn-danger btn-xs">Buy</button>
    </div>
<?php
}
?>
 </div>
</div><br><br>
<br>

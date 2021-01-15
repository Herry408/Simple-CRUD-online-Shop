<div class="artikel container">
    <h1 align="center">Our Articles</h1><hr><br>
    <?php
      include "koneksi.php";
      $query="SELECT * FROM artikel order by id_artikel DESC";
      $hasil=mysqli_query($koneksi, $query) or die(mysqli_error());

      while ($row=mysqli_fetch_array($hasil)) {
        $isi = substr($row['isi'], 0,500);
        $isi = substr($row['isi'], 0,strrpos($isi, " "));
    ?>

    <div class="row">
    <div class="col-md-4">
    <img src="admin/artikel/<?php echo"".$row['gambar']."";?>" class="img-responsive">
    </div>
    <div class="col-md-8" align="left">
      <h3 style="color: orange"><strong><?php echo "".$row['judul'].""?></strong></h3><br>
      <?php echo"$isi";?><br>
      <a href="index.php?page=artikel_detail&id=<?php echo"".$row['id_artikel']."";?>" class="button btn-danger btn-xs">Baca Selengkapnya</a>
      <p><?php echo"".$row['tanggal']."";?></p>
    </div>
  </div>

  <?php
}
?>
</div>
</div>
</div><br>
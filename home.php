<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Let's Shop Now!!!</h3>
          <p>Check Our Store Now</p>
        </div>      
      </div>

      <div class="item">
        <img src="image/2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Good Quality</h3>
          <p>The best quality of our Products</p>
        </div>      
      </div>

    <div class="item">
        <img src="image/3.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Not Broke Your Wallet</h3>
          <p>Have all new experience Shopping</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="row text-center">
<img src="image/tokio.png">
</div>  
<div class="catalog container text-center">    
  <h1>Check Our Store</h1><hr><br>

  <?php
        include "koneksi.php";

        $query = "SELECT * FROM barang order by id_barang asc";
        $hasil = mysqli_query($koneksi, $query) or die (mysqli_error());

        while ($row=mysqli_fetch_array($hasil)) {
      
       
        ?>
  <div class="row">
    <div class="col-sm-4">
      <img src="admin/gambar_barang/<?php echo"".$row['gambar']."";?>"  class="img-responsive" alt="Img">
      <h4><strong><?php echo"".$row['nm_brg']."";?></strong></h4>
      <p>IDR : <?php echo "".$row['harga']."";?></p>
      <p>Stok : <?php echo "".$row['jumlah']."";?></p>
      <button class="button btn-danger btn-xs">Buy</button>
    </div>
<?php
}
?>
 </div>
</div><br>


<div class="container-fluid">
  <img src="image/body.jpg" class="img-responsive" alt="body" style="width: 100%">
</div>

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
    <div class="col-md-7" align="left">
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


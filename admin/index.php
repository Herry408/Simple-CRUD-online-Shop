<?php
  session_start();

  if(!empty($_SESSION['username']) and !empty($_SESSION['password'])){

  include("koneksi.php");

  define("INDEX", true); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/jquery.min.js"></script>
  <script src=../"bootstrap/js/bootstrap.min.js"></script>
  
  <!--INI CSS INLINE-->
  <style>
    /* css menu*/ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    .row.content {height: 600px}
    
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
      color: orange;
    }
    
    /* set warna footter jadi abu */
    /* media screen untuk halaman */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<!--INI MENU NAVIGASI-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TOKIO Online Shop Administrator</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-left">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p class="button"><a href="index.php?page=home">Beranda</a></p>
      <p class="button"><a href="index.php?page=admin">Data Admin</a></p>
      <p class="button"><a href="index.php?page=barang">Data Barang</a></p>
      <p class="button"><a href="index.php?page=artikel">Data Artikel</a></p>
      <p class="button"><a href="index.php?page=pegawai">Data Pegawai</a></p>
      <p class="button"><a href="index.php?page=jabatan">Data Jabatan & Gaji</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
     
  
  <!--INI KONTEN-->   
  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'home':
        include "home.php";
        break;
    
      case 'barang':
        include "barang.php";
        break;
    
      case 'barang_tambah':
      include "barang_tambah.php";
      break;

      case 'barang_tambah_proses':
      include "barang_tambah_proses.php";
      break;

      case 'barang_edit':
        include "barang_edit.php";
        break;

      case 'barang_edit_proses':
        include "barang_edit_proses.php";
        break;

        case 'barang_hapus':
          include "barang_hapus.php";
          break;
 
      case 'artikel':
        include "artikel.php";
        break;    
    
      case 'artikel_tambah':
        include "artikel_tambah.php";
        break;
  
      case 'artikel_tambah_proses':
        include "artikel_tambah_proses.php";
        break;

      case 'artikel_edit':
        include "artikel_edit.php";
        break;

        case 'artikel_edit_proses':
          include "artikel_edit_proses.php";
          break;

        case 'artikel_hapus':
          include "artikel_hapus.php";
          break;

      case 'admin':
        include "admin.php";
        break;

      case 'admin_tambah':
        include "admin_tambah.php";
        break;

      case 'admin_tambah_proses':
        include "admin_tambah_proses.php";
        break;
      
      case 'admin_edit':
        include "admin_edit.php";
        break;
      
      case 'admin_edit_proses':
        include "admin_edit_proses.php";
        break;

        case 'admin_hapus':
          include "admin_hapus.php";
          break;

          case 'pegawai':
          include "pegawai.php";
              break;

          case 'pegawai_tambah':
            include "pegawai_tambah.php";
            break;

          case 'pegawai_tambah_proses':
            include "pegawai_tambah_proses.php";
            break;

          case 'pegawai_edit':
            include "pegawai_edit.php";
            break;

          case 'pegawai_edit_proses':
            include "pegawai_edit_proses.php";
            break;


          case 'pegawai_hapus':
            include "pegawai_hapus.php";
            break;

            case 'jabatan':
            include "jabatan.php";
              break;

          case 'jabatan_tambah':
            include "jabatan_tambah.php";
            break;

          case 'jabatan_tambah_proses':
            include "jabatan_tambah_proses.php";
            break;

          case 'jabatan_edit':
            include "jabatan_edit.php";
            break;

          case 'jabatan_edit_proses':
            include "jabatan_edit_proses.php";
            break;

          case 'jabatan_hapus':
            include "jabatan_hapus.php";
            break;
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "home.php";
  }?>
  
    
  </div>
</div>
</body>
</html>

<?php
  }else{
    echo "Dilarang Membuka Halaman Ini";
    header('location:../login.php');
  }

?>
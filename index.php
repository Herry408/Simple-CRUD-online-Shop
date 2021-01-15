<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOKIO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color:white;
    }
  
  
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }
  
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TOKIO</a>
    </div>
  
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="index.php?page=produk">Produk</a></li>
        <li><a href="index.php?page=artikel">Article</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login Admin</a></li>
      </ul>
    </div>
  </div>
</nav>


<!--INI KONTEN-->
<?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'home':
        include "home.php";
        break;
    
      case 'produk':
        include "produk.php";
        break;
        case 'about':
          include "about.php";
          break;

        case 'artikel':
        include "artikel.php";
          break;
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "home.php";
  }?>

<!--Bagian Footer-->
<div class="container-fluid">
<div class="row" align="center">
<div class="col-sm-4">
          <div class="well contact" style="background-color: grey">
            <h4 style="color: orange;">Our Contact</h4>
            <p style="color: orange;">0878888888</p> 
            <p style="color: orange;">yahoo@gmail.com</p> 
            <p style="color: orange;">Tabanan, Bali</p> 
          </div>
        </div>
<div class="col-sm-4">
          <div class="well blog" style="background-color: grey">
            <h4 style="color: orange;">Other Sites</h4>
            <p style="color: orange;">www.aaaa.com</p> 
            <p style="color: orange;">www.bbb.com</p> 
            <p style="color: orange;">www.ccc.com</p> 
          </div>
        </div>
<div class="col-sm-4">
          <div class=" well map" style="background-color: grey">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.307618282719!2d115.11736211433525!3d-8.566390589262843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a22c8a00d67%3A0x7fbbf6627aea092!2sJl.%20Bongan%20Lebah%20Kelod%2C%20Bongan%2C%20Kec.%20Tabanan%2C%20Kabupaten%20Tabanan%2C%20Bali%2082121!5e0!3m2!1sen!2sid!4v1578250600004!5m2!1sen!2sid" width="200" height="120" frameborder="0" style="border:0;" allowfullscreen=""></iframe> 
          </div>
        </div>
  </div>
 </div> 
<footer class="container-fluid text-center">
  <p style="color: orange">Agung Dipa | Stikom Bali</p>
</footer>
<script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

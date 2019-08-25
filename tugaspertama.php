<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>Tugas Pertama</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Tugas PWPB 1</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TugasPertama.php">Tugas Pertama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TugasKedua.php">Tugas Kedua</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tugas Ketiga</a>
      </li>    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">BIODATA</h1>
    <p class="lead">kelompok kami</p>
    <img src="hai.gif" width="30%">
  </div>
</div>

 <?php

        $nama_satu = "Rizki Yudistira";

        $umur_satu = 16;

        $tinggi_satu = 169;



        $nama_dua = "Agustian Sapta";

        $umur_dua = 16;

        $tinggi_dua = 173;



        $nama_tiga = "Taniyah Susanto";

        $umur_tiga = 16;

        $tinggi_tiga = 170;



        $rata_rata = ($tinggi_satu + $tinggi_dua + $tinggi_tiga) / 3;

        ?>
<center>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="rizki.jpg" width="110%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Biodata Ku</h5>
        <p class="card-text">
          Nama Lengkap: <?php echo$nama_satu?></br>

          Umur: <?php echo$umur_satu?> Tahun</br>

          Tinggi Badan: <?php echo$tinggi_satu?> cm</br>
</p>
        <p class="card-text"><small class="text-muted">Salam Kenal</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="tian.jpg" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Biodata Ku</h5>
        <p class="card-text">
          Nama Lengkap: <?php echo$nama_dua?></br>

          Umur: <?php echo$umur_dua?> Tahun</br>

          Tinggi Badan: <?php echo$tinggi_dua?> cm</br>
        </p>
        <p class="card-text"><small class="text-muted">Salam Kenal</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="tania.jpg" width="110%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Biodata Ku</h5>
        <p class="card-text">
          Nama Lengkap: <?php echo$nama_tiga?></br>

          Umur: <?php echo$umur_satu?> tiga</br>

          Tinggi Badan: <?php echo$tinggi_tiga?> cm</br>
        </p>
        <p class="card-text"><small class="text-muted">Salam Kenal</small></p>
      </div>
    </div>
  </div>
</div>

<div id="footer">

              <blockquote class="blockquote">

              <center>

                <p><cite title="Source Title"> ©2019 Kelompok 3 </cite></p>

              </center>

              </blockquote>

            </div>

          </div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
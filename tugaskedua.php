<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>tugas PWPB 1</title>
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

<?php 



  $kubus = "<img src='img/kubus.gif' width='150px' class='card-img-top'>";

  $limas_segitiga = "<img src='img/tetrahedron.gif' width='150px' class='card-img-top'>";

  $kerucut = "<img src='img/kerucut.gif' width='150px' class='card-img-top'>";

  $balok = "<img src='img/balok.gif' width='150px' class='card-img-top'>";

  $prisma = "<img src='img/prisma.gif' width='150px' class='card-img-top'>";

  $limas_segiempat = "<img src='img/limas_segiempat.gif' width='150px' class='card-img-top'>";



  const luas_kubus = "L = 6 x s²";

  const volume_limas_segitiga = "V = 1/3 x Lsegitiga x Tlimas";

  const luas_kerucut = "L = πr (r + s)";

  const luas_balok = "L = 2 (p x l + p x t +  l x t)";

  const luas_prisma = "L = t × ( a1 + a2 + a3) + (2 × La)";

  const volume_limas_segiempat = "V = ⅓ × L alas × t";



?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <meta name="generator" content="Jekyll v3.8.5">

    <title>Tugas Kedua</title>

  </head>

  <body>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

  <h1 class="display-4">Tugas Kedua</h1>

  <p class="lead">kumpulan bangun ruang</p>

</div>



  <div class="container">

    <div class="card-deck mb-3 text-center">

      <div class="card mb-4 shadow-sm">

        <div class="card-body">

            <?php echo $kubus ; ?>

            <img src="kubus.gif" width="100%">

            <p class="card-text bg-light">Luas</p>

            <p class="card-text bg-light"><?php echo luas_kubus; ?></p>

            <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Kubus</a>

        </div>

      </div>



      <div class="card mb-4 shadow-sm"> 

        <div class="card-body">

          <?php echo $limas_segitiga; ?>

          <img src="tetrahedron.gif" width="100%">

          <p class="card-text bg-light">Volume</p>

          <p class="card-text bg-light"><?php echo volume_limas_segitiga; ?></p>

          <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">limas Segitiga</a>

        </div>

      </div>



      <div class="card mb-4 shadow-sm">

        <div class="card-body">

          <?php echo $kerucut; ?>

          <img src="kerucut.gif" width="100%">

          <p class="card-text bg-light">Luas</p>

          <p class="card-text bg-light"><?php echo luas_kerucut; ?></p>

          <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Kerucut</a>

        </div>

      </div>

    </div>

    <div class="card-deck mb-3 text-center">

      <div class="card mb-4 shadow-sm">

          <div class="card-body">

            <?php echo $balok; ?>

            <img src="balok.gif" width="100%">

            <p class="card-text bg-light">Luas</p>

            <p class="card-text bg-light"><?php echo luas_balok; ?></p>

            <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Balok</a>

          </div>

      </div>

      <div class="card mb-4 shadow-sm">

        <div class="card-body">

          <?php echo $prisma; ?>

          <img src="prisma.gif" width="100%">

           <p class="card-text bg-light">Luas</p>

           <p class="card-text bg-light"><?php echo luas_prisma?></p>

          <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Prisma</a>

        </div>

      </div>

      <div class="card mb-4 shadow-sm">

        <div class="card-body">

          <?php echo $limas_segiempat; ?>

          <img src="limassegiempat.gif" width="100%">

            <p class="card-text bg-light">Luas</p>

            <p class="card-text bg-light"><?php echo volume_limas_segiempat; ?></p>

          <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Limas SegiEmpat</a>

        </div>

      </div>

    </div>

  </div>

<div id="footer">

              <blockquote class="blockquote">

              <center>

                <p><cite title="Source Title">©2019 Kelompok 3</cite></p>

              </center>

              </blockquote>

            </div>

          </div>

          <script type="text/javascript" src="js/bootstrap.min.js"></script>


</div>

</body>

</html>
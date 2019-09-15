<!DOCTYPE html>
<html>
<head>
	<title>tugas PWPB</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
        <a class="nav-link" href="tugasketiga.php">Tugas Ketiga</a>
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
    <h1 class="display-4">Form Pendaftaran Sekolah Smk Adi Sanggoro </h1>
  </div> 
</div>

<center>
<form method="POST">
  <table>
   <tr>
    	<td>Nama lengkap</td>
    	<td>:</td>
    	<td><input type="text" name="nama"></td>
   </tr>
   <tr>
    	<td>nama panggilan</td>
    	<td>:</td>
    	<td><input type="text" name="nama"></td>
   </tr>
   <tr>
    	<td>jenis kelamin</td>
    	<td>:</td>
    	<td><input type="radio" name="jk" value="pria">laki-laki</td>
    	<td><input type="radio" name="jk" value="perempuan">perempuan</td>
   </tr>
   <tr>
     	<td>nisn</td>
     	<td>:</td>
     	<td><input type="text" name="nisn"></td>
   </tr>
   <tr>
      	<td>nik</td>
      	<td>:</td>
      	<td><input type="text" name="nik"></td>     
   </tr>
   <tr>
     	<td>ttl</td>
     	<td>:</td>
     	<td><input type="date" name="ttl"></td>
   </tr>
   <tr>
     	<td>asal sekolah</td>
     	<td>:</td>
     	<td><input type="text" name="asalsekolah"></td>
   </tr>
   <tr>
     	<td>nomor skhun</td>
     	<td>:</td>
     	<td><input type="text" name="nomorskhun"></td>
   </tr>
   <tr>
     	<td>tanggal diterima</td>
     	<td>:</td>
     	<td><input type="date" name="tanggalditerima"></td>
   </tr>
   <tr>
     	<td>alasan pindah</td>
     	<td>:</td>
     	<td><textarea class="input" name="alasanpindah"></textarea></td>
   </tr>
   <tr>
     	<td>agama</td>
     	<td>:</td>
     	<td><input type="text" name="agama"></td>
   </tr>
   <tr>
     	<td>alamat</td>
     	<td>:</td>
     	<td><textarea class="input"></textarea></td>
   </tr>
   <tr>
     	<td>tinggal bersama</td>
     	<td>:</td>
     	<td><input type="text" name="tinggalbersama"></td>
   </tr>
   <tr>
     	<td>transportasi ke sekolah</td>
     	<td>:</td>
     	<td><input type="text" name="transportasi"></td>
   </tr>
   <tr>
	     <td>nomor hp</td>
	     <td>:</td>
	     <td><input type="text" name="nomorHP"></td>
   </tr>
   <tr>
     	<td>nomor kps</td>
     	<td>:</td>
     	<td><input type="tett" name="NOMORkps"></td>
   </tr>
   <tr>
   		<td>DATA ORANG TUA AYAH</td>
   </tr>
   <tr>
   	<td>nama</td>
   	<td>:</td>
   	<td><input type="text" name="name"></td>
   	<tr>
   		<td>ttl</td>
   		<td>:</td>
   		<td><input type="date" name="ttl"></td>
   	</tr>
   	<tr>
   		<td>pendidikan</td>
   		<td>:</td>
   		<td><input type="text" name="pendidikan"></td>
   	</tr>
   	<tr>
   		<td>pekerjaan</td>
   		<td>:</td>
   		<td><input type="text" name="pekerjaan"></td>
   	</tr>
   </tr>
   <tr>
   	<tr>
   		<td>DATA ORANG TUA IBU</td>
   </tr>
   <tr>
   	<td>nama</td>
   	<td>:</td>
   	<td><input type="text" name="name"></td>
   	<tr>
   		<td>ttl</td>
   		<td>:</td>
   		<td><input type="date" name="ttl"></td>
   	</tr>
   	<tr>
   		<td>pendidikan</td>
   		<td>:</td>
   		<td><input type="text" name="pendidikan"></td>
   	</tr>
   	<tr>
   		<td>pekerjaan</td>
   		<td>:</td>
   		<td><input type="text" name="pekerjaan"></td>
   	</tr>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="KIRIM"></td>
   </tr>
  </table>  
 </form>
</center>

<?php
 $nama = $_POST['nama'];
 $nama = $_POST['nama'];
 $jk =$_POST['jk'];
 $nisn = $_POST['nisn'];
 $nik = $_POST['nik'];
 $ttl = $_POST['ttl'];
 $asalsekolah = $_POST['asalsekolah'];
 $nomorskhun = $_POST['nomorskhun'];
 $tanggalditerima = $_POST['tanggalditerima'];
 $alasanpindah = $_POST['alasanpindah'];
 $agama = $_POST['agama'];
 $alamat =$_POST['alamat'];
 $tinggalbersama = $_POST['tinggalbersama'];
 $transportasi = $_POST['transportasi'];
 $nomorHP =$_POST['nomorHP'];
 $NOMORkps =$_POST['NOMORkps'];
 $name =$_POST['name'];
 $ttl =$_POST['ttl'];
 $pendidikan =$_POST['pendidikan'];
 $pekerjaan =$_POST['pekerjaan'];
 $name =$_POST['name'];
 $ttl =$_POST['ttl'];
 $pendidikan =$_POST['pendidikan'];
 $pekerjaan =$_POST['pekerjaan'];


echo "nama =$nama <br>nama =$nama <br>jk =$jk <br>nisn =$nisn <br>ttl =$ttl <br>nik =$nik <br>asalsekolah =$asalsekolah <br>nomorskhun =$nomorskhun <br>tanggalditerima =$tanggalditerima <br>alasanpindah =$alasanpindah <br>agama =$agama <br>alamat =$alamat <br>tinggalbersama =$tinggalbersama <br>transportasi =$transportasi <br>nomorHP =$nomorHP <br>NOMORkps =$NOMORkps";

echo "<br>DATA ORANG TUA AYAH <br>name =$name <br>ttl =$ttl <br>pendidikan =$pendidikan <br>pekerjaan =$pekerjaan";

echo "<br>DATA ORANG TUA IBU <br>name =$name <br>ttl =$ttl <br>pendidikan =$pendidikan <br>pekerjaan =$pekerjaan";

 ?>


<div id="footer">

              <blockquote class="blockquote">

              <center>

                <p><cite title="Source Title">©2019 Kelompok 3 </cite></p>

              </center>

              </blockquote>

            </div>

          </div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
<?php
session_start();
if(empty($_SESSION)){
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Login System</title>
	<style>
		body {
			background-color:#eee;
		}
		.login {
			background-color:#fff;
			padding:100px;
			margin-top:20px;
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">Dompetamal</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="margin-left:800px;">
        <a class="nav-link" href="#">Galang Dana<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
        </div>
    </nav>
	
	<div class="container">
		<div class="row">
			<center><h2>Profil</h2>
			<div class="login">
				<p>Anda berhasil login dengan detail sebagai berikut:</p>
                <p>Username : <?php echo $_SESSION['user']; ?><br>
				<p><a href="logout.php" class="btn btn-primary" onclick="return confirm('Yakin ingin Logout?')">Log out</a></p>
    </div>

    <div class="jumbotron jumbotron-fluid bg-primary" style="padding:0;">
        <div class="container">
            <div class="row">
                <div class="col" style="border:0px solid white;">
                    <h1 style="color:white;font-size: 28px;line-height: 81px;text-align: center;font-weight: none;">Dompetamal.com</h1>
                </div>
                <div class="col" style="text-align: left;color:white;font-size: 28px; line-height: 81px;text-align: center; border:0px solid white;">
                    Ikuti
                    kami di :
                    <img style="filter:invert(100%);" src="img/facebook.svg" width="30">
                    <img style="filter:invert(100%);" src="img/youtube.svg" width="40">
                    <img style="filter:invert(100%);" src="img/instagram.svg" width="30">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-left">
                <p>Dompetamal.com adalah website untuk menggalang dana bagi yayasan rumah singgah anak jalanan</p>
                <p>Tugas PT1<br>Kelompok Miracle kelas D3IF-42-01</p>
            </div>
            <div class="col text-center">
                <span class="text-left" style="font-size: 25px; font-weight: bold;">Aksi</span>
                <p>Donasi</p>
                <p>Bantuan</p>
                <p>Yayasan</p>
                <p>Anak Jalanan</p>
            </div>
            <div class="col text-center">
                <span class="text-left" style="font-size: 25px; font-weight: bold;">Pelajari lebih lanjut</span>
                <p>Syarat dan Ketentuan</p>
                <p>Kebijakan Privasi</p>
                <p>Help Center</p>
            </div>
            <div class="col text-center">
                <span class="text-left" style="font-size: 25px; font-weight: bold;">Tentang Kami</span>
                <p>Our Team</p>
            </div>
        </div>
    </div>
    
    

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>
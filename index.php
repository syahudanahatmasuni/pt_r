
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
        <title>Dompetamal.com</title>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Dompetamal</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" style="color:white;" href="donasi.php">Donasi</a>
                </li>
            </ul>
        <div class="dropdown">
            <a class="btn asdf btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="signup.php">Daftar</a>
                    <?php 
                    session_start();
                        if(!empty($_SESSION['user'])){
                            echo ' <a class="dropdown-item" href="user.php">Profil</a>';
                        }
                        else{
                            echo ' <a class="dropdown-item" href="login.php">Masuk</a>';
                            echo ' <a class="dropdown-item" href="#">Bantuan</a>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron1 jumbotron-fluid">
        <div class="container1">
            <h1 class="display-4">Mari kita ciptakan keajaiban untuk anak jalanan</h1><br><br>
            <a href="donasi.php" class="lead">Donasi Sekarang</a>
        </div>
    </div>


    <div class="jumbotron2 jumbotron-fluid text-center bg-white">
        <div class="container" style="margin-top:20px;">
            <div class="row">
                <div class="col">
                    <h1 class="display-4">Siap memberi bantuan?</h1>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:20px;">    
            <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/yayasan/yayasan1.jpg" width="350px" height="197px"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bina Anak Pertiwi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/yayasan.jpg" width="350px" height="197px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Yayasan 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/yayasan.jpg" width="350px" height="197px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Yayasan 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:50px;margin-bottom:50px;" center>            
            <div class="row">
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253497.13516734913!2d107.50307079265457!3d-6.90342901505421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C+Kota+Bandung%2C+Jawa+Barat!5e0!3m2!1sid!2sid!4v1551862450300" width="540" height="277" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <p>Lokasi Yayasan di Kota Bandung</p>
                </div>
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/yayasan.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/yayasan.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/yayasan.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <a href="yayasan.php">Seputar Yayasan</a>
                </div>
            </div>
        </div>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
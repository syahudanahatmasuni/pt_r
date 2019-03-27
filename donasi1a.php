<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dompetamal.com - Donasi</title>
    <style>
        body {
            background-color: #f2f3f4;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding:12px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" style="margin-left:80px;font-size:25px;" href="index.php">Dompetamal</a>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <div class="row" style="margin-left:380px;">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="img/yayasan/yayasan1.jpg" width="350px" height="197px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">Anda akan berdonasi untuk : </p>
                            <h6 class="card-text">Rumah Singgah Bina Anak Pertiwi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" style="margin-top:30px;">
            <div class="row" style="margin-left:380px;">
                <div class="col">
                    <div class="donasi card" style="width: 20rem;">
                        <form method="post">
                            <input type="number" class="form-control" name="donasi" placeholder="Rp. 0" />
                        </form>
                        <div class="alert alert-primary" role="alert">
                            Donasi mulai dari Rp. 1000
                        </div>
                        <p> Metode Pembayaran </p>
                        <select name="carlist" form="carform" class="form-control">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center" style="margin-top:30px;">
            <div class="row" style="margin-left:380px;">
                <div class="col">
                    <div class="donasi card" style="width: 20rem; height:0rem;">
                        <div class="alert alert-danger" role="alert">
                            Lanjut Pembayaran
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
</body>

</html>
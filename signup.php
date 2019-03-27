<?php 
if (isset($_POST['signup-button'])){
    if (($_POST['pass1'] == $_POST['pass2'])&& ($_POST['username'] && $_POST['email'] <> null)){
        require "php/config.php";

        $usern = mysqli_real_escape_string($conn, htmlspecialchars($_POST ['username']));
        $emailn = mysqli_real_escape_string($conn, htmlspecialchars($_POST ['email']));
        $passw = password_hash (mysqli_real_escape_string($conn, $_POST['pass1']), PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, email, password) VALUES ('$usern', '$emailn', '$passw')";
        if (mysqli_query($conn,  $query)) {
          $message = "Register berhasil";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }else {
          $message = "Register gagal";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }else{
      $message = "Password tidak sama";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar</title>
  <link rel="stylesheet" type="text/css" href="Signup/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding:12px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-brand" style="margin-left:80px;font-size:25px;" href="#">Dompetamal</a>
  </nav>   



  <div id="login-box">
    <div class="left-box">
      <h1> Daftar</h1>
        <form method="post">
        <input type="text" name="username" placeholder="Username"/>
        <input type="text" name="email" placeholder="Email"/>
        <input type="password" name="pass1" placeholder="Password"/>
        <input type="password" name="pass2" placeholder="Retype password"/>
        <input type="submit" name="signup-button" value="Daftar"/>
        <p>Sudah Punya Akun? <a href="login.php">Masuk</a></p>
</form>
      </div>
      <div class="right-box">
        <span class="signinwith">Masuk Dengan<br/>Social Network</span>
      
      <button class="social facebook">Masuk dengan Facebook</button>    
      <button class="social google">Masuk dengan Google+</button> 
          
      
      </div>
      <div class="or">OR</div>
  </div>


  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
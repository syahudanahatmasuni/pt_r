<?php
session_start(); 
if (isset($_POST['submit'])) {
	require 'php/config.php';

	$user = $_POST['username'];
	$query = "SELECT password FROM user WHERE username='$user'";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result)===1){
		$hasil = mysqli_fetch_assoc($result);
		if (password_verify($_POST['pass1'], $hasil['password'])) {
			$_SESSION['user']= $user;
			$_SESSION['login'] = true;
			echo "<script>document.location.href='index.php'</script>";
		}
		else {
			$message = "Username/password tidak cocok";
    echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else {
    $message = "Username/password tidak cocok";
    echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
  <title>Dompetamal.com - Login</title>
  <link rel="stylesheet" href="login/style.css">
</head>

<body style="overflow-y: hidden;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding:12px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" style="margin-left:80px;font-size:25px;" href="#">Dompetamal</a>
  </nav>      




  <div class="login-box">
    <h1>Login</h1>
    <form method="post">
    <div class="textbox">
      <i class="fas fa-user"></i>
      <input type="text" name="username" placeholder="Username">
    </div>

    <div class="textbox">
      <i class="fas fa-lock"></i>
      <input type="password" name="pass1" placeholder="Password">
    </div>

    <button class="btn" type="submit" name="submit">Login</button><br/>
    </form>
    <center>
      <p>Belum punya akun Dompetamal?<a href="signup.php"> Daftar</a></p>
    </center>
  </div>


  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>
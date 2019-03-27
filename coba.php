<?php
session_start();
$nama = $_POST['nama'];
$to = $_POST['email'];
$subject = $_POST['subject'];
$messages = $_POST['messages'];
    
$headers .= 'From: <info@domain.com>' . "rn"; //bagian ini diganti sesuai dengan email dari pengirim
@mail($to, $subject, $messages, $headers.php);
if(@mail) 
{
    echo "pengiriman berhasil";
}
else 
{
    echo "pengiriman gagal";
}
?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form action="kirim.php" method="post">
<div>Nama : <input type="text" name="nama" /></div>
<div>Email : <input type="text" name="email" /></div>
<div>Subject : <input type="text" name="subject" /></div>
<div>Messages : <input type="text" name="messages" /></div>
<div><input type="submit" value="kirim" /></div>
</form>   
</body>
</html>
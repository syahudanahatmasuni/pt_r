<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'pt';

$conn = mysqli_connect($server, $user, $pass, $dbname);
if (!$conn) {
	die('Connection error: '. mysqli_connect_error());
}
?>
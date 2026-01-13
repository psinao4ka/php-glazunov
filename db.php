<?php
$host ='localhost';
$user = 'root';
$password = '';
$database = 'users';
$mysqli = mysqli_connect($host, $user, $password,$database);
if ($error=mysqli_connect_error()) echo mysqli_connect_error();

?>
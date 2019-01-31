<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("monitoring");

$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "monitoring"; // Nama databasenya
$connect = mysqli_connect($host, $username, $password, $database);

?>
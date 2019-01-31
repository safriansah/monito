<?php
session_start();
if(!isset($_SESSION['admin'])) header('Location: login.php');
session_destroy();

echo '<script language="javascript">alert("Anda berhasil Logout!"); document.location="login.php";</script>';
?>
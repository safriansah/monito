<?php 
if ($_REQUEST['pages']) include"pages/".$_REQUEST['pages'].".php";
else include'pages/beranda.php';
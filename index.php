<?php
$link=new mysqli("127.0.0.1","root","","simple");
$page	= @$_GET["p"] ? "./halaman/halaman_".@$_GET["p"].".php" : "./halaman/halaman_home.php";
$proc	= "./proses/proses_".@$_GET["x"].".php";

if(file_exists($page) && empty(@$_GET["x"])){
	include './halaman/header.php';
	include $page;
	include './halaman/footer.php';
} elseif (!empty(@$_GET["x"])){
	if(file_exists($proc)) include $proc;
	else echo "Error 404";
} else echo "Error 404";

?>

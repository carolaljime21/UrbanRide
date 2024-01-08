<?php 
session_start();
if ($_SESSION['sesion_name'] AND $_SESSION['autentificado']) {

	include('config.php');
	include('clase_mysqli.php');
	
	$miconexion= new class_mysqli();
	$miconexion-> conectar($host, $userdb, $userpass, $dbname);
} else {
	echo '<script>alert("Datos incorrectos...");</script>';
	echo "<script>location.href='../login.html'</script>";
}

 ?>
<?php 
session_start();
if ($_SESSION['sesion_name'] AND $_SESSION['autentificado']) {
<<<<<<< HEAD
	include('config.php');
	include('clase_mysqli.php');
=======
	include('../dll/config.php');
	include('../dll/clase_mysqli.php');
>>>>>>> 579a4a536efb7dae9dabad532e0988875ceeb4b2
	
	$miconexion= new class_mysqli();
	$miconexion-> conectar($host, $userdb, $userpass, $dbname);
} else {
	echo '<script>alert("Datos3 incorrectos...");</script>';
	echo "<script>location.href='../login.html'</script>";
}

 ?>
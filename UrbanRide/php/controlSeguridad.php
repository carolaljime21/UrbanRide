<?php 
session_start();
if (!isset($_SESSION['sesion_name']) || !isset($_SESSION['autentificado']) || !$_SESSION['autentificado']) {
    echo '<script>alert("Datos incorrectos...");</script>';
    echo "<script>location.href='../login.html'</script>";
    exit(); 
}

include('config.php');
include('clase_mysqli.php');

$miconexion = new class_mysqli();
$miconexion->conectar($host, $userdb, $userpass, $dbname);
?>

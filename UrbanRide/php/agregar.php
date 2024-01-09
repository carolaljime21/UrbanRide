<?php
include('config.php');
include('clase_mysqli.php');

$miconexion = new class_mysqli();
$miconexion->conectar($host, $userdb, $userpass, $dbname);

$contrasena = md5($_POST['contrasena']);
extract($_POST);

$sql = "INSERT INTO usuarios VALUES ('', '$nombres', '$apellidos', '$dni', '$contrasena', '$correo', '$celular', '$ubicacion')";

$res = $miconexion->consulta($sql);

if ($res) {
    echo '<script>alert("Usuario Registrado");</script>';
    echo "<script>location.href='inicio.php'</script>";
} else {
    echo '<script>alert("Error al registrar usuario");</script>';
    echo "<script>location.href='registro.html'</script>";
}
?>

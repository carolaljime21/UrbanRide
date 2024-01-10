<?php
session_start();
extract($_POST);
$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']);

if ($correo && $contrasena) {
    include('config.php');
    include('clase_mysqli.php');

    $miconexion = new class_mysqli();
    $miconexion->conectar($host, $userdb, $userpass, $dbname);

    // Consulta de la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
    $miconexion->consulta($sql);

    $listaUser = $miconexion->consulta_lista();
    // Verificar si la consulta devuelve al menos una fila
    if ($miconexion->consulta_num_rows() > 0) {
        session_start();
        $_SESSION['autentificado'] = TRUE;
        $_SESSION['sesion_name'] = $listaUser[1];

        header("Location: inicio.php"); // Redireccionar usando header en lugar de JavaScript
        exit();
    } else {
        echo '<script>alert("Datos Incorrectos...");</script>';
        echo "<script>location.href='../login.html'</script>";
    }
}
?>

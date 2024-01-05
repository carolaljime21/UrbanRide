<?php
extract($_POST);
$correo = $_POST['correo'];
$clave = $_POST['clave'];

if ($correo && $clave) {
    include('config.php');
    include('clase_mysqli.php');

    $miconexion = new class_mysqli();
    $miconexion->conectar($host, $userdb, $userpass, $dbname);

    // Consulta de la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$clave'";
    $miconexion->consulta($sql);

    // Verificar si la consulta devuelve al menos una fila
    if ($miconexion->consulta_num_rows() > 0) {
        session_start();
        $_SESSION['autentificado'] = TRUE;
        $_SESSION['sesion_name'] = $correo;
        echo "<script>location.href='../inicio.html'</script>";
    } else {
        echo '<script>alert("Datos Incorrectos...");</script>';
        echo "<script>location.href='../login.html'</script>";
    }
} else {
    echo '<script>alert("Datos Incorrectos...");</script>';
    echo "<script>location.href='../login.html'</script>";
}
?>

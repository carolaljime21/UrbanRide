<?php
extract($_POST);
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


if ($correo && $contrasena) {
    include('config.php');
    include('clase_mysqli.php');

    $miconexion = new class_mysqli();
    $miconexion->conectar($host, $userdb, $userpass, $dbname);

    // Consulta de la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
    $miconexion->consulta($sql);

    $listaUser=$miconexion->consulta_lista();
    // Verificar si la consulta devuelve al menos una fila
    if ($miconexion->consulta_num_rows() > 0) {
        session_start();
        $_SESSION['autentificado'] = TRUE;
        $_SESSION['sesion_name'] = $listaUser[1]; // Puedes usar el correo como nombre de sesión si lo prefieres]

        echo "<script>location.href='inicio.php'</script>";
    } else {
        echo '<script>alert("Datos1 Incorrectos...");</script>';
        echo "<script>location.href='../login.html'</script>";
    }
} else {
    echo '<script>alert("Datos2 Incorrectos...");</script>';
    echo "<script>location.href='../login.html'</script>";
}
?>

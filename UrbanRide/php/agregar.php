<?php
    include('config.php');
    include('clase_mysqli.php');
    $miconexion = new class_mysqli();
    $miconexion -> conectar($host, $userdb, $userpass, $dbname);

    extract($_POST);

    $sql = "insert into usuarios values ('', '$nombres', '$apellidos', '$dni', '$contraseña', '$correo', '$celular', '$ubicacion')";
    $res = $miconexion->consulta($sql);
    if($res){
        echo '<script>alert("Usuario Registrado");</script>';
        echo "<script>location.href='../inicio.php'</script>";
    }
        
?>
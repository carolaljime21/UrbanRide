<?php
    include('controlSeguridad.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf'8">
	<meta name="viewport" content="wifth=device'width,
	intial'scale=1">
	<link rel="stylesheet" type="text/css" href="../css/inicioEstilos.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <main class="principal">
        <header class="cabeceraPrincipal">
            <img class="logoWh" src="../images/logoWh.png">
            <nav class="menuPrincipal">
                <a href="inicio.php">Inicio</a>
                <a href="nosotros.html">Nosotros</a>
                <a href="eBikes.html">E-Bikes</a>
                <a href="">Sugerencias</a>
                <a href="#mapa">Mapa</a>
                <a href="Ayuda.html">Ayuda</a>
                <a href="login.html"><i class="fa-solid fa-user"></i> <?php echo $_SESSION["sesion_name"];?>
            </nav>
        </header>
    </main>
</body>

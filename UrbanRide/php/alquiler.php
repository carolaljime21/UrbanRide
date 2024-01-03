<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/alquiler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>UrbanRide - eBikes</title>
</head>
<body>

    <!-- Cabecera principal y menu de navegacion-->
    <header class="cabeceraPrincipal">
        <img class="logoWh" src="../images/logoWh.png">
        <nav class="menuPrincipal">
            <a href="inicio.html">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="eBikes.html">E-Bikes</a>
            <a href="">Sugerencias</a>
            <a href="">Mapa</a>
            <a href="">Ayuda</a>
            <a href="login.html"><i class="fa-solid fa-user"></i> Cuenta</a>
        </nav>
    </header>

    <!-- Contenido de la pagina web-->

    <article class="eBike">
        <img src="../images/eBike.jpg">
        <img src="../images/logo2.png" class="logo">
    </article>

    <section class="titulos">
        <h3>Datos para tu alquiler</h3>
    </section>

    <section class="rent">
        <?php
            $idUser = $_GET['id_usuario'];
            $sql = "SELECT * FROM usuarios WHERE id_usuario = '$idUser'";
            $miconexion->consulta($sql);
            $lista = $miconexion->consulta_lista();
        
        ?>

        <form action="#" method="post" id="alquiler-form">
            <section class="form-group">
                <label for="nombre">Nombre del cliente:</label>
                <input type="text" id="nombre" value='<?php echo $lista[1]?>' name="nombre" required>
                <input type="text" id="nombres" value='<?php echo $lista[0]?>' name="idUser">
            </section>

            <section class="form-group">
                <label for="direccion">Dirección:</label>
                <select id="direccion" name="direccion" required>
                    <option value="direccion1">Dirección 1</option>
                    <option value="direccion2">Dirección 2</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </section>

            <section class="form-group">
                <label for="articulo">Selecciona el artículo:</label>
                <select id="articulo" name="articulo" required>
                    <option value="bicicleta">Bicicleta</option>
                    <option value="scooter">Scooter</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </section>

            <section class="form-group">
                <button type="submit">Buscar</button>
            </section>
        </form>

        <section class="resultados" id="resultados">
            <!-- Resultados -->
        </section>
    </section>

    <script>
        document.getElementById('alquiler-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe
    
        // Simulación de resultados de búsqueda
        var resultados = [
            { imagen: 'ruta_imagen1.jpg', codigo: 'ABC123', estado: 'Disponible', bateria: 80, estrellas: 4 },
            { imagen: 'ruta_imagen2.jpg', codigo: 'XYZ456', estado: 'En uso', bateria: 60, estrellas: 5 },
        ];
    
        mostrarResultados(resultados);
        });
    
        function mostrarResultados(resultados) {
        var resultadosContainer = document.getElementById('resultados');
        resultadosContainer.innerHTML = ''; // Limpiar los resultados anteriores
    
        resultados.forEach(function (resultado) {
            var card = document.createElement('section');
            card.className = 'bikeCard';
    
            // Crear elementos para cada propiedad del resultado
            var imagen = document.createElement('img');
            imagen.src = resultado.imagen;
            var codigo = document.createElement('p');
            codigo.textContent = 'Código: ' + resultado.codigo;
            var estado = document.createElement('p');
            estado.textContent = 'Estado: ' + resultado.estado;
            var bateria = document.createElement('p');
            bateria.textContent = 'Batería: ' + resultado.bateria + '%';
            var estrellas = document.createElement('p');
            estrellas.textContent = 'Estrellas: ' + resultado.estrellas;
    
            // Agregar elementos al card
            card.appendChild(imagen);
            card.appendChild(codigo);
            card.appendChild(estado);
            card.appendChild(bateria);
            card.appendChild(estrellas);
    
            // Agregar card a la sección de resultados
            resultadosContainer.appendChild(card);
        });
        }
    </script>
  
    
</body>
</html>
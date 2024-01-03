
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Registro - UrbanRide</title>
</head>
<body>
<section>

<article class="loginContainer">

        <img src="../images/registro.jpg">
            <section class="login">
                <p>¿Ya tienes cuenta? </p>
                <a href="login.html">Ingresa</a>
            </section>

            <section class="registro">
                <h2>Bienvenido a UrbanRide</h2>
                <h3>Regístrate</h3>
    <form action="agregar.php" method="post">
            <div class="input">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" placeholder="Ingrese Nombres">
            </div>

            <div class="input">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese Apellidos">
            </div>

            <div class="input">
                <label for="dni">Cedula</label>
                <input type="text" id="dni" name="dni" placeholder="Ingrese su dni">
            </div>

            <div class="input">
                <label for="contraseña">Contraseña</label>
                <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña">
            </div>

            <div class="input">
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" placeholder="Ingrese su correo">
            </div>

            <div class="input">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular" placeholder="Ingrese su celular">
            </div>

            <div class="input">
                <label for="ubicacion">Seleccione su ubicacion</label>
                <select name="ubicacion" id="ubicacion">
                <option value="El Sagrario">El Sagrario</option>
                    <option value="Sucre">Sucre</option>
                    <option value="El valle">El Valle</option>
                    <option value="San Sebastian">San Sebastián</option>
                    <option value="Punzara">Punzara</option>
                    <option value="Carigan">Carigán</option>
                </select>
            </div>

            <div class="input">
                <button type="submit">Guardar</button>
            </div>
    </form>
</section>
</body>
</html>

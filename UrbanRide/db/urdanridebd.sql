-- Crear tabla de usuarios
-- Crear tabla de usuarios con ubicación
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    dni VARCHAR(13) NOT NULL,
    contrasena VARCHAR(10) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    celular VARCHAR(10) NOT NULL,
    ubicacion VARCHAR(50)
);


-- Crear tabla de bicicletas
CREATE TABLE bicicletas (
    id_bicicleta INT AUTO_INCREMENT PRIMARY KEY,
    tipo_bicicleta VARCHAR(30) NOT NULL,
    codigo_bicicleta VARCHAR(10) NOT NULL,
    estado VARCHAR(10),
    bateria INT NOT NULL,
    calificacion_bicicleta DECIMAL(2, 1),
    costo_alquilerBi DECIMAL(2,1),
    ubicacion VARCHAR(150);
    nombre_propietario VARCHAR(150)
);

-- Crear tabla de scooters
CREATE TABLE scooters (
    id_scooter INT AUTO_INCREMENT PRIMARY KEY,
    tipo_scooter VARCHAR(30) NOT NULL,
    codigo_scooter VARCHAR(10) NOT NULL,
    estado VARCHAR(10),
    calificacion_scooter DECIMAL(2, 1),
    potencia_motor INT,
    costo_alquilerSC DECIMAL(2,1),
    ubicacion VARCHAR(150);
    nombre_propietario VARCHAR(150)
);

-- Crear tabla de productos
CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    id_bicicleta INT,
    id_scooter INT,
    FOREIGN KEY (id_bicicleta) REFERENCES bicicletas(id_bicicleta),
    FOREIGN KEY (id_scooter) REFERENCES scooters(id_scooter)
);

-- Crear tabla de ubicaciones
CREATE TABLE ubicaciones (
    id_ubicacion INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    codigo_postal VARCHAR(10)
);


-- Crear tabla de alquileres
CREATE TABLE alquileres (
    id_alquiler INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_producto INT,
    monto_total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

-- Crear tabla de pagos
CREATE TABLE pagos (
    id_pago INT AUTO_INCREMENT PRIMARY KEY,
    id_alquiler INT,
    metodo_pago VARCHAR(20) NOT NULL,
    numero_tarjeta VARCHAR(18),
    codigo_seguridad VARCHAR(4),
    fecha_vencimiento DATE,
    nombre_propietario VARCHAR(100),
    FOREIGN KEY (id_alquiler) REFERENCES alquileres(id_alquiler)
);

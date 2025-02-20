<?php
// Datos de conexión
$host_origen = '192.168.1.18';
$usuario_origen = 'boletas';
$contraseña_origen = 'iopa2019$';
$basedatos_origen = 'IOPA';

try {
    // Crear instancia de PDO para la conexión a la base de datos
    $pdo_origen = new PDO("mysql:host=$host_origen;dbname=$basedatos_origen;charset=utf8", $usuario_origen, $contraseña_origen);

    // Configurar el modo de error de PDO para excepciones
    $pdo_origen->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos de origen";
    
    // Aquí puedes ejecutar tus consultas SQL utilizando $pdo_origen

} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}

// Opcionalmente, puedes cerrar la conexión asignando null al objeto PDO
$pdo_origen = null;
?>
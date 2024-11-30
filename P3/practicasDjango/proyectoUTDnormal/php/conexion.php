<?php
$conexion = new mysqli('localhost', 'd1', '', 'proyectoutd');

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>

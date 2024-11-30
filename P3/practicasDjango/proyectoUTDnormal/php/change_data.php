<?php
session_start();
include 'conexion.php';

$user_id = $_SESSION['user_id'];

$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$password = $_POST['password'];

// Validar y sanitizar entradas
$nombre = trim($nombre);
$apellido_paterno = trim($apellido_paterno);
$apellido_materno = trim($apellido_materno);

// Verificar si se proporcionó una nueva contraseña
if (!empty($password)) {
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conexion->prepare("UPDATE usuarios SET nombre = ?, apellido_paterno = ?, apellido_materno = ?, contrasena = ? WHERE id = ?");
    $stmt->bind_param('ssssi', $nombre, $apellido_paterno, $apellido_materno, $password, $user_id);
} else {
    $stmt = $conexion->prepare("UPDATE usuarios SET nombre = ?, apellido_paterno = ?, apellido_materno = ? WHERE id = ?");
    $stmt->bind_param('sssi', $nombre, $apellido_paterno, $apellido_materno, $user_id);
}

if ($stmt->execute()) {
    header('Location: ../dashboard.php?message=Datos actualizados exitosamente');
} else {
    header('Location: ../dashboard.php?error=Error al actualizar los datos');
}

$stmt->close();
$conexion->close();
?>
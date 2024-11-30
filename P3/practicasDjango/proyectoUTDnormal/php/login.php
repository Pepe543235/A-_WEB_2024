<?php
session_start();  // Iniciar la sesión
include 'conexion.php';  // Incluir la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar que las claves de $_POST existan antes de usarlas
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Preparar y ejecutar la consulta para obtener el usuario
        $stmt = $conexion->prepare("SELECT id, usuario, email, password FROM usuarios WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $usuario = $result->fetch_assoc();

            // Verificar la contraseña usando password_verify()
            if (password_verify($password, $usuario['password'])) {
                // Establecer variables de sesión
                $_SESSION['usuario'] = $usuario['usuario'];  // Almacenar el nombre de usuario en la sesión
                $_SESSION['user_id'] = $usuario['id'];       // Almacenar el ID del usuario en la sesión
                $_SESSION['email'] = $usuario['email'];      // Almacenar el email en la sesión

                // Redirigir al usuario a la página principal o a una página protegida
                header("Location: index.php");  // Redirigir a la página principal (ajusta esto según tus necesidades)
                exit();
            } else {
                echo "Contraseña incorrecta.";
            }
        } else {
            echo "Usuario no encontrado.";
        }
        $stmt->close();
    } else {
        echo "Por favor, complete todos los campos.";
    }
}

// Cerrar la conexión
$conexion->close();
?>

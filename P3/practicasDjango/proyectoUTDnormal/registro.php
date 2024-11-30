<?php
$title = "Registro";
$content = "Complete el siguiente formulario para registrarse.";
?>

<?php include 'includes/header.php'; ?>

<section id="content">
    <div class="box">
        <h1><?php echo $title; ?></h1>
        <hr>
        <p><?php echo $content; ?></p>
        
        <!-- Formulario de Registro -->
        <form action="php/registro.php" method="POST">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" name="apellido_paterno" id="apellido_paterno" required>

            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" name="apellido_materno" id="apellido_materno">

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

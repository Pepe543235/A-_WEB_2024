<?php

$title = "Inicio";
$content = "---Bienvenido a la pagina principal---";
?>

<?php include 'includes/header.php'; ?>

<main>
    <section id="content">
        <div class="box">
            <h1><?php echo $title; ?></h1>
            <p><?php echo $content; ?></p>

            <!-- Mostrar mensaje de bienvenida si el usuario está logueado -->
            <?php if (isset($_SESSION['user_id'])): ?>
                <br><hr><br>
                <h2>Bienvenido al sistema, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h2>
                <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <?php else: ?>
                <h2>Por favor, inicia sesión para acceder a más funciones.</h2>
            <?php endif; ?>

            <!-- Mostrar mensajes si los hay -->
            <?php if (isset($_SESSION['messages']) && !empty($_SESSION['messages'])): ?>
                <?php foreach ($_SESSION['messages'] as $message): ?>
                    <div class="alert-success">
                        <?php echo htmlspecialchars($message); ?>
                    </div>
                <?php endforeach; ?>
                <?php unset($_SESSION['messages']); ?>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

<?php

$title = "Inicio de Sesion";
?>
<?php include("includes/header.php"); ?>

    <main>

        <section id='content' >
            <div class="box">

                <form action="" method="POST">
                    
                    <label for="username">Nombre de Usuario</label>
                    <input type="email" name="email" class="login__input login__input--email" placeholder="ejemplo@example.com" required><br>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="login__input login__input--password" placeholder="Contraseña" required><br>
                    <input type="submit" class="login__button login__button--submit" value="Ingresar">
            
                </form>
            </div>
        </section>
            
    </main>
    
    <script>
        $(document).ready(function () {
            $('#loginForm').on('submit', function (e) {
                e.preventDefault(); // Evitar que el formulario se envíe de forma tradicional
                
                $.ajax({
                    type: 'POST',
                    url: 'php/login.php',
                    data: $(this).serialize(), // Serializar los datos del formulario
                    success: function (response) {
                        if (response === 'success') {
                            window.location.href = 'dashboard.php'; // Redirigir si es exitoso
                        } else {
                            $('#errorMessage').text(response); // Mostrar el error
                        }
                    },
                    error: function () {
                        $('#errorMessage').text('Ocurrió un error al procesar la solicitud.');
                    }
                });
            });
        });
        </script>
<?php include 'includes/footer.php'; ?>


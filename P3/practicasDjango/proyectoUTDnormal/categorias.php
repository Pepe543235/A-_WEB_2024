<?php
// Definir el título y contenido de la página
$title = "Listado de Categorías";
$content = "Aquí puedes ver todas las categorías disponibles para los artículos.";
include 'includes/header.php';
verificarAutenticado();

// Incluir la conexión a la base de datos
include("php/conexion.php");


// Obtener las categorías desde la base de datos
$query = "SELECT id, nombre, descripcion, fecha_creacion FROM categorias ORDER BY fecha_creacion DESC";
$result = $conexion->query($query);

// Verificar si hay categorías
if ($result->num_rows > 0) {
    $categories = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $categories = [];
}

// Cerrar la conexión
$conexion->close();


?>

<section id="content">
    <div class="box">
        <h1><?php echo $title; ?></h1>
        <hr>
        
        <?php if (count($categories) > 0): ?>
            <?php foreach ($categories as $category): ?>
                <article class="category-item">
                    <div class="data">
                        <h2><?php echo $category['nombre']; ?></h2>
                        <p>Descripción: <?php echo $category['descripcion']; ?></p>
                        <span class="date">
                            Fecha de creación: <?php echo $category['fecha_creacion']; ?>
                        </span>
                    </div>
                    <hr>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay categorías disponibles.</p>
        <?php endif; ?>
    </div>
</section>

<?php
// Incluir el pie de página
include 'includes/footer.php';
?>

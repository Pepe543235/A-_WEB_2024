<?php
// Definir el título y contenido de la página
$title = "Listado de Artículos";
$content = "Aquí puedes ver todos los artículos disponibles, junto con sus categorías y detalles.";
include 'includes/header.php';


// Incluir la conexión a la base de datos
include("php/conexion.php");
verificarAutenticado();


// Obtener los artículos con sus respectivas categorías
$query = "
    SELECT a.id AS articulo_id, a.nombre AS articulo_nombre, a.descripcion AS articulo_descripcion, 
           a.imagen AS articulo_imagen, a.fecha_creacion AS articulo_fecha_creacion,
           GROUP_CONCAT(c.nombre ORDER BY c.nombre ASC) AS categorias
    FROM articulos a
    LEFT JOIN articulo_categoria ac ON a.id = ac.articulo_id
    LEFT JOIN categorias c ON ac.categoria_id = c.id
    GROUP BY a.id
    ORDER BY a.fecha_creacion DESC
";

$result = $conexion->query($query);

// Verificar si hay artículos
if ($result->num_rows > 0) {
    $articles = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $articles = [];
}

// Cerrar la conexión
$conexion->close();

// Incluir el encabezado
?>

<section id="content">
    <div class="box">
        <h1><?php echo $title; ?></h1>
        <hr>
        
        <?php if (count($articles) > 0): ?>
            <?php foreach ($articles as $article): ?>
                <article class="article-item">
                    <?php if (!empty($article['articulo_imagen'])): ?>
                        <div>
                            <img src="<?php echo $article['articulo_imagen']; ?>" alt="Imagen de <?php echo $article['articulo_nombre']; ?>" />
                        </div>
                    <?php endif; ?>

                    <div class="data">
                        <h2><?php echo $article['articulo_nombre']; ?></h2>
                        <p>Descripción: <?php echo $article['articulo_descripcion']; ?></p>
                        <p>Categorías: 
                            <?php echo $article['categorias']; ?>
                        </p>
                        <span class="date">
                            Creado por <?php echo $_SESSION['usuario']; ?> <!-- Usuario que creó el artículo, puedes obtenerlo de la sesión -->
                            <br />
                            Fecha: <?php echo $article['articulo_fecha_creacion']; ?>
                        </span>
                    </div>
                    <hr>
                </article>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay artículos disponibles.</p>
        <?php endif; ?>
    </div>
</section>

<?php
// Incluir el pie de página
include 'includes/footer.php';
?>

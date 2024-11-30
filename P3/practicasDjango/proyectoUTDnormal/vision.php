<?php
$title = "Vision";
$content = "La vision de la empresa";
include 'includes/header.php';
verificarAutenticado();

?>


<section id="content">
    <div class="box">
        <h1><?php echo $title; ?></h1>
        <hr>
        <p><?php echo $content; ?></p>
   </div>
</section>

<?php include 'includes/footer.php'; ?>


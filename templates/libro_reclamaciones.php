<?php
//Template name: Libro de Reclamaciones
get_header();
?>
<?php
$titulo = get_field("titulo");
$formulario = get_field("formulario");
?>
<main class="container md:py-150 py-50  h-auto">
    <h1 class="md:text-50 text-27 text-center mb-40"><?= $titulo ?></h1>
    <div>
        <?= do_shortcode($formulario); ?>
    </div>
</main>


<?php
get_footer();

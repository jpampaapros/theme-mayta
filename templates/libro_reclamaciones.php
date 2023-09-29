<?php
//Template name: Libro de Reclamaciones
get_header();
?>
<?php
$titulo = get_field("titulo");
$formulario = get_field("formulario");
?>
<main class="container md:mt-150 mt-50  h-auto">
    <h1 class="md:text-75 text-35 text-center mb-40 font-600"><?= $titulo ?></h1>
    <div class="flex-wrap">
        <?= do_shortcode($formulario); ?>
    </div>
</main>


<?php
get_footer();

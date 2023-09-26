<?php
//Template name: Chef
get_header();
?>
<?php
$imagen = get_field("imagen_descripcion");
$titulo = get_field("titulo_descripcion");
$nombre = get_field("nombre_descripcion");
$posicion = get_field("posicion_descripcion");
$texto = get_field("texto_descripcion");

?>
<main class="container py-150">
    <section class="sec-1 flex mx-65 mb-250">
        <div class="w-50% relative">
            <img src="<?= home_url() ?>/wp-content\themes\theme-mayta\public\image\chef\Frame.png" class="w-783 h-952" alt="mayta">
            <!-- <img src="<?= $imagen['url'] ?>" class="w-705 h-975 absolute top-40 left-120" alt="<?= $imagen['alt'] ?>"> -->
            <?= render_image($imagen,"w-705 h-975 absolute top-40 left-120") ?>

        </div>
        <div class="flex justify-center pl-149 flex-col w-50% pt-100">
            <div class="text-white font-light"><?= $titulo ?></div>
            <h1 class="text-75 font-medium text-white"><?= $nombre ?></h1>
            <div class="text-25 font-medium text-white"><?= $posicion ?></div>
            <div class="w-62 h-1 bg-white mb-79"></div>
            <div class="text-18 leading-27 text-white font-light text-chef"><?= $texto ?></div>
        </div>
    </section>
    <section>
 <!-- <h1>TIME LINE</h1> -->
    </section>
</main>

<?php
get_footer();

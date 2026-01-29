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
$boton = get_field("boton");
$adorno = get_field("adorno");
?>
<main class="container md:mt-20 mt-0 overflow-hidden">
    <section class="block md:hidden pt-37">
        <div class="text-white  text-16"><?= $titulo ?></div>
        <h1 class="font-medium text-white text-44 md:text-75 "><?= $nombre ?></h1>
        <div class="text-16 md:text-25 font-medium text-white pb-12 md:pb-0"><?= $posicion ?></div>
        <div class="w-62 h-1 bg-white mb-79"></div>
    </section>
    <section class="sec-1 md:flex md:mx-65 mb-84 md:mb-250">
        <div class="md:w-50% relative">
            <?php
            $attr_image = array(
                "class" => "w-277 md:w-705 h-397 md:h-auto top-22 md:top-40 relative left-32 md:left-120 object-cover",
                "data-scroll-speed" => "0",
                "data-scroll" => "0",
                "data-scroll-class" => "ani-opacity",
                "data-scroll-delay" => "1",
            );
            ?>
            <?= render_image($adorno, " w-783 absolute -left-18 h-377 md:h-auto object-contain"); ?>
            <?= render_image($imagen, $attr_image); ?>
        </div>
        <div class="md:flex justify-center md:pl-149 flex-col md:w-50% pt-80 md:pt-100 w-full" data-scroll-speed="0" data-scroll="0">
            <div class="hidden md:block">
                <div class="text-white "><?= $titulo ?></div>
                <h1 class="text-75 font-medium text-white"><?= $nombre ?></h1>
                <div class="text-25 font-medium text-white"><?= $posicion ?></div>
                <div class="w-62 h-1 bg-white mb-79"></div>
            </div>
            <div class="text-18 leading-27 text-white  text-chef"><?= $texto ?></div>
            <a href="<?php echo $boton['url'] ?>" class="flex bg-[#A45D43] text-white"
                style="background-color: #A45D43;width:fit-content;padding-inline: 10px;padding-block:10px">
                <?php echo $boton['title'] ?>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();

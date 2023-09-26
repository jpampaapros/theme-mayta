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
$linea_linea = get_field("linea_linea");

?>
<main class="container md:pt-150 overflow-hidden">
    <section class="block md:hidden pt-37">
        <div class="text-white font-light text-16"><?= $titulo ?></div>
        <h1 class="font-medium text-white text-44 md:text-75 "><?= $nombre ?></h1>
        <div class="text-16 md:text-25 font-medium text-white pb-12 md:pb-0"><?= $posicion ?></div>
        <div class="w-62 h-1 bg-white mb-79"></div>
    </section>
    <section class="sec-1 md:flex md:mx-65 mb-84 md:mb-250">
        <div class="md:w-50% relative">
            <img src="<?= home_url() ?>/wp-content\themes\theme-mayta\public\image\chef\Frame.png" class=" w-783 absolute -left-18" alt="mayta">
            <?= render_image($imagen,"w-277 md:w-705 top-22 md:top-40 relative left-32 md:left-120 object-cover");?>
        </div>
        <div class="md:flex justify-center md:pl-149 flex-col md:w-50% pt-80 md:pt-100 w-full">
            <div class="hidden md:block">
                <div class="text-white font-light"><?= $titulo ?></div>
                <h1 class="text-75 font-medium text-white"><?= $nombre ?></h1>
                <div class="text-25 font-medium text-white"><?= $posicion ?></div>
                <div class="w-62 h-1 bg-white mb-79"></div>
            </div>
            <div class="text-18 leading-27 text-white font-light text-chef"><?= $texto ?></div>
        </div>
    </section>
    <?php if($linea_linea):?>
        <section>
            <?php if($titulo):?>
                <h2 class="mb-31 text-44 block md:hidden"><?= $titulo;?></h2>
            <?php endif;?>
            <div class="timeline">
                <?php foreach ($linea_linea as $item): ?>
                    <?php 
                        $item_anio = $item['ano'];   
                        $item_image = $item['imagen'];   
                        $item_text = $item['texto'];   
                    ?>
                    <div>
                        <?php if($item_anio):?>
                            <div class="text-35 leading-40 md:text-60 md:leading-73 font-medium mb-22 timeline__anio opacity-50 "><?= $item_anio;?></div>
                        <?php endif;?>
                        <div class="flex items-center gap-13 md:gap-21 opacity-50 timeline__card  ">
                            <?php if($item_image):?>
                                <?= render_image($item_image,"w-68 md:w-130 h-76 md:h-130 border-solid border-white border-1 timeline__image ");?>
                            <?php endif;?>
                            <?php if($item_text):?>
                                <div class="text-16 md:text-22 md:pr-72 pr-12"><?= $item_text;?></div>
                            <?php endif;?>
                        </div>
                        <div class="flex mt-40 md:mt-68 items-center pr-20">
                            <div class="indicator-circle rounded-full w-17 md:w-29 h-17 md:h-29 shrink-0 border-solid border-white border-1"></div>
                            <div class="indicator-line ml-20 bg-lightblack shrink-0 w-130 md:w-281 h-2"></div>
                            <div class="bg-lightblack w-full h-2"></div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </section>
    <?php endif;?>
</main>

<?php
get_footer();

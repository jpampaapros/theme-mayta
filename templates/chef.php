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
                    "data-scroll-speed" => "5",
                    "data-scroll" => "1",
                    "data-scroll-class"=>"ani-opacity",
					"data-scroll-delay"=>"1",
                );
            ?>
            <?= render_image($adorno," w-783 absolute -left-18 h-377 md:h-auto object-contain");?>
            <?= render_image($imagen,$attr_image);?>
        </div>
        <div class="md:flex justify-center md:pl-149 flex-col md:w-50% pt-80 md:pt-100 w-full" data-scroll-speed="1" data-scroll="1">
            <div class="hidden md:block">
                <div class="text-white "><?= $titulo ?></div>
                <h1 class="text-75 font-medium text-white"><?= $nombre ?></h1>
                <div class="text-25 font-medium text-white"><?= $posicion ?></div>
                <div class="w-62 h-1 bg-white mb-79"></div>
            </div>
            <div class="text-18 leading-27 text-white  text-chef"><?= $texto ?></div>
        </div>
    </section>
    <?php if($linea_linea):?>
        <section>
            <?php if($titulo):?>
                <h2 class="mb-31 text-44 block md:hidden"><?= $titulo;?></h2>
            <?php endif;?>
            <div class="timeline mb-50 md:mb-0">
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
                        <div class="flex items-center gap-13 md:gap-21 opacity-50 timeline__card  min-h-150 md:min-h-200">
                            <?php if($item_image):?>
                                <?php 
                                    $attr_image = array(
                                        "class" => "w-68 md:w-130 h-76 md:h-130 border-solid border-white border-1 timeline__image "
                                    );
                                ?>
                                <?= render_image($item_image,$attr_image);?>
                            <?php endif;?>
                            <?php if($item_text):?>
                                <div class="text-16 md:text-22 md:pr-72 pr-12"><?= $item_text;?></div>
                            <?php endif;?>
                        </div>
                        <div class="flex mt-40 md:mt-68 items-center pr-20">
                            <div class="indicator-circle rounded-full w-17 md:w-29 h-17 md:h-29 shrink-0 border-solid border-white border-1"></div>
                            <div class="indicator-line ml-20 bg-lightblack shrink-0  h-2"></div>
                            <!-- w-130 md:w-281 -->
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

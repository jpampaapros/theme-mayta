<?php
//Template name: Terminos y condiciones
get_header();
?>
<?php
$titulo = get_field("titulo_pagina");
$contenido = get_field("texto_contenido");
?>
<main class="container md:py-150 py-50">
    <h1 class="md:text-75 text-35 text-white text-center mb-50"><?= $titulo ?></h1>
    <?php if ($contenido) : ?>
        <div class="md:text-22 text-18 text-white md:px-50">
            <?php foreach ($contenido as $texto) : ?>
                <h2 class="md:text-35 text-25 my-20"><?= $texto['titulo']; ?></h2>
                <?= $texto['texto'] ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>


<?php
get_footer();

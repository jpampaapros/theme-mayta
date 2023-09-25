<?php
	//Template name: Restaurante
	get_header();
?>
<?php
$titulo = get_field("titulo_restaurante");
$galeria = get_field("galeria_restaurante");
?>
<main class="container my-150">
<h1 class="text-center"><?= $titulo ?></h1>
</main>

<?php
get_footer();

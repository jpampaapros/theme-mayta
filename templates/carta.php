<?php
	//Template name: Carta
	get_header();
?>
<?php
$imagen = get_field("imagen_de_fondo_banner");
$titulo = get_field("titulo_descripcion");
$nombre = get_field("nombre_descripcion");
$posicion = get_field("posicion_descripcion");
$texto = get_field("texto_descripcion");

?>
<main class="container h-screen">
	<section class="relative flex">
<div></div>
<img src="<?= $imagen['url'] ?> " alt="<?= $imagen['alt'] ?>">
	</section>

</main>

<?php
get_footer();

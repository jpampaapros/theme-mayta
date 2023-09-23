<?php
//Template name: Mayta
get_header();
?>
<?php
$imagen = get_field("imagen_descripcion");
$texto = get_field("texto_descripcion");
$grilla = get_field("grilla");
$imagen2 = get_field("imagen_de_fondo_adicional");
$titulo = get_field("titulo_adicional");
$subtitulo = get_field("subtitulo_adicional");
$boton = get_field("boton_texto_adicional");
$link_boton = get_field("boton_link_adicional");


?>
<main class="container">
	<section class="sec-1 flex mt-25 mx-65">
		<div class="w-50% flex justify-start items-center">
			<img src="<?= $imagen['url'] ?>" class="md:w-640 md:h-682" alt="<?= $imagen['alt'] ?>">
		</div>
		<div class="w-50% flex justify-end items-center texto">
			<?= $texto ?>
		</div>
	</section>
	<section class="flex justify-center py-40">
		<h1 class="text-center text-white text-60 text-bold ">M</h1>
	</section>

	<?php $switch = 1; ?>
	<?php foreach ($grilla as $item) : ?>

		<?php if ($switch == 1) : ?>
			<section class="mx-150 flex">
				<div class="h-auto w-50% flex justify-start items-center">
					<img src="<?= $item['imagen']['url'] ?>" class="w-395 h-621" alt="<?= $item['imagen']['alt'] ?>">
				</div>
				<div class="h-auto w-50% flex justify-end items-center text-18 text-white font-light">
					<?= $item['texto'] ?>
				</div>
			</section>
		<?php else : ?>
			<section class="mx-150 flex">
				<div class="h-auto w-50% flex justify-start items-center text-18 text-white font-light">
					<?= $item['texto'] ?>
				</div>
				<div class="h-auto w-50% flex justify-end items-center">
					<img src="<?= $item['imagen']['url'] ?>" class="w-395 h-621" alt="<?= $item['imagen']['alt'] ?>">
				</div>
			</section>
		<?php endif; ?>
		<?php if ($switch == 1) {
			$switch = 0;
		} else {
			$switch = 1;
		} ?>
	<?php endforeach; ?>

	<section class="sec-3 flex justify-center w-full my-166">

		<div class="w-auto h-auto relative">
			<img src="<?= $imagen2['url'] ?>" class="w-1095 h-395" alt="<?= $imagen2['url'] ?>">
			<div class="absolute top-30 w-full flex items-center flex-col">
				<div class="text-50 bg-white text-black h-auto w-500 text-center font-bold mb-10">
					<?= $titulo ?>
				</div>
				<h1 class="text-50"><?= $subtitulo ?></h1>
				<a href="<?= $link_boton ?>" class="h-auto p-20 bg-gray">
					<?= $boton ?>
				</a>
			</div>
		</div>

	</section>
</main>

<?php
get_footer();

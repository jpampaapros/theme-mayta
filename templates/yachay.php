<?php
//Template name: Yachay
get_header();
?>
<?php
$titulo = get_field("titulo_banner");
$subtitulo = get_field("subtitulo_banner");
$imagen = get_field("imagen_banner");
$texto = get_field("texto_banner");
$cards = get_field("cards_imagenes");
$grilla = get_field("grilla");
$titulo2 = get_field("titulo_adicional");
$subtitulo2 = get_field("subtitulo_adicional");
$boton = get_field("boton_texto_adicional");
$link_boton = get_field("boton_link_adicional");
$imagen2 = get_field("imagen_adicional");

?>
<main class="container py-150">
	<section class="flex flex-col mb-250">
		<div class="flex flex-col items-center justify-center mb-56">
			<div class="w-500 flex flex-col text-center mb-60">
				<h1 class="text-75 font-medium leading-90 text-white"><?= $titulo ?></h1>
				<div class="h-1 w-60 bg-white ml-220"></div>
			</div>
			<img class="w-1514 h-533" src="<?= $imagen['url'] ?>" alt="<?= $imagen['alt'] ?>">
		</div>
		<div class="flex justify-between px-55">
			<div class="flex flex-col w-500">
				<h2 class="text-75 font-bold text-white"><?= $titulo ?></h2>
				<h3 class="text-35 text-white"><?= $subtitulo ?></h3>
			</div>
			<div class="text-18 font-light w-500 flex items-center"><?= $texto ?></div>
		</div>
	</section>
	<section class="flex mb-250 gap-82">
		<?php
		$llave = 1;
		foreach ($cards as $card) : ?>
			<?php if ($llave % 2 !== 0) : ?>
				<img class="w-347 h-589 mt-120" src="<?= $card['url'] ?>" alt="<?= $card['alt'] ?>">
			<?php else : ?>
				<img class="w-347 h-589" src="<?= $card['url'] ?>" alt="<?= $card['alt'] ?>">
			<?php endif ?>
			<?php $llave++; ?>
		<?php endforeach; ?>
	</section>
	<section class="mb-250">
		<?php foreach ($grilla as $key => $item) : ?>
			<?php if ($key % 2 !== 0) : ?>
				<div class="flex mb-130">
					<div class="w-50% text-36 font-midium text-white flex items-center">
						<?= $item['texto'] ?>
					</div>
					<div class="w-50%">
						<img class="w-728 h-548" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>">
					</div>
				</div>
			<?php else : ?>
				<div class="flex mb-130">
					<div class="w-50%">
						<img class="w-728 h-548" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>">
					</div>
					<div class="w-50% text-36 font-midium text-white flex items-center">
						<?= $item['texto'] ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</section>
	<section class=" flex justify-center w-full">
		<div class="w-auto h-auto relative border-10 border-lightblack">
			<img src="<?= $imagen2['url'] ?>" class="w-1095 h-395" alt="<?= $imagen2['url'] ?>">
			<div class="absolute top-60 w-full flex items-start flex-col pl-30">
				<h2 class="text-50 mb-20"><?= $subtitulo ?></h2>
				<div class=" bg-white pt-10  h-auto w-auto text-center px-15 mb-35">
					<h1 class="text-50 text-black font-bold"><?= $titulo2 ?></h1>
				</div>
				<a href="<?= $link_boton ?>" class="h-auto pt-20 pb-16 px-100 bg-gray text-18 font-medium border border-white">
					<?= $boton ?>
				</a>
			</div>
		</div>

	</section>
</main>

<?php
get_footer();

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
<main class="container md:py-150 p-50 pb-150">
	<section class=" flex flex-col md:mb-250 mb-90">
		<div class="flex flex-col md:items-center justify-center md:mb-56 mb-30">
			<div class="md:w-500 w-auto flex flex-col md:text-center text-left mb-60">
				<h1 class="text-75 font-medium leading-90 text-white"><?= $titulo ?></h1>
				<div class="h-1 md:w-60 w-110 bg-white md:ml-220"></div>
			</div>
			<!-- <img class="md:w-1514 md:h-533 w-358 h-237" src="<?= $imagen['url'] ?>" alt="<?= $imagen['alt'] ?>"> -->
			<?= render_image($imagen,"md:w-1514 md:h-533 w-auto h-237") ?>
		</div>
		<div class="flex md:justify-between md:flex-row flex-col md:px-150">
			<div class="flex flex-col md:w-500 w-auto md:text-left text-right mb-30">
				<h2 class="md:text-75 text-35 font-bold text-white"><?= $titulo ?></h2>
				<h3 class="md:text-35 text-25 text-white"><?= $subtitulo ?></h3>
			</div>
			<div class="md:text-18 text-16 font-light md:w-500 w-auto flex items-center"><?= $texto ?></div>
		</div>
	</section>
	<section class="md:hidden block mb-90">
		<div class="w-full ">
		<p class="text-white font-600 text-16 leading-24">
		Evolucionar gastronómicamente implica entender el origen de los insumos y su entorno, es por ello que constantemente imaginamos cómo podríamos trasladar la misma sensación a nuestros comensales conectándolos con nuestro territorio, tradición y cultura.”
		</p>
	</div>
	</section>
	<section class="flex md:flex-row flex-col md:mb-250 mb-90 md:gap-82 gap-5 md:pl-70">
	
		<?php
		$llave = 1;
		foreach ($cards as $card) : ?>
			<?php if ($llave % 2 !== 0) : ?>
				<!-- <img class="md:w-347 md:h-589 w-171 h-276 md:mt-120 mt-30" src="<?= $card['url'] ?>" alt="<?= $card['alt'] ?>"> -->
				<?= render_image($card,"md:w-347 md:h-589 w-155 h-260 md:mt-120 mt-30 md:ml-0 ml--8") ?>
			<?php else : ?>
				<!-- <img class="md:w-347 md:h-589 w-171 h-276 md:ml-0 ml-183 md:mt-0 mt--60" src="<?= $card['url'] ?>" alt="<?= $card['alt'] ?>"> -->
				<?= render_image($card,"md:w-347 md:h-589 w-155 h-260 md:ml-0 ml-142 md:mt-0 mt--60") ?>
			<?php endif ?>
			<?php $llave++; ?>
		<?php endforeach; ?>

	</section>
	<section class="mb-150">
		<?php foreach ($grilla as $key => $item) : ?>
			<?php if ($key % 2 !== 0) : ?>
				<div class="flex md:flex-row flex-col-reverse mb-130 relative">
					<div class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-190 md:text-left text-right md:pl-130">
						<?= $item['texto'] ?>
					</div>
					<div class="md:w-50% w-full md:flex md:justify-end">
						<img class="md:w-728 md:h-548 w-323 h-auto" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>">
					</div>
				</div>
			<?php else : ?>
				<div class="flex md:flex-row flex-col mb-130 relative">
					<div class="md:w-50% w-full">
						<img class="md:w-728 md:h-548 w-323 h-auto" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>">
					</div>
					<div class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-190 md:pr-130">
						<?= $item['texto'] ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</section>
	<section class="md:py-0 pt-100 flex justify-center w-full">
		<div class="w-auto h-auto relative border-15 border-lightblack">
			<img src="<?= $imagen2['url'] ?>" class="w-1095 h-395" alt="<?= $imagen2['url'] ?>">
			<div class="absolute top-60 w-full flex md:items-start items-center flex-col md:pl-30 pl-10 pr-10 md:pr-0">
				<h2 class="md:text-50 text-27 mb-20"><?= $subtitulo ?></h2>
				<div class=" bg-white pt-10  h-auto w-auto text-center px-15 mb-35 mix-blend-screen">
					<h1 class="md:text-50 text-27 text-black font-bold"><?= $titulo2 ?></h1>
				</div>
				<a href="<?= $link_boton ?>" class="h-auto pt-20 pb-16 md:px-100 px-70 bg-gray text-18 font-medium border border-white">
					<?= $boton ?>
				</a>
			</div>
		</div>

	</section>
</main>

<?php
get_footer();

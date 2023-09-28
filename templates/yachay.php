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
$grilla2 = get_field("grilla2");
$titulo2 = get_field("titulo_adicional");
$subtitulo2 = get_field("subtitulo_adicional");
$boton = get_field("boton_texto_adicional");
$link_boton = get_field("boton_link_adicional");
$imagen2 = get_field("imagen_adicional");

?>
<main class="container md:mt-150 mt-50">
	<section class=" flex flex-col md:mb-250 mb-90">
		<div class="flex flex-col md:items-center justify-center md:mb-56 mb-30">
			<div data-scroll-speed="1" data-scroll="1" class="md:w-500 w-auto flex flex-col md:text-center text-left mb-60">
				<h1 class="text-75 font-medium leading-90 text-white"><?= $titulo ?></h1>
				<div class="h-1 md:w-60 w-110 bg-white md:ml-220"></div>
			</div>
			<?php 
				$attr_image = array(
					"class" => "md:w-1514 md:h-533 w-auto h-237",
					"data-scroll-speed" => "4",
					"data-scroll" => "1"
				);
			?>
			<?= render_image($imagen, $attr_image) ?>
		</div>
		<div class="flex md:justify-center text-center md:flex-row flex-col md:px-150">
			<div class="flex flex-col md:w-500 w-auto md:text-left text-right mb-30" data-scroll-speed="1" data-scroll="1">
				<h2 class="md:text-75 text-35 font-bold text-white text-center"><?= $titulo ?></h2>
				<h3 class="md:text-35 text-25 text-white text-center"><?= $subtitulo ?></h3>
			</div>
			<!-- <div class="md:text-18 text-16 font-light md:w-500 w-auto flex items-center"><?= $texto ?></div> -->
		</div>
	</section>
	<?php if ($grilla) : ?>
		<section class="md:mb-150 mb-200">
			<?php foreach ($grilla as $key => $item) : ?>
				<?php if ($key % 2 !== 0) : ?>
					<div class="flex md:flex-row flex-col-reverse mb-130 relative">
						<div class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-190 md:text-left text-right md:pl-130" data-scroll-speed="1" data-scroll="1">
							<?= $item['texto'] ?>
						</div>
						<div class="md:w-50% w-full md:flex md:justify-end">
							<?php 
								$attr_image = array(
									"class" => "md:w-728 md:h-548 w-323 h-auto",
									"data-scroll-speed" => "4",
									"data-scroll" => "1"
								);
							?>
							<?= render_image($item['imagen'], $attr_image) ?>
						</div>
					</div>
				<?php else : ?>
					<div class="flex md:flex-row flex-col mb-130 relative">
						<div class="md:w-50% w-full">
							<?php 
								$attr_image = array(
									"class" => "md:w-728 md:h-548 w-323 h-auto",
									"data-scroll-speed" => "4",
									"data-scroll" => "1"
								);
							?>
							<?= render_image($item['imagen'], $attr_image) ?>
						</div>
						<div class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-190 md:pr-130" data-scroll-speed="1" data-scroll="1">
							<?= $item['texto'] ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>
	<?php if ($cards) : ?>
		<section class="flex md:flex-row flex-col md:mb-250 mb-90 md:gap-82 gap-5">

			<?php
			$llave = 1;
			foreach ($cards as $card) : ?>
				<?php if ($llave % 2 !== 0) : ?>
					<!-- <img class="md:w-347 md:h-589 w-171 h-276 md:mt-120 mt-30" src="<?= $card['url'] ?>" alt="<?= $card['alt'] ?>"> -->
					<?= render_image($card, "md:w-347 md:h-589 w-155 h-260 md:mt-120 mt-30 md:ml-0") ?>
				<?php else : ?>
					<!-- <img class="md:w-347 md:h-589 w-171 h-276 md:ml-0 ml-183 md:mt-0 mt--60" src="<?= $card['url'] ?>" alt="<?= $card['alt'] ?>"> -->
					<?= render_image($card, "md:w-347 md:h-589 w-155 h-260 md:ml-0 ml-162 md:mt-0 mt--60") ?>
				<?php endif ?>
				<?php $llave++; ?>
			<?php endforeach; ?>

		</section>
	<?php endif; ?>
	<?php if ($grilla2) : ?>
		<section class="mb-150">
			<?php foreach ($grilla2 as $key => $item) : ?>
				<?php if ($key % 2 == 0) : ?>
					<div class="flex md:flex-row flex-col-reverse mb-130 relative">
						<div class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-190 md:text-left text-right md:pl-130">
							<?= $item['texto'] ?>
						</div>
						<div class="md:w-50% w-full md:flex md:justify-end">
							<!-- <img class="md:w-728 md:h-548 w-323 h-auto" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>"> -->
							<?= render_image($item['imagen'], "md:w-728 md:h-548 w-323 h-auto") ?>
						</div>
					</div>
				<?php else : ?>
					<div class="flex md:flex-row flex-col mb-130 relative">
						<div class="md:w-50% w-full">
							<!-- <img class="md:w-728 md:h-548 w-323 h-auto" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>"> -->
							<?= render_image($item['imagen'], "md:w-728 md:h-548 w-323 h-auto") ?>
						</div>
						<div class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-190 md:pr-130">
							<?= $item['texto'] ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>
	<?php if ($imagen2) : ?>
		<section class=" pt-120 flex justify-center w-full">
		<div class="w-auto h-auto bg-cover relative border-15 border-lightblack md:w-1095 md:h-395 w-315 h-420 overflow-hidden" style="background-image: url(<?= $imagen2['url'] ?>)">
				<!-- <img src="<?= $imagen2['url'] ?>" class="w-1095 h-395" alt="<?= $imagen2['url'] ?>"> -->
				<div class="absolute md:top-60 top-40 w-full flex md:items-start items-center flex-col md:pl-30 pl-10 pr-10 md:pr-0">
					<h2 class="md:text-50 text-27 md:mb-20 mb-8"><?= $subtitulo ?></h2>
					<div class=" bg-white pt-10  h-auto w-auto text-center px-15 md:mb-35 mb-20 mix-blend-screen">
						<h1 class="md:text-50 text-27 text-black font-bold"><?= $titulo2 ?></h1>
					</div>
					<?php if ($link_boton) : ?>
						<a href="<?= $link_boton ?>" class="md:w-auto w-210 h-auto pt-20 pb-16 md:px-40 text-center text-18 font-medium border border-white hover:font-600 hover:text-19 hover:tracking-wider bg-cover" style="background-image:url(<?= home_url();?>/wp-content/uploads/2023/09/bg-green-2.png)">
							<?= $boton ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
</main>

<?php
get_footer();

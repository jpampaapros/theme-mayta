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
<main class="container md:mt-110 mt-50">
	<section class=" flex flex-col md:mb-90 mb-35">
		<div class="flex flex-col md:items-center justify-center md:mb-56 mb-30">
			<?php
			$attr_image = array(
				"class" => "md:w-1514 md:h-533 w-auto h-237",
				"data-scroll-speed" => "4",
				"data-scroll" => "1",
				"data-scroll-class" => "ani-opacity",
				"data-scroll-delay" => "1",

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
	<?php if ($grilla): ?>
		<section class="md:mb-150 mb-69">
			<?php foreach ($grilla as $key => $item): ?>
				<?php if ($key % 2 !== 0): ?>
					<div class="flex md:flex-row flex-col-reverse mb-130 relative">
						<div
							class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-217 text-left md:pl-130 z-2"
							data-scroll-speed="1" data-scroll="1">
							<?= $item['texto'] ?>
						</div>
						<div class="md:w-50% w-full md:flex md:justify-end mov-efect-bg-gradient">
							<?php
							$attr_image = array(
								"class" => "md:w-728 md:h-548 w-full h-auto",
								"data-scroll-speed" => "4",
								"data-scroll" => "1",
								"data-scroll-class" => "ani-opacity",
								"data-scroll-delay" => "1",
							);
							?>
							<div>
								<?= render_image($item['imagen'], $attr_image) ?>
							</div>
						</div>
					</div>
				<?php else: ?>
					<div class="flex md:flex-row flex-col mb-130 relative md:pr-0 pr-35">
						<div class="md:w-50% w-full mov-efect-bg-gradient">
							<?php
							$attr_image = array(
								"class" => "md:w-728 md:h-548 w-full h-auto",
								"data-scroll-speed" => "4",
								"data-scroll" => "1",
								"data-scroll-class" => "ani-opacity",
								"data-scroll-delay" => "1",
							);
							?>
							<div>
								<?= render_image($item['imagen'], $attr_image) ?>
							</div>
						</div>
						<div
							class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-217 md:pr-130 text-left z-1"
							data-scroll-speed="1" data-scroll="1">
							<?= $item['texto'] ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>
	<?php if ($cards): ?>
		<section class="flex md:flex-row flex-col md:mb-100 mb-74 md:gap-82 gap-5">

			<?php
			$llave = 1;
			foreach ($cards as $key => $card): ?>
				<?php if ($llave % 2 !== 0): ?>
					<?php
					$attr_image = array(
						"class" => "md:w-347 md:h-589 w-155 h-260 md:mt-120 md:ml-0 object-cover " . ($key > 0 ? "-mt-120" : "mt-30"),
						"data-scroll-speed" => "-1",
						"data-scroll" => "1",
						"data-scroll-class" => "ani-opacity",
						"data-scroll-delay" => "1",
					);
					?>
					<?= render_image($card, $attr_image) ?>
				<?php else: ?>
					<?php
					$attr_image = array(
						"class" => "md:w-347 md:h-589 w-155 h-260 md:ml-0 ml-167 md:mt-0 mt--60 object-cover",
						"data-scroll-speed" => "3",
						"data-scroll" => "1",
						"data-scroll-class" => "ani-opacity",
						"data-scroll-delay" => "1",
					);
					?>
					<?= render_image($card, $attr_image) ?>
				<?php endif ?>
				<?php $llave++; ?>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>
	<?php if ($grilla2): ?>
		<section class="mb-150">
			<?php foreach ($grilla2 as $key => $item): ?>
				<?php if ($key % 2 == 0): ?>
					<div class="flex md:flex-row flex-col-reverse mb-130 relative ">
						<div
							class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-217 text-left md:pl-130 z-2">
							<?= $item['texto'] ?>
						</div>
						<div class="md:w-50% w-full md:flex md:justify-end pl-35">
							<?php
							$attr_image = array(
								"class" => "md:w-728 md:h-548 w-full h-auto object-cover",
								"data-scroll-speed" => "3",
								"data-scroll" => "1",
								"data-scroll-class" => "ani-opacity",
								"data-scroll-delay" => "1",
							);
							?>
							<div class="mov-efect-bg-gradient">
								<?= render_image($item['imagen'], $attr_image) ?>
							</div>
						</div>
					</div>
				<?php else: ?>
					<div class="flex md:flex-row flex-col mb-130 relative">
						<div class="md:w-50% w-full">
							<!-- <img class="md:w-728 md:h-548 w-323 h-auto" src="<?= $item['imagen']['url'] ?>" alt="<?= $item['imagen']['alt'] ?>"> -->
							<?= render_image($item['imagen'], "md:w-728 md:h-548 w-full h-auto object-cover") ?>
						</div>
						<div
							class="md:w-50% w-full md:text-36 text-16 font-midium text-white flex items-center md:static absolute top-217 md:pr-130 text-left">
							<?= $item['texto'] ?>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</section>
	<?php endif; ?>
	<?php if ($imagen2): ?>
		<section class="pt-78 md:pt-120 flex justify-center w-full">
			<div
				class="w-auto h-auto bg-cover relative border-27 md:border-15 border-lightblack md:w-1095 md:h-395 w-315 h-420 overflow-hidden"
				style="background-image: url(<?= $imagen2['url'] ?>)">
				<!-- <img src="<?= $imagen2['url'] ?>" class="w-1095 h-395" alt="<?= $imagen2['url'] ?>"> -->
				<div
					class="absolute md:top-60 top-40 w-full flex md:items-start items-center flex-col md:pl-30 pl-17 pr-17 md:pr-0">
					<h2 class="md:text-50 text-27 md:mb-20 mb-8"><?= $subtitulo ?></h2>
					<div class="hidden md:block bg-white pt-10  h-auto w-auto md:text-center px-15 md:mb-35 mb-20 mix-blend-screen">
						<h1 class=" md:text-50 text-27 text-black [&>span]:font-bold"><?= $titulo2 ?></h1>
					</div>
					<div
						class="flex md:hidden text-2-lines w-full [&>span]:font-bold mix-blend-screen text-27 [&>span]:bg-white [&>span]:text-black [&>span]:inline-block mb-32">
						<?= $titulo2 ?>
					</div>
					<?php if ($link_boton): ?>
						<a href="<?= $link_boton ?>" target="_blank"
							class="md:w-auto w-full h-auto pt-20 pb-16 md:px-40 text-center text-18 font-medium border border-white hover:font-600 hover:text-19 hover:tracking-wider bg-cover"
							style="background-image:url(<?= site_url("/") ?>/wp-content/uploads/2023/09/bg-green-2.png)">
							<?= $boton ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="flex justify-center pt-78 md:pb-0 pb-28">
		<div class="md:w-101 md:h-90 w-62 h-55">
			<svg id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1385.39 1079.52">
				<g id="Capa_1-2" data-name="Capa 1">
					<polygon fill="#a45d43"
						points="1385.39 1079.52 1287.49 0 866.72 0 803.61 695.81 581.78 695.81 518.67 0 97.9 0 0 1079.52 233.96 1079.52 308.29 260.01 355.63 781.98 575.8 781.98 575.8 1079.52 809.59 1079.52 809.59 781.98 1029.76 781.98 1077.1 260.01 1151.43 1079.52 1385.39 1079.52" />
				</g>
			</svg>
		</div>
	</section>
</main>

<?php
get_footer();



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
$adorno = get_field("adorno");
?>
<main class="container md:mt-150 mt-50 ">
	<section class="sec-1 flex md:flex-row flex-col md:mt-25 md:mx-65 md:h-700 h-auto">
		<div class="md:w-50% flex justify-end relative md:h-auto h-320">
			<?php
			$attr_image = array(
				"class" => "absolute md:top-40 md:right-70 top-15 right-30 w-300 md:w-654 h-296 md:h-682 objec-cover",
				"data-scroll-speed" => "4",
				"data-scroll" => "1",
				"data-scroll-class" => "ani-opacity",
				"data-scroll-delay" => "1",
			);
			?>
			<?= render_image($adorno, "md:w-375 md:h-457 w-165 h-201") ?>
			<?= render_image($imagen, $attr_image) ?>
		</div>
		<div class="md:w-50% flex justify-end items-center texto md:h-auto md:text-left text-right mt-49 md:mt-0"
			data-scroll-speed="1" data-scroll="1">
			<?= $texto ?>
		</div>
	</section>
	<section class="flex justify-center md:pt-98 md:pt-57 md:pb-52 py-72 md:pb-75">
		<div class="md:w-79 md:h-70 w-42 h-38 ">
			<svg id="Capa_2" data-name="Capa 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1385.39 1079.52">
				<g id="Capa_1-2" data-name="Capa 1">
					<polygon fill="#a45d43"
						points="1385.39 1079.52 1287.49 0 866.72 0 803.61 695.81 581.78 695.81 518.67 0 97.9 0 0 1079.52 233.96 1079.52 308.29 260.01 355.63 781.98 575.8 781.98 575.8 1079.52 809.59 1079.52 809.59 781.98 1029.76 781.98 1077.1 260.01 1151.43 1079.52 1385.39 1079.52" />
				</g>
			</svg>
		</div>

	</section>

	<?php $switch = 1; ?>
	<?php foreach ($grilla as $item): ?>

		<?php if ($switch == 1): ?>
			<section class="md:mx-150 flex md:flex-row flex-row-reverse mb-90 md:mb-0">
				<div class="h-auto w-50% flex justify-center items-center">
					<?php
					$attr_image = array(
						"class" => "md:w-395 md:h-621 w-171 h-269 shrink-0 object-cover",
						"data-scroll-speed" => "4",
						"data-scroll" => "1",
						"data-scroll-class" => "ani-opacity",
						"data-scroll-delay" => "1",
					);
					?>
					<?= render_image($item['imagen'], $attr_image) ?>
				</div>
				<div
					class="h-auto w-50% md:pr-70 pr-30 md:text-left text-right  flex justify-end items-center md:text-18 text-13 text-white tracking-wide"
					data-scroll-speed="1" data-scroll="1">
					<?= $item['texto'] ?>
				</div>
			</section>
		<?php else: ?>
			<section class="md:mx-150 flex md:flex-row flex-row-reverse mb-90 md:mb-0">
				<div
					class="h-auto md:w-55% w-50% md:pl-130 pl-30  flex justify-start items-center md:text-18 text-13 text-white  tracking-wide"
					data-scroll-speed="1" data-scroll="1">
					<?= $item['texto'] ?>
				</div>
				<div class="h-auto md:w-45% w-50% flex justify-center items-center">
					<?php
					$attr_image = array(
						"class" => "md:w-395 md:h-621 w-171 h-269 shrink-0 object-cover",
						"data-scroll-speed" => "4",
						"data-scroll" => "1",
						"data-scroll-class" => "ani-opacity",
						"data-scroll-delay" => "1",
					);
					?>
					<?= render_image($item['imagen'], $attr_image) ?>
				</div>
			</section>
		<?php endif; ?>
		<?php if ($switch == 1) {
			$switch = 0;
		} else {
			$switch = 1;
		} ?>
	<?php endforeach; ?>
	<?php if ($imagen2): ?>
		<section class="sec-3 flex justify-center w-full md:mt-166 mt-90 mb-16">
			<div
				class="w-auto h-auto bg-cover relative border-27 md:border-15 border-lightblack md:w-1095 md:h-395 w-315 h-325 overflow-hidden"
				style="background-image: url(<?= $imagen2['url'] ?>)">
				<!-- <img src="" class="md:w-1095 md:h-395 w-315 h-325"> -->
				<div class="absolute md:top-50 top-30 w-full flex items-center flex-col">
					<div
						class="inline-block bg-white py-3 md:py-7  h-auto w-auto px-10 md:px-16 text-center  mb-30 mix-blend-screen">
						<h1 class="md:text-50 text-27 text-black font-bold md:pt-10 pt-5"><?= $titulo ?></h1>
					</div>
					<h2 class="md:text-50 text-25 mb-20 text-center"><?= $subtitulo ?></h2>
					<?php if ($link_boton): ?>
						<a href="<?= $link_boton ?>"
							class="h-auto pt-20 pb-16 px-40 text-18 font-medium border border-white hover:font-600 hover:text-19 hover:tracking-wider bg-cover"
							style="background-image:url(<?= site_url("/") ?>/wp-content/uploads/2023/09/bg-green-2.png)">
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

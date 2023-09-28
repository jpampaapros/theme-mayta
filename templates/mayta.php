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
	<section class="sec-1 flex md:flex-row flex-col md:mt-25 md:mx-65 md:h-720 h-auto">
		<div class="md:w-50% flex justify-end relative md:h-auto h-320">
			<?php 
				$attr_image = array(
					"class" => "absolute md:top-40 md:right-70 top-15 right-30 w-300 md:w-654 h-296 md:h-682 objec-cover",
					"data-scroll-speed" => "4",
					"data-scroll" => "1"
				);
			?>
			<?= render_image($adorno, "md:w-375 md:h-457 w-165 h-201") ?>
			<?= render_image($imagen, $attr_image) ?>
		</div>
		<div class="md:w-50% flex justify-end items-center texto md:h-auto md:text-left text-right mt-49 md:mt-0" data-scroll-speed="1" data-scroll="1">
			<?= $texto ?>
		</div>
	</section>
	<section class="flex justify-center md:pt-158 pt-72 pb-72 md:pb-115">
		<svg width="80" height="70" viewBox="0 0 80 70" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g id="Group 44">
				<g id="Vector">
					<path d="M79.516 70H64.386L58.0659 0H73.1959L79.516 70ZM66.9715 67.223H76.5475L70.6104 2.77702H61.0345L66.9715 67.223Z" fill="black" />
					<path d="M79.516 70H64.386L58.0659 0H73.1959L79.516 70ZM66.9715 67.223H76.5475L70.6104 2.77702H61.0345L66.9715 67.223Z" fill="url(#paint0_linear_171_1824)" />
				</g>
				<g id="Vector_2">
					<path d="M15.6441 70H0.51416L6.83427 0H21.9642L15.6441 70ZM3.57846 67.223H13.1544L18.9957 2.77702H9.41977L3.57846 67.223Z" fill="black" />
					<path d="M15.6441 70H0.51416L6.83427 0H21.9642L15.6441 70ZM3.57846 67.223H13.1544L18.9957 2.77702H9.41977L3.57846 67.223Z" fill="url(#paint1_linear_171_1824)" />
				</g>
				<g id="Vector_3">
					<path d="M12.9367 1.25873L6.83105 68.4922L9.59669 68.7433L15.7023 1.50988L12.9367 1.25873Z" fill="black" />
					<path d="M12.9367 1.25873L6.83105 68.4922L9.59669 68.7433L15.7023 1.50988L12.9367 1.25873Z" fill="url(#paint2_linear_171_1824)" />
				</g>
				<g id="Vector_4">
					<path d="M67.0747 1.26191L64.3091 1.5127L70.4057 68.7462L73.1713 68.4954L67.0747 1.26191Z" fill="black" />
					<path d="M67.0747 1.26191L64.3091 1.5127L70.4057 68.7462L73.1713 68.4954L67.0747 1.26191Z" fill="url(#paint3_linear_171_1824)" />
				</g>
				<g id="Vector_5">
					<path d="M51.0745 50.7524H29.0498L24.6449 2.77702H18.9951L20.5273 0H30.0074L34.1251 45.1026H45.9992L50.0211 0H59.597V2.77702H55.4794L51.0745 50.7524Z" fill="black" />
					<path d="M51.0745 50.7524H29.0498L24.6449 2.77702H18.9951L20.5273 0H30.0074L34.1251 45.1026H45.9992L50.0211 0H59.597V2.77702H55.4794L51.0745 50.7524Z" fill="url(#paint4_linear_171_1824)" />
				</g>
			</g>
			<defs>
				<linearGradient id="paint0_linear_171_1824" x1="63.6616" y1="6.08696" x2="93.6411" y2="19.0563" gradientUnits="userSpaceOnUse">
					<stop stop-color="#A45D43" />
					<stop offset="0.479167" stop-color="#F5C1AC" />
					<stop offset="1" stop-color="#A45D43" />
				</linearGradient>
				<linearGradient id="paint1_linear_171_1824" x1="6.10983" y1="6.08696" x2="36.0893" y2="19.0563" gradientUnits="userSpaceOnUse">
					<stop stop-color="#A45D43" />
					<stop offset="0.479167" stop-color="#F5C1AC" />
					<stop offset="1" stop-color="#A45D43" />
				</linearGradient>
				<linearGradient id="paint2_linear_171_1824" x1="8.66432" y1="50.9749" x2="11.9205" y2="51.1752" gradientUnits="userSpaceOnUse">
					<stop stop-color="#A45D43" />
					<stop offset="0.479167" stop-color="#F5C1AC" />
					<stop offset="1" stop-color="#A45D43" />
				</linearGradient>
				<linearGradient id="paint3_linear_171_1824" x1="65.5607" y1="7.29366" x2="70.1581" y2="7.14455" gradientUnits="userSpaceOnUse">
					<stop stop-color="#A45D43" />
					<stop offset="0.479167" stop-color="#F5C1AC" />
					<stop offset="1" stop-color="#A45D43" />
				</linearGradient>
				<linearGradient id="paint4_linear_171_1824" x1="29.5869" y1="4.41325" x2="59.1914" y2="37.8488" gradientUnits="userSpaceOnUse">
					<stop stop-color="#A45D43" />
					<stop offset="0.479167" stop-color="#F5C1AC" />
					<stop offset="1" stop-color="#A45D43" />
				</linearGradient>
			</defs>
		</svg>

	</section>

	<?php $switch = 1; ?>
	<?php foreach ($grilla as $item) : ?>

		<?php if ($switch == 1) : ?>
			<section class="md:mx-150 flex md:flex-row flex-row-reverse mb-90 md:mb-0">
				<div class="h-auto w-50% flex justify-center items-center">
					<?php 
						$attr_image = array(
							"class" => "md:w-395 md:h-621 w-171 h-269 shrink-0 object-cover",
							"data-scroll-speed" => "4",
							"data-scroll" => "1"
							);
					?>
					<?= render_image($item['imagen'], $attr_image) ?>
				</div>
				<div class="h-auto w-50% md:pr-70 pr-30 md:text-left text-right  flex justify-end items-center md:text-18 text-13 text-white font-light tracking-wide" data-scroll-speed="1" data-scroll="1">
					<?= $item['texto'] ?>
				</div>
			</section>
		<?php else : ?>
			<section class="md:mx-150 flex md:flex-row flex-row-reverse mb-90 md:mb-0">
				<div class="h-auto md:w-55% w-50% md:pl-130 pl-30  flex justify-start items-center md:text-18 text-13 text-white font-light tracking-wide" data-scroll-speed="1" data-scroll="1">
					<?= $item['texto'] ?>
				</div>
				<div class="h-auto md:w-45% w-50% flex justify-center items-center">
					<?php 
						$attr_image = array(
							"class" => "md:w-395 md:h-621 w-171 h-269 shrink-0 object-cover",
							"data-scroll-speed" => "4",
							"data-scroll" => "1"
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
	<?php if ($imagen2) : ?>
		<section class="sec-3 flex justify-center w-full mt-166 mb-16">
			<div class="w-auto h-auto bg-cover relative border-15 border-lightblack md:w-1095 md:h-395 w-315 h-325 overflow-hidden" style="background-image: url(<?= $imagen2['url'] ?>)">
				<!-- <img src="" class="md:w-1095 md:h-395 w-315 h-325"> -->
				<div class="absolute top-50 w-full flex items-center flex-col">
					<div class="inline-block bg-white py-3 md:py-7  h-auto w-auto px-10 md:px-16 text-center  mb-30 mix-blend-screen">
						<h1 class="md:text-50 text-27 text-black font-bold"><?= $titulo ?></h1>
					</div>
					<h2 class="md:text-50 text-25 mb-20 text-center"><?= $subtitulo ?></h2>
					<?php if ($link_boton) : ?>
						<a href="<?= $link_boton ?>" class="h-auto pt-20 pb-16 px-40 text-18 font-medium border border-white hover:font-600 hover:text-19 hover:tracking-wider bg-cover" style="background-image:url(<?= home_url();?>/wp-content/uploads/2023/09/bg-green-2.png)">
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

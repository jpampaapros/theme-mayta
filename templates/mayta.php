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
	<section class="sec-1 flex mt-25 mx-65 h-720">
		<div class="w-50% flex justify-end relative">
			<img src="<?= home_url() ?>/wp-content\themes\theme-mayta\public\image\chef\Frame.png" class="w-375 h-457" alt="mayta">
			<img src="<?= $imagen['url'] ?>" class="md:w-654 md:h-682 absolute top-40 right-70" alt="<?= $imagen['alt'] ?>">
		</div>
		<div class="w-50% flex justify-end items-center texto">
			<?= $texto ?>
		</div>
	</section>
	<section class="flex justify-center pt-158 pb-115">
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
			<section class="mx-150 flex">
				<div class="h-auto w-50% flex justify-center items-center">
					<img src="<?= $item['imagen']['url'] ?>" class="w-395 h-621" alt="<?= $item['imagen']['alt'] ?>">
				</div>
				<div class="h-auto w-50% pr-70  flex justify-end items-center text-18 text-white font-light">
					<?= $item['texto'] ?>
				</div>
			</section>
		<?php else : ?>
			<section class="mx-150 flex">
				<div class="h-auto w-55% pl-130  flex justify-start items-center text-18 text-white font-light">
					<?= $item['texto'] ?>
				</div>
				<div class="h-auto w-45% flex justify-center items-center">
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

		<div class="w-auto h-auto relative border-8 border-grey">
			<img src="<?= $imagen2['url'] ?>" class="w-1095 h-395" alt="<?= $imagen2['url'] ?>">
			<div class="absolute top-30 w-full flex items-center flex-col">
				<div class="text-50 bg-white text-black h-auto w-500 text-center font-bold mb-10">
					<?= $titulo ?>
				</div>
				<h1 class="text-50"><?= $subtitulo ?></h1>
				<a href="<?= $link_boton ?>" class="h-auto py-20 px-40 bg-gray text-18 font-medium border border-white">
					<?= $boton ?>
				</a>
			</div>
		</div>

	</section>
</main>

<?php
get_footer();

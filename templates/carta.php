<?php
//Template name: Carta
get_header();
?>
<?php
$imagen = get_field("imagen_de_fondo_banner");
$titulo = get_field("titulo_banner");
$texto = get_field("texto_banner");
$boton = get_field("boton_texto_banner");
$link = get_field("boton_link_banner");
$cards = get_field("cards_carta");
$carta = get_field("texto_carta");
$boton_carta = get_field("boton_texto_carta");
$link_carta = get_field("boton_link_carta");
$boton_ver_marinaje = get_field("boton_texto_ver_marinaje");
$preciaso = get_field("precio_maridaje");

?>
<main class="container h-auto md:mt-150 mt-50">
	<section class="relative flex justify-center flex-col-reverse md:flex-row md:mb-150 mb-50">
		<div class="flex flex-col items-center -mt-80 md:items-start md:absolute topp md:left-335 md:mt-0 left--1 z-1"
			data-scroll-speed="1" data-scroll="1">
			<h2 class="font-medium  md:text-50 text-35 text-white md:mb-20 mb-10">
				<?= $titulo ?>
			</h2>
			<div class="text-16 text-white md:mb-60 mb-10 font-medium">
				<?= $texto ?>
			</div>
			<a class="border border-white bg-transparent pt-20 pb-16 md:px-40 md:m-0 m-20 text-center h-auto md:w-250 w-180 text-18 font-medium btn-experiencia"
				target="_blank" rel="nooponer" href="<?= $link ?>">
				<?= $boton ?>
			</a>
			<p class="text-18  text-center opacity-0 text-white preciaso ml-0 mt-0 md:block  md:ml-90 md:mt-40">
				<?= $preciaso ?>
			</p>
		</div>
		<?php
		$attr_image = array(
			"class" => "md:w-713 md:h-629 md:ml-220 w-307 h-335 ml-20",
			"data-scroll-speed" => "4",
			"data-scroll" => "1",
			"data-scroll-class" => "ani-opacity",
			"data-scroll-delay" => "1",
		);
		?>
		<?= render_image($imagen, $attr_image) ?>
	</section>
	<p class="px-98 pt-2 hidden"></p>
	<?php if ($cards): ?>
		<section class="">
			<div class="flex md:flex-row flex-col justify-center md:mb-150 mb-60">
				<?php
				$cardCount = count($cards);
				foreach ($cards as $key => $item): ?>
					<?php if ($cardCount == $key + 1): ?>
						<div class="flex flex-col text-center md:h-120 h-auto w-auto pt-20 md:px-98 ">
							<h3
								class="text-22 leading-33 mb-20 hover:opacity-90 hover:underline hover:underline-offset-4 cursor-pointer md:mb-30 maridaje">
								<?= $item['titulo'] ?>
							</h3>

							<p class="text-18  md:block text-center opacity-100 text-white maridaje-price price<?= $key ?> md:opacity-1">
								<?= $item['precio'] ?>
							</p>
						</div>
					<?php else: ?>
						<div class="flex flex-col text-center pt-20 bordes md:h-120 h-auto md:px-98 w-auto ">
							<h3
								class="text-22 leading-33 mb-20 md:mb-30 hover:opacity-90 hover:underline hover:underline-offset-4 cursor-pointer maridaje">
								<?= $item['titulo'] ?>
							</h3>

							<p
								class="text-18  md:block text-center opacity-100 text-white maridaje-price price<?= $key ?> md:opacity-1 mb-20 md:mb-0">
								<?= $item['precio'] ?>
							</p>
						</div>
						<div class="bg-opacity-50 w-173 h-0.5 mx-auto mb-10 md:hidden block"></div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</section>
	<? endif; ?>
	<section class="flex justify-center">

		<div class="flex flex-col items-center justify-center py-30 text-white">
			<div class="md:w-500 w-auto text-center text-18">
				<?= $carta ?>
			</div>

			<?php if ($link_carta): ?>
				<a class="pt-20 pb-16 px-40 text-18 bg-transparent border border-white my-20 hover:font-600 hover:text-19 hover:tracking-wider"
					href="<?= $link_carta ?>" target="_blank">
					<?= $boton_carta ?>
				</a>
			<?php endif; ?>
		</div>

	</section>

</main>

<?php
get_footer();

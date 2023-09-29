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

?>
<main class="container h-auto md:mt-150 mt-50">
	<section class="relative flex justify-center md:mb-150 mb-200">
		<div class="flex flex-col items-start absolute topp md:left-335  left--1 z-1" data-scroll-speed="1" data-scroll="1">
			<h2 class="font-medium md:text-50 text-35 text-white md:mb-20 mb-10"> <?= $titulo ?></h2>
			<div class="text-16 text-white md:mb-60 mb-10 font-medium"><?= $texto ?></div>
			<a class="border border-white bg-transparent pt-20 pb-16 md:px-40 md:m-0 m-20 text-center h-auto md:w-250 w-180 text-18 font-medium  hover:font-600 hover:text-19 hover:tracking-wider" href="<?= $link ?>"><?= $boton ?></a>
		</div>
		<?php 
			$attr_image = array(
				"class" => "md:w-713 md:h-629 md:ml-220 w-307 h-335 ml-20",
				"data-scroll-speed" => "4",
				"data-scroll" => "1",
				"data-scroll-class"=>"ani-opacity",
				"data-scroll-delay"=>"1",
			);
		?>
		<?= render_image($imagen,$attr_image) ?>
	</section>
	<p class="px-98 pt-2 hidden"></p>
	<?php if ($cards) : ?>
		<section class="">		
			<div class="flex md:flex-row flex-col justify-center md:mb-150 mb-60">
				<?php
				$switch = 1;
				$cardCount = count($cards);
				foreach ($cards as $key => $item) : ?>
					<?php if ($switch == $cardCount) : ?>
						<div class="flex flex-col text-center md:h-180 h-auto w-auto pt-20 padding">
							<h3 class="text-22 leading-33 mb-30"><?= $item['titulo'] ?></h3>
							<a class="text-14 hover:underline hover:underline-offset-4 mb-30 maridaje" data-id="<?= $key ?>" href="<?= $item['link'] ?>" target="_blank"> VER MARIDAJE</a>
							<p class="text-18 text-center hidden text-white price<?= $key ?>"><?= $item['precio'] ?></p>
						</div>
					<?php else : ?>
						<div class="flex flex-col text-center pt-20 bordes md:h-180 h-auto padding">
							<h3 class="text-22 leading-33 mb-30"><?= $item['titulo'] ?></h3>
							<a class="text-14 hover:underline hover:underline-offset-4 mb-30 maridaje" data-id="<?= $key ?>" href="<?= $item['link'] ?>" target="_blank"> VER MARIDAJE</a>
							<p class="text-18 text-center hidden text-white price<?= $key ?>"><?= $item['precio'] ?></p>
						</div>
					<?php endif; ?>
					<?php $switch++ ?>
				<?php endforeach; ?>
			</div>
		</section>
	<? endif; ?>
	<section class="flex justify-center">

		<div class="flex flex-col items-center justify-center py-30 text-white">
			<div class="md:w-500 w-auto text-center">
				<?= $carta ?>
			</div>
			
			<?php if ($link_carta) : ?>
				<a class="pt-20 pb-16 px-40 text-18 bg-transparent border border-white my-20 hover:font-600 hover:text-19 hover:tracking-wider" href="<?= $link_carta ?>" target="_blank"><?= $boton_carta ?></a>
			<?php endif; ?>
		</div>

	</section>

</main>

<?php
get_footer();

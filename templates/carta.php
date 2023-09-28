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
	<section class="relative flex justify-center md:mb-150 mb-250">
		<div class="flex flex-col absolute md:top-352 md:left-335 top-300 left--6 z-1" data-scroll-speed="1" data-scroll="1">
			<h2 class="font-medium md:text-50 text-35 text-white"> <?= $titulo ?></h2>
			<div class="text-16 text-white"><?= $texto ?></div>
			<a class="border border-white bg-transparent pt-20 pb-16 md:px-40 mx-20 text-center h-auto md:w-250 w-180 text-18 font-medium my-20 hover:font-600 hover:text-19 hover:tracking-wider" href="<?= $link ?>"><?= $boton ?></a>
		</div>
		<?php 
			$attr_image = array(
				"class" => "md:w-713 md:h-629 md:ml-220 w-307 h-335 ml-20",
				"data-scroll-speed" => "4",
				"data-scroll" => "1"
			);
		?>
		<?= render_image($imagen,$attr_image) ?>
	</section>
	<?php if ($cards) : ?>
		<section class="hidden md:block">
			<div class="flex justify-center mb-150">
				<?php
				$switch = 1;
				$cardCount = count($cards);
				foreach ($cards as $key => $item) : ?>
					<?php if ($switch == $cardCount) : ?>
						<div class="flex flex-col text-center p-40">
							<h3 class="text-22 leading-33"><?= $item['titulo'] ?></h3>
							<a class="text-22 hover:underline hover:underline-offset-4 mb-30 maridaje" data-id="<?= $key ?>" href="<?= $item['link'] ?>"> VER MARIDAJE</a>
							<p class="text-center hidden text-white price<?= $key ?>"><?= $item['precio'] ?></p>
						</div>
					<?php else : ?>
						<div class="flex flex-col text-center border-e border-white p-40">
							<h3 class="text-22 leading-33"><?= $item['titulo'] ?></h3>
							<a class="text-22 hover:underline hover:underline-offset-4 mb-30 maridaje" data-id="<?= $key ?>" href="<?= $item['link'] ?>"> VER MARIDAJE</a>
							<p class="text-22 text-center hidden text-white price<?= $key ?>"><?= $item['precio'] ?></p>
						</div>
					<?php endif; ?>
					<?php $switch++ ?>
				<?php endforeach; ?>
			</div>
		</section>
		<section class="md:hidden block">
			<div class="flex flex-col justify-center mb-150">
				<?php
				$switch = 1;
				$cardCount = count($cards);
				foreach ($cards as $key => $item) : ?>
					<?php if ($switch == $cardCount) : ?>
						<div class="flex flex-col text-center p-40">
							<h3 class="text-22 leading-33"><?= $item['titulo'] ?></h3>
							<a class="text-22 hover:underline hover:underline-offset-4 mb-30 maridaje" data-id="<?= $key ?>" href="<?= $item['link'] ?>"> VER MARIDAJE</a>
							<p class="text-center hidden text-white price<?= $key ?>"><?= $item['precio'] ?></p>
						</div>
					<?php else : ?>
						<div class="flex flex-col text-center border-b border-white p-40">
							<h3 class="text-22 leading-33"><?= $item['titulo'] ?></h3>
							<a class="text-22 hover:underline hover:underline-offset-4 mb-30 maridaje" data-id="<?= $key ?>" href="<?= $item['link'] ?>"> VER MARIDAJE</a>
							<p class="text-22 text-center hidden text-white price<?= $key ?>"><?= $item['precio'] ?></p>
						</div>
					<?php endif; ?>
					<?php $switch++ ?>
				<?php endforeach; ?>
			</div>
		</section>
	<? endif; ?>
	<section class="flex justify-center">

		<div class="flex flex-col items-center justify-center py-30 text-white">
			<div class="md:w-500 w-auto">
				<?= $carta ?>
			</div>
			
			<?php if ($link_carta) : ?>
				<a class="pt-20 pb-16 px-40 text-18 bg-transparent border border-white my-20 hover:font-600 hover:text-19 hover:tracking-wider" href="<?= $link_carta ?>"><?= $boton_carta ?></a>
			<?php endif; ?>
		</div>

	</section>

</main>

<?php
get_footer();

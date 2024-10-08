<?php
//Template name: Restaurante
get_header();
$titulo = get_field("titulo_restaurante");
$galeria = get_field("galeria_restaurante");
?>
<main class="container md:mt-150 mt-50">
<div class="mx-auto md:w-500 mb-60">
	<h1 class=" md:text-center text-44 md:text-75 font-medium leading-90 "><?= $titulo ?></h1>
	<div class="h-1 w-60 bg-white md:ml-220"></div>
</div>
	
	<div class=" h-auto flex gap-20 flex-wrap mx-auto grid-images">
		<?php
		foreach ($galeria as $key => $item) : ?>
			<?php 
				$attr_image = array(
					"class" => "w-full grid-item",
					"data-scroll" => "1",
					"data-scroll-class"=>"ani-opacity",
					"data-scroll-delay"=>"1",
				);
			?>
			<?= render_image($item,$attr_image);?>
		<?php endforeach; ?>
	</div>
</main>

<?php
get_footer();

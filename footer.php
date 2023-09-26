<?php
$text_btn = get_field("boton_texto_reservar");
$link_btn = get_field("boton_link_reservar");
$redes = get_field("redes");
$icono = get_field("icono_redes");
?>
<footer class="container">

	<div class="flex justify-center">
		<a href="<?= $link_btn ?>" class="w-260 h-60 text-black flex items-center justify-center bg-orange text-18 pt-20 pb-16 px-40">
			<?= $text_btn ?>
		</a>
	</div>
	<div class="flex justify-between">
		<div>

		</div>
		<div>
			<!-- <?php foreach ($redes as $red) : ?>
				<?php var_dump($red); ?>
			<?php endforeach; ?> -->
		</div>
		<div>
<img src="<?=$icono?>['url']" alt="">
		</div>
	</div>
	<div class="hidden md:block">
	<div class="border-t-1 border-white flex justify-between text-white text-14 pt-10">
		<span href="#" class="no-underline font-normal">Copyright 2023</span>
		<div class="flex gap-22">
			<a href="#" class="no-underline font-normal">Terminos y condiciobes</a>
			<a href="#" class="no-underline font-normal">Legales</a>
			<a href="#" class="no-underline font-normal">Libro de reclamaciones</a>
		</div>
	</div>
	</div>
</footer>
<?php
wp_footer();
?>

</body>

</html>
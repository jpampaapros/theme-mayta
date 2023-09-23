<?php
$text_btn = get_field("boton_texto_reservar");
$link_btn = get_field("boton_link_reservar");
$redes = get_field("redes");
$iconos = get_field("icono_redes");
?>
<footer class="container">
<div class="flex justify-center">
	<a href="<?= $link_btn ?>" class="w-260 h-60 text-black flex items-center justify-center bg-orange">
	<?= $text_btn ?>
	</a>
</div>

		<div class="border-t-1 border-white flex justify-between text-white">
			<span href="#">Copyright 2023</span>
			<div class="flex gap-22">
				<a href="#">Terminos y condiciobes</a>
				<a href="#">Legales</a>
				<a href="#">Libro de reclamaciones</a>
			</div>
		</div>
	</footer>

	<?php
	wp_footer();
	?>

	</body>

	</html>
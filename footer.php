<?php
$text_btn = get_field("boton_texto_reservar", "option");
$link_btn = get_field("boton_link_reservar", "option");
$redes = get_field("redes", "option");
$iconos = get_field("icono_redes", "option");
$links_footer = get_field("links_footer", "option");
$texto_copyright_footer = get_field("texto_copyright_footer", "option");
$menu_locations = get_nav_menu_locations();
$menu_web = count($menu_locations) > 0 ? $menu_locations["primary"] : null;
$urlActual = get_permalink();

?>
<footer class="container md:mt-150 mt-50 <?= ($urlActual == home_url('/')) ? 'fixed bottom-20 left-0' : 'relative' ?>">
	<?php if (strpos($urlActual, "contacto") !== false): ?>
		<div class="border-t-1 border-white justify-center text-white text-18 py-50 md:hidden flex ">
			<?php if ($links_footer): ?>
				<div class="flex flex-col gap-22 text-center font-medium leading-27">
					<?php foreach ($links_footer as $item): ?>
						<?php
						$item_texto = $item['texto'];
						$item_link = $item['link'];
						?>
						<a href="<?= $item_link; ?>" class="no-underline font-normal"><?= $item_texto; ?></a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if ($urlActual == home_url('/')): ?>
		<div class="flex justify-center mb-70 md:mb-89 md:hidden">
			<a href="<?= $link_btn ?>" target="_blank"
				class="w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-0 border-white uppercase bg-cover focus:text-black ani-zoom text-coffee3 bg-coffee4 hover:text-coffee3 hover:bg-coffee4">
				<?= $text_btn ?>
			</a>
		</div>
	<?php endif; ?>
	<?php if ($urlActual != home_url('/')): ?>
		<?php if ($iconos): ?>
			<?= render_image($iconos, "absolute top-0 right-200 w-60 h-auto md:block hidden"); ?>
		<?php endif; ?>
		<?php if ($urlActual == home_url('/mayta/')): ?>
			<div class="flex justify-center mb-70 md:mb-89 md:hidden">
				<a href="<?= $link_btn ?>" target="_blank"
					class="w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-0 border-white uppercase bg-cover ani-zoom text-coffee3 bg-coffee4 hover:text-coffee3 hover:bg-coffee4">
					<?= $text_btn ?>
				</a>
			</div>
		<?php else: ?>
			<div class="flex justify-center mb-70 md:mb-89 md:hidden">
				<a href="<?= $link_btn ?>" target="_blank"
					style="background-image:url(<?= site_url("/") ?>/wp-content/uploads/2023/09/btn-reserve.jpg)"
					class="md:w-260 w-full h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-1 border-white uppercase bg-cover focus:text-black ani-zoom">
					<?= $text_btn ?>
				</a>
			</div>

		<?php endif; ?>
		<div class="hidden md:flex justify-center uppercase footer__menu mb-41 ani-menu">
			<?php
			wp_nav_menu(
				array(
					'menu' => $menu_web,
					'menu_class' => 'flex gap-24',
				)
			);
			?>
		</div>

		<?php if ($redes): ?>
			<div class="md:flex justify-center items-center mb-120 hidden">
				<?php foreach ($redes as $item): ?>
					<?php
					$item_tipo = $item['tipo'];
					$item_valor = $item['valor'];
					?>
					<a class="inline-flex w-50 h-50 justify-center items-center" target="_blank" rel="nooponer"
						href="<?= $item_valor; ?>">
						<?= get_icon($item_tipo, "h-20"); ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<div class="border-t-1 border-white justify-between text-white text-20 pt-10 hidden md:flex pb-20">
		<?php if ($texto_copyright_footer): ?>
			<span class="no-underline font-normal"><?= $texto_copyright_footer; ?></span>
		<?php endif; ?>
		<?php if ($links_footer): ?>
			<div class="flex gap-22">
				<?php foreach ($links_footer as $item): ?>
					<?php
					$item_texto = $item['texto'];
					$item_link = $item['link'];
					?>
					<a href="<?= $item_link; ?>" class="no-underline font-normal"><?= $item_texto; ?></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</footer>
<?php
wp_footer();
?>
</body>
</div>

</html>
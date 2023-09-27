<?php
$text_btn = get_field("boton_texto_reservar","option");
$link_btn = get_field("boton_link_reservar","option");
$redes = get_field("redes","option");
$iconos = get_field("icono_redes","option");
$links_footer = get_field("links_footer","option");
$texto_copyright_footer = get_field("texto_copyright_footer","option");
$menu_locations = get_nav_menu_locations();
$menu_web = count($menu_locations) > 0 ? $menu_locations["primary"] : null;
?>
<footer class="container mt-71 md:pt-136 relative">
<?php if($iconos): ?>
	<img src="<? $iconos['url']?>" class="absolute top-200 right-200 w-60 h-auto md:block hidden" alt="<? $iconos['alt']?>">
<?php endif; ?>
	<div class="flex justify-center mb-70 md:mb-89">
		<a href="<?= $link_btn ?>" style="background-image:url(<?= home_url();?>/wp-content/uploads/2023/09/btn-reserve.jpg)" class="w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-1 border-white uppercase bg-cover">
		<?= $text_btn ?>
		</a>
	</div>

	<div class="hidden md:flex justify-center uppercase footer__menu mb-41">
		<?php 
			wp_nav_menu(array(
				'menu' => $menu_web,
				'menu_class' => 'flex gap-24',
			));
		?>
	</div>
	<?php if($redes):?>
		<div class="mb-120 hidden md:block">
			<div class="flex justify-center items-center">
				<?php foreach ($redes as $item): ?>
					<?php
						$item_tipo = $item['tipo'];
						$item_valor = $item['valor'];
					?>
					<a class="inline-flex w-50 h-50 justify-center items-center" target="_blank" rel="nooponer" href="<?= $item_valor;?>">
						<?= get_icon($item_tipo,"h-20");?>
					</a>
				<?php endforeach;?>
			</div>
		</div>
	<?php endif;?>

	<div class="border-t-1 border-white justify-between text-white text-14 pt-10 hidden md:flex">
		<?php if($texto_copyright_footer):?>
			<span class="no-underline font-normal"><?= $texto_copyright_footer;?></span>
		<?php endif;?>
		<?php if($links_footer):?>
			<div class="flex gap-22">
				<?php foreach ($links_footer as $item): ?>
					<?php
						$item_texto = $item['texto'];
						$item_link = $item['link'];
					?>
					<a href="<?= $item_link;?>" class="no-underline font-normal"><?= $item_texto;?></a>
				<?php endforeach;?>
			</div>
		<?php endif;?>
	</div>
</footer>
<?php
	wp_footer();
?>

</body>

</html>
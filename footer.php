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
	<?php if (strpos($urlActual, "contacto") !== false) : ?>
		<div class="border-t-1 border-white justify-center text-white text-18 py-50 md:hidden flex ">
			<?php if ($links_footer) : ?>
				<div class="flex flex-col gap-22 text-center font-medium leading-27">
					<?php foreach ($links_footer as $item) : ?>
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
	<?php if (strpos($urlActual, "yachay") !== false) : ?>
		<section class="flex justify-center pt-78 pb-93 md:hidden">
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
	<?php endif; ?>
	<?php if ($urlActual != home_url('/')) : ?>
		<?php if ($iconos) : ?>
			<?= render_image($iconos, "absolute top-200 right-200 w-60 h-auto md:block hidden"); ?>
		<?php endif; ?>
		<?php endif; ?>
		<div class="flex justify-center mb-70 md:mb-89">
			<a href="<?= $link_btn ?>" style="background-image:url(<?= home_url(); ?>/wp-content/uploads/2023/09/btn-reserve.jpg)" class="w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-1 border-white uppercase bg-cover">
				<?= $text_btn ?>
			</a>
		</div>

	<?php if ($urlActual != home_url('/')) : ?>
		<div class="hidden md:flex justify-center uppercase footer__menu mb-41">
			<?php
			wp_nav_menu(array(
				'menu' => $menu_web,
				'menu_class' => 'flex gap-24',
			));
			?>
		</div>

		<?php if ($redes) : ?>
			<div class="md:flex justify-center items-center mb-120 hidden">
				<?php foreach ($redes as $item) : ?>
					<?php
					$item_tipo = $item['tipo'];
					$item_valor = $item['valor'];
					?>
					<a class="inline-flex w-50 h-50 justify-center items-center" target="_blank" rel="nooponer" href="<?= $item_valor; ?>">
						<?= get_icon($item_tipo, "h-20"); ?>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<div class="border-t-1 border-white justify-between text-white text-14 pt-10 hidden md:flex">
		<?php if ($texto_copyright_footer) : ?>
			<span class="no-underline font-normal"><?= $texto_copyright_footer; ?></span>
		<?php endif; ?>
		<?php if ($links_footer) : ?>
			<div class="flex gap-22">
				<?php foreach ($links_footer as $item) : ?>
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
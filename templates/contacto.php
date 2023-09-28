<?php
	//Template name: Contacto
	get_header();

	$imagen_contacto = get_field("imagen_contacto");
	$imagen_movil_contacto = get_field("imagen_movil_contacto");
	$titulo_contacto = get_field("titulo_contacto");
	$titulo_horarios = get_field("titulo_horarios");
	$horarios = get_field("horarios");
	$titulo_contactanos = get_field("titulo_contactanos");
	$redes_contactanos = get_field("redes_contactanos");
	$titulo_encuentranos = get_field("titulo_encuentranos");
	$texto_encuentranos = get_field("texto_encuentranos");
	$imagen_mapa_encuentranos = get_field("imagen_mapa_encuentranos");
	$link_waze_encuentranos = get_field("link_waze_encuentranos");
	$link_google_encuentranos = get_field("link_google_encuentranos");
?>

<main class="md:mt-150 mt-50">
	<article class="md:mx-133 md:flex flex-col md:flex-row gap-140 px-16 md:px-0">
		<section class="md:w-700 shrink-0">
			<?php 
				$attr_image = array(
					"class" => "w-full mb-50 md:mb-0 hidden md:block",
					"data-scroll-speed" => "4",
					"data-scroll" => "1"
				);
			?>
			<?php 
				$attr_image2 = array(
					"class" => "w-full mb-50 md:mb-0 md:hidden",
					"data-scroll-speed" => "4",
					"data-scroll" => "1"
				);
			?>
			<?= render_image($imagen_contacto,$attr_image);?>	
			<?= render_image($imagen_movil_contacto,$attr_image2);?>	
		</section>
		<section class="w-full" data-scroll-speed="1" data-scroll="1">

			<?php if($titulo_contacto):?>
				<h2 class="text-44 md:text-75 leading-60 md:leading-90 title-before pb-14 md:pb-22 font-medium mb-38 md:mb-78"><?= $titulo_contacto;?></h2>
			<?php endif;?>

			<div class="md:flex gap-153">
				<div>
					<?php if($titulo_horarios):?>
						<h2 class="flex gap-10 font-semibold text-25 leading-30 mb-10 md:mb-20 items-center">
							<?= get_icon("time","w-21");?>
							<?= $titulo_horarios;?>
						</h2>
					<?php endif;?>
					<?php if($horarios):?>
						<div class="mb-47 md:mb-92">
							<?php foreach ($horarios as $item): ?>
								<?php
									$item_title = $item["titulo"];
									$item_text = $item["texto"]; 		
								?>
								<div class="mb-28 text-18 leading-27">
									<div class="font-semibold md:mb-3">
										<?= $item_title;?>
									</div>
									<div class="[&>p]:font-light">
										<?= $item_text;?>
									</div>
								</div>
							<?php endforeach;?>
						</div>
					<?php endif;?>
				</div>

				<div class="mb-40 md:mb-0">
					<?php if($titulo_contactanos):?>
						<h2 class="flex gap-10 font-semibold text-25 leading-30 mb-20 items-center">
							<?= get_icon("email","w-21");?>
							<?= $titulo_contactanos;?>
						</h2>
					<?php endif;?>

					<?php if($redes_contactanos):?>
						<div class="flex gap-8">
							<?php foreach ($redes_contactanos as $item): ?>
								<?php
									$tipo_item = $item["tipo"];
									$valor_item = $item["valor"];
								?>
								<div>
									<a class="flex gap-10 mb-20 text-19 leading-27 items-center border-1 border-white border-solid rounded-full min-w-40 min-h-40 justify-center items-center <?= ($tipo_item == "whatsapp") ? 'px-17': '';?>" href="<?=  ($tipo_item == "whatsapp") ? 'https://api.whatsapp.com/send/?phone=51'.$valor_item : $valor_item;?>" target="_blank" rel="nooponer">
										<?= get_icon($tipo_item,"w-auto h-18");?>
										<?php if($tipo_item == "whatsapp"):?>
											<span><?= $valor_item;?></span>
										<?php endif;?>
									</a>
								</div>
							<?php endforeach;?>
						</div>
					<?php endif;?>

				</div>
			</div>
			<div class="mb-41">
				<?php if($titulo_encuentranos):?>
					<h2 class="flex gap-10 font-semibold text-25 leading-30 mb-20 items-center">
						<?= get_icon("location","w-21");?>
						<?= $titulo_encuentranos;?>
					</h2>
				<?php endif;?>
				<?php if($texto_encuentranos):?>
					<div class="text-16 leading-24">
						<?= $texto_encuentranos;?>
					</div>
				<?php endif;?>
			</div>
			
			<?php if($imagen_mapa_encuentranos):?>
				<?= render_image($imagen_mapa_encuentranos, "w-full mb-28 md:mb-55");?>
			<?php endif;?>

			<div class="flex gap-36">

				<?php if($link_waze_encuentranos):?>
					<a class="text-center w-full bg-cyan text-black font-semibold p-14 text-16 leading-24 flex justify-center items-center gap-10 hover:text-black" target="_blank" rel="nooponer" href="<?= $link_waze_encuentranos;?>">
						<?= get_icon("waze","w-32");?>
						Waze
					</a>
				<?php endif;?>

				<?php if($link_google_encuentranos):?>
					<a class="text-center w-full bg-white text-black font-semibold p-14 text-16 leading-24 flex justify-center items-center gap-10 hover:text-black" target="_blank" rel="nooponer" href="<?= $link_google_encuentranos;?>">
						<?= get_icon("google-maps","w-21");?>
						Google Maps
					</a>
				<?php endif;?>
			</div>
		</section>
	</article>
</main>

<?php
get_footer();

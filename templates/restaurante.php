<?php
//Template name: Restaurante
get_header();
?>
<?php
$titulo = get_field("titulo_restaurante");
$galeria = get_field("galeria_restaurante");
?>
<main class="container my-150">
<div class="mx-auto w-500 mb-60">
	<h1 class="text-center text-75 font-medium leading-90 "><?= $titulo ?></h1>
	<div class="h-1 w-60 bg-white ml-220"></div>
</div>
	
	<div class="w-1510 h-auto flex gap-20 flex-wrap mx-auto">
		<?php
		$switch1 = 0;
		$switch2 = 0;
		$switch3 = 0;
		foreach ($galeria as $key => $item) : ?>



			<?php if ($key == 1) {
				$switch1 = 1;
			} ?>

			<?php if ($switch1 == 1) : ?>
				<img class="w-534 h-564" src="<?= $item['url'] ?>" alt="<?= $item['alt'] ?>">

				<?php $switch3++; ?>

			<?php endif; ?>

			<?php if ($switch2 == 1) : ?>
				<img class="w-952 h-564" src="<?= $item['url'] ?>" alt="<?= $item['alt'] ?>">

				<?php $switch3++; ?>

			<?php endif; ?>

			<?php if ($key == 0) : ?>
				<img class="w-952 h-564" src="<?= $item['url'] ?>" alt="<?= $item['alt'] ?>">

			<?php endif; ?>

			<?php if ($switch1 == 1 && $switch3 == 2) {
				$switch1 = 0;
				$switch2 = 1;
				$switch3 = 0;
			} ?>
			<?php if ($switch2 == 1 && $switch3 == 2) {
				$switch1 = 1;
				$switch2 = 2;
				$switch3 = 0;
			} ?>

		<?php endforeach; ?>
	</div>
</main>

<?php
get_footer();

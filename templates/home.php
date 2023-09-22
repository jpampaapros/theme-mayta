<?php
	//Template name: Home
	get_header();
?>
<?php
$banner = get_field("imagen_desktop_banner");
?>
<main>
<picture>
  <source srcset="#" media="(max-width: 768px)" />
  <img src="<?= $banner['url'] ?>" alt="<?= $banner['alt'] ?>" />
</picture>


</main>

<?php
get_footer();

<?php
  get_header();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php wp_head();?>
</head>

<?php
  $logo = get_site_logo(["class" => "site-logo", "alt" => get_bloginfo('name')]);
?>
<body <?php body_class(); ?> <?php generate_do_microdata('body'); ?>>

  <header class="bg-orange">
   <h2>Header</h2>
  </header>
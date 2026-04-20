<?php
//Template name: Home
get_header();
?>
<?php
$descripcion = get_field("descripcion");
$boton_conoce_mas = get_field("boton_conoce_mas");
$banner = get_field("imagen_desktop_banner");
$banner2 = get_field("imagen_mobile_banner");
?>
<main class="w-full h-screen absolute z--10 top-0">

  <?= render_image($banner, "w-full h-screen md:block hidden object-cover ani-fade-zoom object-top") ?>
  <?= render_image($banner2, "w-full h-screen block md:hidden absolute z--10 top-0 object-cover ani-fade-zoom object-top") ?>


  <?php if ($descripcion): ?>
    <div class="absolute top-45% left-50% transform -translate-x-50% -translate-y-50% text-center text-18 md:text-40">
      <?= $descripcion ?>
    </div>
  <?php endif; ?>

  <?php if ($boton_conoce_mas): ?>
    <a href="<?= $boton_conoce_mas['url'] ?>" target="<?= $boton_conoce_mas['target'] ?>"
      class="absolute top-65% left-50% transform -translate-x-50% -translate-y-50% w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-0 border-white uppercase bg-cover focus:text-black  text-coffee3 bg-coffee4 hover:scale-110 transition-transform duration-300">
      <?= $boton_conoce_mas['title'] ?>
    </a>
  <?php endif; ?>

</main>

<?php
get_footer();
?>
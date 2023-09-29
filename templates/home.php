
  <?php
  //Template name: Home
  get_header();
  ?>
  <?php
  $banner = get_field("imagen_desktop_banner");
  $banner2 = get_field("imagen_mobile_banner");
  ?>
  <main class="w-full h-screen absolute z--10 top-0">

    <?= render_image($banner,"w-full h-screen md:block hidden object-cover ani-fade-zoom") ?>
    <?= render_image($banner2,"w-full h-screen block md:hidden absolute z--10 top-0 object-cover ani-fade-zoom") ?>

  </main>

  <?php
  get_footer();
  ?>

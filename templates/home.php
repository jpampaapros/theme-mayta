
  <?php
  //Template name: Home
  get_header();
  ?>
  <?php
  $banner = get_field("imagen_desktop_banner");
  ?>
  <main class="w-full h-700">

    <img class="w-full h-screen md:block hidden absolute z--10 top-0 "  src="<?= $banner['url'] ?>" alt="<?= $banner['alt'] ?>" />


  </main>
  <?php
  get_footer();
  ?>

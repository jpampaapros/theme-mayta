<?php
//Template name: Home
get_header();
?>
<main class="w-full py-80 ">
      <div class="pag-404 flex justify-center items-center container flex-col h-auto">

            <h1 class=" text-120 leading-50">404</h1>
            <p class="text-30 mt-20">Pagina no encontrada</p>
            <a href="<?= home_url() ?>" class="text-white hover:text-blue mt-20">Regresar al Home</a>
      </div>
</main>

<?php
get_footer();
?>
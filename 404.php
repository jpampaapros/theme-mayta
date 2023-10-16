<?php
//Template name: Home
get_header();
?>
<main class="w-full h-screen flex justify-center items-center mt--20">
      <div class="pag-404 flex justify-center items-center container flex-col h-auto">

            <h1 class=" text-120 leading-50">404</h1>
            <p class="text-30 mt-30">Pagina no encontrada</p>
            <a href="<?= home_url() ?>" class="text-25 text-white hover:text-blue mt-40">Regresar al Home</a>
      </div>
</main>

<?php
get_footer();
?>
<?php

function renderizar_selector_lenguajes_lista() {
  ob_start();
  $languages = icl_get_languages('skip_missing=0&orderby=code');
  ?>
  <?php if($languages):?>  
    <div class="flex items-start overflow-hidden hover:overflow-visible h-23 hover:h-auto relative">
        <?php get_icon("languege-switcher","w-21 h-21 mt-2 mr-21");?>
        <ul class="bg-transparent border-none text-white w-21 text-18 uppercase inline-block absolute top-0 right-0">
            <?php
            foreach ($languages as $language) {
                echo '<li>';
                if (!$language['active']) {
                    echo '<a href="' . $language['url'] . '">';
                }
                echo icl_disp_language($language['code']);
                if (!$language['active']) {
                    echo '</a>';
                }
                echo '</li>';
            }
            ?>
        </ul>
    </div> 
  <?php endif;?>


  <?php
  return ob_get_clean();
}

add_shortcode('selector_lenguajes', 'renderizar_selector_lenguajes_lista');
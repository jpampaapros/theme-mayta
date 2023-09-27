<?php
get_header();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php wp_head(); ?>
</head>

<?php
$logo = get_site_logo(["class" => "site-logo", "alt" => get_bloginfo('name')]);
$logo_desktop = get_field("logo_desktop", "option");
$logo_mobile = get_field("logo_mobile", "option");
$text_btn = get_field("boton_reservar", "option");
$link_btn = get_field("link_boton_reservar", "option");
$icono_red = get_field("icono_red", "option");
$link_red = get_field("link_red", "option");
?>

<body <?php body_class(); ?> <?php generate_do_microdata('body'); ?>>

  <header class="flex justify-between container md:py-36 items-end bg-transparent py-20">
    <a href="<?= home_url() ?>" class="hidden md:block">
      <?= render_image($logo_desktop, "h-67 w-auto hidden md:block"); ?>
    </a>
    <a href="<?= home_url() ?>" class="ml--4 block md:hidden">
      <?= render_image($logo_mobile, "h-37 w-auto block md:hidden"); ?>
    </a>
    <div class="flex md:gap-22 gap-5">
      <div class="md:block hidden">
        <?php
        wp_nav_menu(array(
          'menu' => 'Principal',
          'menu_class' => 'flex gap-24',
        ));
        ?>
      </div>
      <a href="#" class="w-20 h-20 md:block hidden"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="20px" height="20px">
          <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <g transform="scale(5.12,5.12)">
              <path d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z"></path>
            </g>
          </g>
        </svg></a>
      <div class="h-30 w-1 bg-white ml-10 mr-0 md:block hidden"></div>

      <select name="idioma" id="idioma" class="bg-transparent border-none text-white text-18">
        <option value="es" selected>ES</option>
        <option value="en">EN</option>

      </select>
      <div class="h-30 w-1 bg-white mx-10 mr-0 block md:hidden"></div>

      <a href="#" class="w-32 h-32 block md:hidden hamburger">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_60_433)">
            <path d="M32 14.6666H0V16H32V14.6666Z" fill="#DCD3CB" />
            <path d="M18.6667 5.33337H0V6.66671H18.6667V5.33337Z" fill="#DCD3CB" />
            <path d="M18.6667 24H0V25.3333H18.6667V24Z" fill="#DCD3CB" />
          </g>
          <defs>
            <clipPath id="clip0_60_433">
              <rect width="32" height="32" fill="white" />
            </clipPath>
          </defs>
        </svg>
      </a>
    </div>
  </header>
  <div id="slidemenu" class="bg-green3 w-100% z-999 h-100% hidden">
    <div class="flex justify-between container items-end bg-transparent py-20 mb-69">
      <a href="<?= home_url() ?>" class="ml--4">
        <?= render_image($logo_mobile, "h-37 w-auto block md:hidden"); ?>
      </a>
      <div class="flex gap-5">

        <select name="idioma" id="idioma" class="bg-transparent border-none text-white text-18">
          <option value="es" selected>ES</option>
          <option value="en">EN</option>

        </select>
        <div class="h-30 w-1 bg-white mx-10 mr-0 block md:hidden"></div>

        <a href="#" class="w-32 h-32 block md:hidden hamburger2">
          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_60_433)">
              <path d="M32 14.6666H0V16H32V14.6666Z" fill="#DCD3CB" />
              <path d="M18.6667 5.33337H0V6.66671H18.6667V5.33337Z" fill="#DCD3CB" />
              <path d="M18.6667 24H0V25.3333H18.6667V24Z" fill="#DCD3CB" />
            </g>
            <defs>
              <clipPath id="clip0_60_433">
                <rect width="32" height="32" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>
    </div>

    <div class="flex flex-col justify-center  mb-60">
      <?php
      wp_nav_menu(array(
        'menu' => 'Principal',
        'menu_class' => 'flex flex-col items-center justify-center text-24 font-medium gap-24 menu-mobile',
      ));
      ?>
    </div>
    <div class="flex flex-col items-center justify-center gap-24">
      <?php if ($link_btn) : ?>
        <a href="<?= $link_btn ?>" style="background-image:url(<?= home_url(); ?>/wp-content/uploads/2023/09/btn-reserve.jpg)" class="w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-1 border-white uppercase bg-cover">
          <?= $text_btn ?>
        </a>
      <?php endif; ?>
      <?php if ($link_red) : ?>
      <a href="<?= $link_red ?>" class="w-20 h-20 block md:hidden">
      <?= $icono_red ?>
      </a>
        <?php endif; ?>
    </div>

  </div>
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
$text_btn_r = get_field("boton_texto_reservar", "option");
$link_btn_r = get_field("boton_link_reservar", "option");
$urlActual = get_permalink();
// $dominio = $_SERVER['HTTP_HOST'];
$current_url = $_SERVER['REQUEST_URI'];
$cadena = '/en/';
?>
<!-- locomotive-scroll -->
<?php 
  $body_classes = get_body_class();
  $body_classes = implode(" ",$body_classes);
?>
<body class="<?php echo $body_classes;?> " <?php generate_do_microdata('body'); ?> style="background-image: url(<?= home_url();?>/wp-content/uploads/2023/09/fondo.webp)">
  <div class="" data-scroll-container>
  <header class="flex justify-between container md:py-36 bg-transparent py-20">
    <a href="<?= home_url() ?>" class="hidden md:block">
      <?= render_image($logo_desktop, "h-67 w-auto hidden md:block"); ?>
    </a>
    <a href="<?= home_url() ?>" class="ml--1 block md:hidden">
      <?= render_image($logo_mobile, "h-37 w-auto block md:hidden"); ?>
    </a>
    <div class="flex md:gap-22 gap-5 ">
      <div class="md:block hidden ">
        <?php
        wp_nav_menu(array(
          'menu' => 'Principal',
          'menu_class' => 'flex gap-24 pri-menu',
        ));
        ?>
      </div>

      <a href="<?= $link_red ?>" target="_blank" rel="nooponer" class="w-20 h-20 md:block hidden pri-menu">
      <?= $icono_red ?>
      </a>
      <div class="h-30 w-1 bg-white ml-10 mr-0 md:block hidden pri-menu"></div>
      <div class="w-auto md:h-50 pri-menu">
        <select name="idioma" id="idioma"  class="bg-transparent border-none text-white text-18">
        <option value="es" <?php echo (strpos($current_url, $cadena) === 0) ? '' : 'selected'; ?>>ES</option>
          <option value="en" <?php echo (strpos($current_url, $cadena) === 0) ? 'selected' : ''; ?> >EN</option>
        </select>
      </div>
      <?php if ($urlActual == home_url('/')) : ?>

          <a href="<?= $link_btn_r ?>" target="_blank" style="background-image:url(<?= home_url(); ?>/wp-content/uploads/2023/09/btn-reserve.jpg)" class="w-260 h-60 text-black md:flex hidden ml-10 items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-1 border-white uppercase bg-cover">
            <?= $text_btn_r ?>
          </a>

      <?php endif; ?>

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

      <select name="idioma" id="idioma"  class="bg-transparent border-none text-white text-18">
        <option value="es" <?php echo (strpos($current_url, $cadena) === 0) ? '' : 'selected'; ?>>ES</option>
          <option value="en" <?php echo (strpos($current_url, $cadena) === 0) ? 'selected' : ''; ?> >EN</option>
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
        <a href="<?= $link_btn ?>" target="_blank" style="background-image:url(<?= home_url(); ?>/wp-content/uploads/2023/09/btn-reserve.jpg)" class="w-260 h-60 text-black flex items-center justify-center text-18 pt-20 pb-16 px-40 font-medium border-solid border-1 border-white uppercase bg-cover">
          <?= $text_btn ?>
        </a>
      <?php endif; ?>
      <?php if ($link_red) : ?>
        <a href="<?= $link_red ?>" target="_blank" rel="nooponer" class="w-20 h-20 block md:hidden">
          <?= $icono_red ?>
        </a>
      <?php endif; ?>
    </div>

  </div>
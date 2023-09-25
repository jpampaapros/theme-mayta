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
?>

<body <?php body_class(); ?> <?php generate_do_microdata('body'); ?>>

  <header class="flex justify-between container md:py-36 items-end bg-transparent">
    <a href="<?php home_url() ?>"><h2>LOGO</h2></a>
    

    <div class="flex gap-22">
      <?php
      wp_nav_menu(array(
        'menu' => 'Principal',
        'menu_class' => 'flex gap-24',
      ));
      ?>
<a href="#" class="w-20 h-20"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="20px" height="20px"><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z"></path></g></g></svg></a>
<div class="h-30 w-1 bg-white ml-10 mr-0"></div>

<select name="idioma" id="idioma" class="bg-transparent border-none text-white text-18">
<option value="es" selected>ES</option>
  <option value="en" >EN</option>
  
</select>


    </div>
  </header>
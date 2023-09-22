<?php

function render_image($id, $attr = "")
{

  if (!$id) return null;
  if (is_array($id)) $id = $id['ID'];

  $attr = is_array($attr) ? get_attr($attr) : array("class" => $attr);

  if (is_array($id)):
    if (array_key_exists('ID', $id)):
      return wp_get_attachment_image($id['ID'], "full", false, $attr);
    endif;
    return null;
  endif;

  return wp_get_attachment_image($id, "full", false, $attr);
}

function get_site_logo(array $attr = [])
{
  $logo = get_theme_mod('custom_logo');
  if (!$logo) return null;
  return wp_get_attachment_image($logo, 'full', false, $attr);
}

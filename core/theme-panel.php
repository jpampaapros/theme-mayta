<?php
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Panel del tema',
        'menu_title'	=> 'Panel del tema',
        'menu_slug' 	=> 'panel-theme',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header',
        'menu_title'    => 'Header',
        'parent_slug'   => 'panel-theme',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'panel-theme',
    ));

}
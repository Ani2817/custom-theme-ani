<?php

function register_profotech_theme(){
            //menu register code

    register_nav_menus(

        array(
            'primary-menu'=> _('Primary Menu'),
            'footer_menu'=> _('Footer Menu'),
        )
        );
  }
//attach with action hook
  add_action('init','register_profotech_theme');


  add_theme_support('custom-logo');

  function themename_custom_logo_setup(){
    $defaults= array(
        'height' => 50,
        'weight' => 177,
        'flex-height' => true,
        'fles-width' => true,
        'header-text' => array('site-title','site-description'),
    );
    add_theme_support('custom-logo',$defaults);
  }
  add_action('after_setup_theme','themename_custom_logo_setup');

function register_my_projects(){
    register_post_type('custom_projects',array(
        'labels'=>array(
            'name'=>__('Our Projects'),
            'singular_name'=>_('custom_projects')
        ),
        'public'=>true,
        "show_in_nav_menus"=>true,
        'has_archive'=>false,
        'supports'=> array('title','editor','excerpt','author','comments','revisions','custom-fields')
    )
);
}

add_action("init","register_my_projects")
  ?>

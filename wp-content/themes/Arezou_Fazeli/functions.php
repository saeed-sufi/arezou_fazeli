<?php

function page_banner($args=null) {

  if(!$args['photo']) {
    if(get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    }
      else {
        $args['photo'] = get_theme_file_uri('/assets/images/ocean_view.jpg');
      }
    }
  
  ?>
  
<div class="page-banner">
    <img class="page-banner__img" src="<?php echo $args['photo']; ?>"
      alt="">
</div>

  <?php
}

function arezou_fazeli_files() {
  wp_enqueue_script('main_js', get_theme_file_uri('/assets/js/App.js'), NULL, microtime(), true);
  wp_enqueue_style ('theme-style', get_stylesheet_uri(), '', time());
  wp_enqueue_style ('font_awesome', get_template_directory_uri().'/assets/css/font-awesome/FontAwesome.Pro.5.13.0.Web/css/all.min.css');
  wp_enqueue_style ('font_awesome', get_template_directory_uri().'/assets/css/font-awesome/FontAwesome.Pro.5.13.0.Web/css/fontawesome.min.css');

}

add_action('wp_enqueue_scripts', 'arezou_fazeli_files');

function website_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 2500, 800, true);
}

add_action('after_setup_theme', 'website_features');

function websiteMapKey($api) {
  $api['key'] = 'AIzaSyBCeN6yha_7a1Z9lIpG8raQHCT-QbwAFnI';
  return $api;
}
add_filter('acf/fiedls/google_map/api', 'websiteMapKey');
?>



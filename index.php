<?php
/*
Template Name: Nikolai Template
*/
get_header();

if (have_posts()) :
 while (have_posts()) : the_post();
  $custom_title = carbon_get_post_meta(get_the_ID(), 'title');
  $custom_image = carbon_get_post_meta(get_the_ID(), 'image');

  echo '<h2>' . esc_html($title) . '</h2>';
  if (!empty($image)) {
   echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($title) . '">';
  }

 endwhile;
endif;

get_footer();

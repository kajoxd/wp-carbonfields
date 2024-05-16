<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields()
{
  Container::make('post_meta', 'Custom Fields')
    ->add_fields(array(
      Field::make('text', 'title', 'Title'),
      Field::make('image', 'image', 'Image'),
      
    ));
}

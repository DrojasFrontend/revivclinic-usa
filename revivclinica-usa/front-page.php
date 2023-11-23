<?php 

get_header() ;

$fields = get_fields();

$hero = (object) [
  'hero_bckg' => $fields['hero_bckg'],
  'hero_bckg_mobile' => $fields['hero_bckg_mobile'],
  'hero_title' => $fields['hero_title'],
  'hero_copy' => $fields['hero_copy'],
  'hero_cta_icon' => $fields['hero_cta_icon'],
  'hero_cta_text' => $fields['hero_cta_text'],
  'hero_cta_link' => $fields['hero_cta_link'],
  'hero_cta_style' => $fields['hero_cta_style'],
];

?>

<?php get_template_part('templates/sections/hero-banner', null, $hero); ?>

<?php get_footer() ?>
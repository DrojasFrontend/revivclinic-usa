<?php 

get_header() ;

$fields = get_fields();

$hero = (object) [
  'hero_bckg' => $fields['hero_bckg'],
  'hero_bckg_mobile' => $fields['hero_bckg_mobile'],
  'hero_title' => $fields['hero_title'],
  'hero_copy' => $fields['hero_copy'],
  'hero_cta_text' => $fields['hero_cta_text'],
  'hero_cta_link' => $fields['hero_cta_link'],
  'hero_cta_style' => $fields['hero_cta_style'],
];

$treatments = (object) [
  'treatments_title' => $fields['treatments_title'],
  'group_treatments' => $fields['group_treatments'],
  'treatments_cta_text' => $fields['treatments_cta_text'],
  'treatments_cta_link' => $fields['treatments_cta_link'],
];

?>

<?php get_template_part('templates/sections/hero-banner', null, $hero); ?>
<?php get_template_part('templates/sections/treatments', null, $treatments); ?>

<?php get_footer() ?>
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

$banner = (object) [
  'group_banner' => $fields['group_banner'],
];

$textImage = (object) [
  'group_text_image' => $fields['group_text_image'],
  'instance_id' => 1,
];

$textImage2 = (object) [
  'group_text_image_2' => $fields['group_text_image_2'],
  'instance_id' => 2,
];

?>

<?php get_template_part('templates/sections/hero-banner', null, $hero); ?>
<?php get_template_part('templates/sections/treatments', null, $treatments); ?>
<?php get_template_part('templates/components/slider', null); ?>
<?php get_template_part('templates/components/banner', null, $banner); ?>
<?php get_template_part('templates/components/block-text-image', null, $textImage); ?>
<?php get_template_part('templates/components/block-text-image', null, $textImage2); ?>

<?php get_footer() ?>
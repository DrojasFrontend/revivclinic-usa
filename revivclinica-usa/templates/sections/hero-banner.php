<?php 

$hero_bckg = isset($args->hero_bckg) ? $args->hero_bckg : '';
if (is_array($hero_bckg) && !empty($hero_bckg['url'])) {
  $image_url = $hero_bckg['url'];
  $image_width = $hero_bckg['width'];
  $image_height = $hero_bckg['height'];
} else {
  $image_url = '';
  $image_width = '';
  $image_height = '';
}

$hero_bckg_mobile = isset($args->hero_bckg_mobile) ? $args->hero_bckg_mobile : '';
if (is_array($hero_bckg_mobile) && !empty($hero_bckg_mobile['url'])) {
  $image_url_mobile = $hero_bckg_mobile['url'];
  $image_width_mobile = $hero_bckg_mobile['width'];
  $image_height_mobile = $hero_bckg_mobile['height'];
} else {
  $image_url_mobile = '';
  $image_width_mobile = '';
  $image_height_mobile = '';
}

$hero_title = isset($args->hero_title) ? $args->hero_title : '';
$hero_copy = isset($args->hero_copy) ? $args->hero_copy : '';
$hero_cta_icon = isset($args->hero_cta_icon) ? $args->hero_cta_icon : '';
$hero_cta_text = isset($args->hero_cta_text) ? $args->hero_cta_text : '';
$hero_cta_link = isset($args->hero_cta_link) ? $args->hero_cta_link : '';
$hero_cta_style = isset($args->hero_cta_style) ? $args->hero_cta_style : '';
?>

<section class="hero">
  <div class="hero__wrapper">
    <figure class="hero__desktop">
      <img class="hero__img" src="<?= $image_url ?>" width="<?= $image_width ?>" height="<?= $image_height ?>" loading="lazy" alt="Hero Background Image">
    </figure>
    <figure class="hero__mobile">
      <img class="hero__img" src="<?= $image_url_mobile ?>" width="<?= $image_width_mobile ?>" height="<?= $image_height_mobile ?>" loading="lazy" alt="Hero Background Image">
    </figure>
    <div class="hero__container">
      <h1 class="hero__title h1 pb-40"><?= $hero_title ?></h1>
      <div class="hero__copy fz-28 pb-20"><?= $hero_copy ?></div>
      <?php 
        get_template_part('templates/components/buttons', null, [
          'icon'  => $hero_cta_icon,
          'text'  => $hero_cta_text,
          'link'  => $hero_cta_link,
          'style' => $hero_cta_style,
        ]);
      ?>
    </div>
  </div>
</section>


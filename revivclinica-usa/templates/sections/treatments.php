<?php

$treatments_title = isset($args->treatments_title) ? $args->treatments_title : '';
$treatments_cta_text = isset($args->treatments_cta_text) ? $args->treatments_cta_text : '';
$treatments_cta_link = isset($args->treatments_cta_link) ? $args->treatments_cta_link : '';

$treatment_image_1 = isset($args->group_treatments['treatment_image_1']) ? $args->group_treatments['treatment_image_1'] : '';
if (is_array($treatment_image_1) && !empty($treatment_image_1['url'])) {
  $treatment_image_url = $treatment_image_1['url'];
  $treatment_image_width = $treatment_image_1['width'];
  $treatment_image_height = $treatment_image_1['height'];

  $image_sizes = array(
    '(max-width: 600px) 100vw',
    '(max-width: 1200px) 50vw',
    'calc(33.3333% - 20px)' // adjust this value based on your layout
  );

  $srcset = wp_get_attachment_image_srcset($treatment_image_1['id'], 'full');
  $sizes = implode(', ', $image_sizes);


} else {
  $treatment_image_url = '';
  $treatment_image_width = '';
  $treatment_image_height = '';
  $srcset = '';
  $sizes = '';
}

$treatments_name_1 = isset($args->group_treatments['treatments_name_1']) ? $args->group_treatments['treatments_name_1'] : '';
$treatments_detail_1 = isset($args->group_treatments['treatments_detail_1']) ? $args->group_treatments['treatments_detail_1'] : '';
$treatments_cta_link_1 = isset($args->group_treatments['treatments_cta_link_1']) ? $args->group_treatments['treatments_cta_link_1'] : '';

$treatments_name_2 = isset($args->group_treatments['treatments_name_2']) ? $args->group_treatments['treatments_name_2'] : '';
$treatments_detail_2 = isset($args->group_treatments['treatments_detail_2']) ? $args->group_treatments['treatments_detail_2'] : '';
$treatments_cta_link_2 = isset($args->group_treatments['treatments_cta_link_2']) ? $args->group_treatments['treatments_cta_link_2'] : '';

$treatments_name_3 = isset($args->group_treatments['treatments_name_3']) ? $args->group_treatments['treatments_name_3'] : '';
$treatments_detail_3 = isset($args->group_treatments['treatments_detail_3']) ? $args->group_treatments['treatments_detail_3'] : '';
$treatments_cta_link_3 = isset($args->group_treatments['treatments_cta_link_3']) ? $args->group_treatments['treatments_cta_link_3'] : '';

?>

<section class="treatments">
  <div class="treatments__wrapper">
    <div class="treatments__title">
      <h2 class="fz-52"><?= $treatments_title ?></h2>
    </div>
    <div class="treatments__container">
      <div class="treatments__grid">
        <div class="treatments__item">
          <figure class="treatments__img">
            <img class="" 
              src="<?= $treatment_image_url ?>" 
              width="<?= $treatment_image_width ?>" 
              height="<?= $treatment_image_height ?>" 
              alt="<?= $treatments_name_1 ?>"
              srcset="<?= esc_attr($srcset) ?>"
              sizes="<?= esc_attr($sizes) ?>">
          </figure>
          <a class="treatments__item-link fz-30" href="<?= $treatments_cta_link_1['url'] ?>" aria-label="<?= $treatments_name_1 ?>" target="_blank">
            <?= $treatments_name_1 ?>
          </a>
          <p class="treatments__text fz-18">
            <?= $treatments_detail_1 ?>
          </p>
        </div>
        <div class="treatments__item">
        <figure class="treatments__img">
            <img class="" 
              src="<?= $treatment_image_url ?>" 
              width="<?= $treatment_image_width ?>" 
              height="<?= $treatment_image_height ?>" 
              alt="<?= $treatments_name_1 ?>"
              srcset="<?= esc_attr($srcset) ?>"
              sizes="<?= esc_attr($sizes) ?>">
          </figure>
          <a class="treatments__item-link fz-30" href="<?= $treatments_cta_link_2['url'] ?>" aria-label="<?= $treatments_name_2 ?>" target="_blank">
            <?= $treatments_name_2 ?>
          </a>
          <p class="treatments__text fz-18">
            <?= $treatments_detail_2 ?>
          </p>
        </div>
        <div class="treatments__item">
          <figure class="treatments__img">
            <img class="" 
              src="<?= $treatment_image_url ?>" 
              width="<?= $treatment_image_width ?>" 
              height="<?= $treatment_image_height ?>" 
              alt="<?= $treatments_name_1 ?>"
              srcset="<?= esc_attr($srcset) ?>"
              sizes="<?= esc_attr($sizes) ?>">
          </figure>
          <a class="treatments__item-link fz-30" href="<?= $treatments_cta_link_3['url'] ?>" aria-label="<?= $treatments_name_3 ?>" target="_blank">
            <?= $treatments_name_3 ?>
          </a>
          <p class="treatments__text fz-18">
            <?= $treatments_detail_3 ?>
          </p>
        </div>
      </div>
      <div class="treatments__cta">
        <?php 
          get_template_part('templates/components/buttons', null, [
            'text'  => $treatments_cta_text,
            'link'  => $treatments_cta_link['url'],
            'style' => 'blue',
          ]);
        ?>
      </div>
    </div>
  </div>
</section>
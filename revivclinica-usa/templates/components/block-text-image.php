<?php

if($args->instance_id == 1) {
  $group_text_image_img = isset($args->group_text_image['group_text_image_img']) ? $args->group_text_image['group_text_image_img'] : '';
  if (is_array($group_text_image_img) && !empty($group_text_image_img['url'])) {
    $image_url = $group_text_image_img['url'];
    $image_width = $group_text_image_img['width'];
    $image_height = $group_text_image_img['height'];
  } else {
    $image_url = '';
    $image_width = '';
    $image_height = '';
  }

  $group_text_image_style = isset($args->group_text_image['group_text_image_style']) ? $args->group_text_image['group_text_image_style'] : '';
  $group_text_image_shadow = isset($args->group_text_image['group_text_image_shadow']) ? $args->group_text_image['group_text_image_shadow'] : '';
  $group_text_image_title = isset($args->group_text_image['group_text_image_title']) ? $args->group_text_image['group_text_image_title'] : '';
  $group_text_image_copy = isset($args->group_text_image['group_text_image_copy']) ? $args->group_text_image['group_text_image_copy'] : '';
} else {
  $group_text_image_img = isset($args->group_text_image_2['group_text_image_img']) ? $args->group_text_image_2['group_text_image_img'] : '';
  if (is_array($group_text_image_img) && !empty($group_text_image_img['url'])) {
    $image_url = $group_text_image_img['url'];
    $image_width = $group_text_image_img['width'];
    $image_height = $group_text_image_img['height'];
  } else {
    $image_url = '';
    $image_width = '';
    $image_height = '';
  }

  $group_text_image_style = isset($args->group_text_image_2['group_text_image_style']) ? $args->group_text_image_2['group_text_image_style'] : '';
  $group_text_image_shadow = isset($args->group_text_image_2['group_text_image_shadow']) ? $args->group_text_image_2['group_text_image_shadow'] : '';
  $group_text_image_title = isset($args->group_text_image_2['group_text_image_title']) ? $args->group_text_image_2['group_text_image_title'] : '';
  $group_text_image_copy = isset($args->group_text_image_2['group_text_image_copy']) ? $args->group_text_image_2['group_text_image_copy'] : '';
  $group_text_image_video = isset($args->group_text_image_2['group_text_image_video']) ? $args->group_text_image_2['group_text_image_video'] : '';
}

?>

<section class="text-image <?= $group_text_image_style ?> <?= $group_text_image_shadow ?> ">
  <div class="text-image__wrapper">
    <div class="text-image__container">
      <div class="text-image__box box-shadow">
        <div class="text-image__grid">
          <div class="text-image__item">
            <?php if (isset($group_text_image_title)) : ?>
              <h2 class="text-image__title fz-40 pb-30"><?php echo esc_html($group_text_image_title); ?></h2>
            <?php endif; ?>
            <div class="text-image__copy">
              <?= $group_text_image_copy; ?>
            </div>
          </div>
          <div class="text-image__item">
          <?php if ($args->instance_id == 1) { ?>
            <figure>
              <img class="" src="<?= $image_url ?>" width="<?= $image_width ?>" height="<?= $image_height ?>" alt="<?= $group_text_image_title; ?>">
            </figure>
          <?php } else { ?>
            <?php if (isset($group_text_image_img) && $group_text_image_img != "") { ?> 
                <figure>
                  <img class="" src="<?= $image_url ?>" width="<?= $image_width ?>" height="<?= $image_height ?>" alt="<?= $group_text_image_title; ?>">
                </figure>
            <?php } else { ?> 
                <div class="text-image__video">
                  <?= $group_text_image_video ?>
                </div>
            <?php } ?>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


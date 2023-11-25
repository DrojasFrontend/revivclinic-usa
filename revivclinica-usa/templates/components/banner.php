<?php

$group_banner_bckg = isset($args->group_banner['group_banner_bckg']) ? $args->group_banner['group_banner_bckg'] : '';
$group_banner_color = isset($args->group_banner['group_banner_color']) ? $args->group_banner['group_banner_color'] : '';
$group_banner_title = isset($args->group_banner['group_banner_title']) ? $args->group_banner['group_banner_title'] : '';
$group_banner_cta_text = isset($args->group_banner['group_banner_cta_text']) ? $args->group_banner['group_banner_cta_text'] : '';
$group_banner_cta_link = isset($args->group_banner['group_banner_cta_link']) ? $args->group_banner['group_banner_cta_link'] : '';

?>

<section class="banner">
  <div class="banner__wrapper" style="background-color: <?= $group_banner_color ?>;background-image: url(<?= $group_banner_bckg ?>);">
    <div class="banner__container">
      <h2 class="fz-40 pb-30"><?= $group_banner_title ?></h2>
      <?php 
        get_template_part('templates/components/buttons', null, [
          'text'  => $group_banner_cta_text,
          'link'  => $group_banner_cta_link['url'],
          'style' => 'white',
        ]);
      ?>
    </div>
  </div>
</section>
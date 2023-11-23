<?php

$button_text  = $args['text'];
$button_link  = $args['link'];
$button_style = $args['style'];

?>

<?php
$button_classes = 'btn';

if ($button_style === 'white') {
  $button_classes .= ' btn--white';
  $button_icon = '<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="17" cy="17" r="17" fill="#051461"/> <path d="M25.5396 17.6935C25.9226 17.3105 25.9226 16.6895 25.5396 16.3065L19.298 10.0649C18.915 9.6819 18.294 9.6819 17.911 10.0649C17.528 10.4479 17.528 11.0689 17.911 11.4519L23.4591 17L17.911 22.5481C17.528 22.9311 17.528 23.5521 17.911 23.9351C18.294 24.3181 18.915 24.3181 19.298 23.9351L25.5396 17.6935ZM9.15381 17.9808H24.8461V16.0192H9.15381V17.9808Z" fill="white"/> </svg>';
} elseif ($button_style === 'blue') {
  $button_classes .= ' btn--primary';
  $button_icon = '<svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="17" cy="17" r="16.5" stroke="white"/> <path d="M25.5396 17.6935C25.9226 17.3105 25.9226 16.6895 25.5396 16.3065L19.298 10.0649C18.915 9.6819 18.294 9.6819 17.911 10.0649C17.528 10.4479 17.528 11.0689 17.911 11.4519L23.4591 17L17.911 22.5481C17.528 22.9311 17.528 23.5521 17.911 23.9351C18.294 24.3181 18.915 24.3181 19.298 23.9351L25.5396 17.6935ZM9.15381 17.9808H24.8461V16.0192H9.15381V17.9808Z" fill="white"/> </svg>';
} elseif ($button_style === 'transparent') {
  $button_classes .= ' btn--transparent';
  $button_icon = '<i class="transparent-icon">... insertar código del ícono transparente aquí ...</i>';
}

?>

<a href="<?= $button_link ?>" class="<?= $button_classes ?>">
  <?= $button_text ?>
  <i class="icon">
    <?= $button_icon ?>
  </i>
</a>

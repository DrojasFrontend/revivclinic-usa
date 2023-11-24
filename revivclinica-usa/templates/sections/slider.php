<?php
get_header();

$args = array(
  'post_type' => 'paciente_feliz',
  'posts_per_page' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => 'principal',
    ),
  ),
);

$custom_query = new WP_Query( $args ); ?>

<section class="slick-primary">
  <div class="slick-primary__wrapper">
    <div class="slick-primary__heading">
      <h2 class="fz-48">We are happy patients!</h2>
    </div>
    <div class="slick-primary__container">
      <div id="slick-primary-js">
      <?php if ( $custom_query->have_posts() ) :
        while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
          <div>
            <div class="slick-primary__item">
              <?php if (has_post_thumbnail()) : ?>
                <div class="slick-primary__thumbnail">
                  <div class="slick-primary__box">
                    <figure>
                      <?= get_the_post_thumbnail(get_the_ID(), 'large', array('alt' => get_the_title())) ?>
                    </figure>
                    <h3 class="slick-primary__title fz-20">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                </div>
              <?php endif; ?>
              <div class="slick-primary__content fz-20">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        <?php endwhile;
          wp_reset_postdata();
        else :
          echo 'No hay entradas';
      endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();

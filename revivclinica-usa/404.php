<?php
get_header(); // Include header.php
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'mytheme'); ?></h1>
        </header><!-- .page-header -->
        <div class="page-content">
            <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'mytheme'); ?></p>
            <?php get_search_form(); ?>
        </div><!-- .page-content -->
      </section><!-- .error-404 -->
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer(); // Include footer.php

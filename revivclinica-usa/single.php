<?php
get_header(); // Include header.php
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while (have_posts()) :
            the_post();
            // Include the template for displaying the content
            get_template_part('template-parts/content', get_post_type());
        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); // Include footer.php

<?php
get_header(); // Include header.php
?>

<!-- <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', get_post_type());
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </main>
</div> -->

<a href="" class="btn btn--primary">
    I want to know more 
    <span class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12.3684" cy="11.8602" r="11.4556" fill="#051461"></circle><path d="M18.1229 12.3275C18.381 12.0694 18.381 11.6509 18.1229 11.3928L13.917 7.1869C13.6589 6.9288 13.2404 6.9288 12.9823 7.1869C12.7242 7.44499 12.7242 7.86345 12.9823 8.12155L16.7209 11.8602L12.9823 15.5988C12.7242 15.8569 12.7242 16.2753 12.9823 16.5334C13.2404 16.7915 13.6589 16.7915 13.917 16.5334L18.1229 12.3275ZM7.08118 12.5211H17.6556V11.1993H7.08118V12.5211Z" fill="white"></path></svg>
    </span>
</a>
<a href="" class="btn btn--white">
    I want to know more 
    <span class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><circle cx="12.3684" cy="11.8602" r="11.4556" fill="#051461"></circle><path d="M18.1229 12.3275C18.381 12.0694 18.381 11.6509 18.1229 11.3928L13.917 7.1869C13.6589 6.9288 13.2404 6.9288 12.9823 7.1869C12.7242 7.44499 12.7242 7.86345 12.9823 8.12155L16.7209 11.8602L12.9823 15.5988C12.7242 15.8569 12.7242 16.2753 12.9823 16.5334C13.2404 16.7915 13.6589 16.7915 13.917 16.5334L18.1229 12.3275ZM7.08118 12.5211H17.6556V11.1993H7.08118V12.5211Z" fill="white"></path></svg>
    </span>
</a>

<?php
get_footer(); // Include footer.php

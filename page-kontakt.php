<?php get_header();?>

<div id="page-kontakt">
<?php
if(have_posts()):
    while (have_posts()):
    the_post();
?>
    <h2><?php the_title();?></h2>
    <div id="page-content"><?php the_content();?></div>
    
<?php
endwhile;
endif;
?>
    <div id="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="18" title="Kontaktní formulář 1"]');?>
    </div>
</div>
<?php get_footer();?>
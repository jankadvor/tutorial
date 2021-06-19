<?php get_header();?>

<div id="page-home">
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
</div>
<?php get_footer();?>
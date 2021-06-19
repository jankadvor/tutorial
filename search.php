<?php get_header(); ?>
 
	<div id="primary" class="content-area col-8">
 
 		<main id="main" class="site-main" role="main">
			<?php if (have_posts()) : ?>

			<h1 class="archive-title"><?php printf( __( 'Search Results for: "%s"', 'theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

			<?php while (have_posts()) : the_post(); ?>
				
                        <?php get_template_part( 'content', get_post_format() ); ?>
                        
  			<?php 
     		endwhile; 
     		?>
     			<!--BEGIN .navigation -->
				<div class="navigation">
					<?php posts_nav_link( '', __('Previous page','theme'), __('Next page','theme') ); ?>
				</div> 
			<?php
     		else: 
  			?>
				<div id="post-0" class="post error404 not-found">
					<header>
						<h1 class="entry-title"><?php _e( 'Not Found', 'theme' ); ?></h1>
					</header>
					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'theme' ); ?></p>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
 
			<?php endif; ?>
		</main>
 
	</div>
	<div class="col-4">
 
		<?php get_sidebar(); ?>
 
	</div>
 
<?php get_footer();
<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="content" role="main">			

	        <div class="container_12">

	            <div class="grid_9">
	                <span class="canto"></span>

	            	<?php while ( have_posts() ) : the_post(); ?>					

					<?php get_template_part( 'content', 'single' ); ?>

					<nav id="nav-single">
						<!--<h2 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h2>-->
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->		

					<?php comments_template( '', true ); ?>

					<?php endwhile; // end of the loop. ?>

				</div>
	            
	            <div class="grid_3">
	                <?php get_sidebar(); ?>
	            </div>

	        </div>
	    </div>

<?php get_footer(); ?>
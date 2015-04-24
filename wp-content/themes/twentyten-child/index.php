<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

include 'headerboxes.php' ?>

		<div id="container">
        
			<div class="content0" id="content">
			
			
			<?php
				if(is_front_page()) {query_posts( $query_string . '&cat=29' );
}

			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.html and that will be used instead.
			 */
			 get_template_part( 'loop', 'home' );
			query_posts( home );
			?>
			
            </div><!-- #content -->
	
        </div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

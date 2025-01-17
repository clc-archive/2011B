<?php

/**

 * The template for displaying Search Results pages.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */



get_header(); ?>



		<div id="container">

			<div id="content" class="content0">


<?php if ( have_posts() ) : ?>

				<h1 class="page-entry-title"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

				<?php

				/* Run the loop for the search to output the results.

				 * If you want to overload this in a child theme then include a file

				 * called loop-search.php and that will be used instead.

				 */

				 get_template_part( 'loop', 'tag' );

				?>
                


<?php else : ?>

				<div id="post-0" class="post no-results not-found">

					<h2 class="entry-title breathe"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>

					<div class="entry-content">

						<p class="breathe"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>

						<!--<?php get_search_form(); ?>-->

						<?php include("searchform2.php") ?>
					</div>
					</div>
			
<?php endif; ?>

			</div><!-- #content -->

		</div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>


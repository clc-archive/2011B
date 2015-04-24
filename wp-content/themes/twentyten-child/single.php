<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<!--single-->


		<div id="container">
			<div class="content0" id="content">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
				<?php twentyten_posted_on(); ?> | 
			
				<!--start category-->
				<?php if ( count( get_the_category() ) ) : ?>
						<?php printf( __( 'Tags: %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ',')); ?>
				<?php endif; ?><?php
					$tags_list = get_the_tag_list( '', ',' );
					if ( $tags_list ):
				?><span class="tag-links">
						<?php printf( __('<span class="%1$s">| </span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					</span>
				<?php endif; ?>
                <!--end category-->
               </div><!-- .entry-meta --> 

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->


				<hr />	
				</div><!-- #post-## -->
								
				<?php comments_template( '', true ); ?>
				
                <div id="nav-below" class="navigation">
                	<hr />
					<?php previous_post_link( '%link', '<span class="nav-button">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '%title </span>' ); ?>
					<span class="nav-right-container"><?php next_post_link( '%link', '<span class="nav-button"> %title' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></span></div>
				<!-- #nav-below -->

                
<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

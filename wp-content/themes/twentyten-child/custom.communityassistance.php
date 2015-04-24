<?php
/*
Template Name: communityassitance
*/
?>

<!--personalized page to display events. show 10 events, only future events, in ascending date order, and paging is on-->
<?php get_header(); ?>
		<div id="container">
			<div id="content" class="content0">
community assistance

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
<!--Adding in list of community assistance events-->
Upcoming Community Assistance Events				
<?php eme_get_events_list("limit=10&scope=future&order=ASC&category=2"); ?>




				<?php comments_template( '', true ); ?>
<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php
/*
Template Name: events
*/
get_header(); 

?>

		<div id="container">
			<div id="content" class="content0" style="min-height:850px;">
<!--custom.events-->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
					
					<div class="entry-content" id="static">
						<?php eme_get_events_list("long_events=0&limit=8&scope=future&order=ASC&paging=1"); 
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
                

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/* 
Template Name: CAC
*/

get_header(); ?>
		<div id="container">
			<div id="content" class="content0">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->                         
<h2 class="breathe">RESOURCES FROM PAST CAC EVENTS</h2>  
<ul>
<?php eme_get_events_list("limit=20&scope=past&order=DESC&paging=1&category=17&format=
	<li>
	<strong>#F #j, #Y</strong>
	#_EXCERPT
	[events_if tag='#ESC_ATT{More}']
        	<span class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\">Additional information</a></span>
    [/events_if]
	</li>
"); ?>			
</ul>
			
			
			<?php comments_template( '', true ); ?>
<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

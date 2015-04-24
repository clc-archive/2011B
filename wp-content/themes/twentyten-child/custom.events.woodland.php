<?php
/* 
Template Name: Woodland Events
*/

get_header(); ?>
		<div id="container">
			<div id="content" class="content0">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="page-entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->                         

<h2 class="breathe">PAST EVENTS</h2> 
<ul>
<?php eme_get_events_list("limit=15&scope=past&order=DESC&paging=0&category=15&format=
	<li>
	<h3>#_LINKEDNAME</h3>
	#F #j, #Y
	#_EXCERPT
	[events_if tag='#ESC_ATT{More}']
		<span class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\">Additional information on #_NAME</a></span>
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

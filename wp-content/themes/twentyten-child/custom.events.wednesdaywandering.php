<?php
/* 
Template Name: Wednesday Wandering
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
						<?php eme_get_events_list("limit=11&scope=future&order=ASC&paging=0&category=4&long_events=0&format=
<div class=\"event breathe \">
	[events_if tag='#_ATT{image1}']
			<a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\" /></a>
	[/events_if]
	[events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
        	<h2 class=\"entry-title\"><a href=\"#_LOCATIONPAGEURL\" title=\"#_LOCATION\">#_LOCATION</a> -  #_ADDRESS, #_TOWN</h2>
    [/events_if]
	<h3>
		#F #j
	</h3>
	<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><br />Additional information on the #F Wednesday Wandering</a></p>
	<a href=\"https://connect.clctrust.org/wednesday-wanderings\" title=\"Register for a Wednesday Wandering\"><span
class=\"nav-button\">Register</span></a>
</div>
<hr />

	"); ?>

<?php endwhile; ?>
   
                    </div><!-- .entry-content -->
				</div><!-- #post-## -->               

 <?php comments_template( '', true ); ?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

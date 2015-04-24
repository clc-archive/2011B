<?php
/* 
Template Name: Past Events
*/

get_header(); ?>
		<div id="container">
			<div id="content" class="content0">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1 class="page-entry-title"><a href="/events/past/">Past Events</a></h1>
					<div class="entry-content">
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->                      
<?php eme_get_events_list("limit=10&scope=past&order=DESC&paging=1&long_events=0&format=
<div class=\"event\">
[events_if tag='#_ATT{image1}']
<div class=\"rightimages\">
<img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\" />
</div>
[/events_if]
<div class=\"textright232\">
<h1 class=\"entry-title\">#_LINKEDNAME</h1>
<h2>#l, #F #j, #Y
[events_if tag='#_ATT{timetba}' notvalue=\"1\"] #g:#i#a [/events_if]
[events_if tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] - #@g:#@i#@a  [/events_if]</h2>
<h2>#_ATT{Cost}</h2>
[events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
<h2><a href=\"#_LOCATIONPAGEURL\"  title=\"#_LOCATION\">#_LOCATION</a> - #_ADDRESS, #_TOWN</h2>
[/events_if]
#_EXCERPT
<h3 class=\"highlight\">#_ATT{Footer}</h3>
[events_if tag='#ESC_ATT{More}']
        	<p class=\"more-link\">
				<a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\">
					<br />
					Continue reading about #_NAME
					</a>
			</p>
[/events_if]
</div>
</div>
<hr />
"); ?>	
			
			
			<?php comments_template( '', true ); ?>
<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

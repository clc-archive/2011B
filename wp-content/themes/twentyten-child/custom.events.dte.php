<?php
/* 
Template Name: dte
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
						<?php eme_get_events_list("limit=11&scope=future&order=ASC&paging=1&category=11&long_events=0&format=
<div class=\"event\">
	[events_if tag='#_ATT{image1}']
		<div class=\"rightimages\">
			<img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\" />
		</div>
	[/events_if]
	<h1 class=\"entry-title\">#_LINKEDNAME</h1>
	<h2>
		#l, #F #j #_ATT{EndDate - Sunday, Jun 12} - #g:#i#a
		[events_if tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] 
				- #@g:#@i#@a  
		[/events_if] 
	</h2>
	[events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
        	<h2>
            	<a href=\"#_LOCATIONPAGEURL\" title=\"#_LOCATION\">#_LOCATION</a> - #_ADDRESS, #_TOWN
            </h2>
    [/events_if]
	#_EXCERPT
	[events_if tag='#_EVENTCATEGORIES' contains='Down To Earth']
                <a href=\"https://connect.clctrust.org/down-to-earth-registration\" title=\"Register for a Down to Earth Event\"><span
    class=\"nav-button\">Register</span></a>
    [/events_if]
	[events_if tag=\"#ESC_ATT{More}\" value=\"1\"]<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><br />Continue reading about #_NAME<span class=\"meta-nav\">-></span></a></p>[/events_if]
</div>
<hr />
	"); ?>
   
   <h1>Past Down To Earth Events<br /><br /></h1>
   <?php eme_get_events_list("limit=11&scope=past&order=ASC&paging=1&category=11&long_events=0&format=
<div class=\"event\">
	[events_if tag='#_ATT{image1}']
		<div class=\"rightimages\">
			<img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\" />
		</div>
	[/events_if]
	<h2 class=\"entry-title\">#_LINKEDNAME</h2>
	<h3>
		#l, #F #j, #Y  #_ATT{EndDate - Sunday, Jun 12} - #g:#i#a
		[events_if tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] 
		[/events_if] 
	</h3>
	#_EXCERPT
	[events_if tag=\"#ESC_ATT{More}\" value=\"1\"]<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><br />Continue reading about #_NAME</a></p>[/events_if]
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

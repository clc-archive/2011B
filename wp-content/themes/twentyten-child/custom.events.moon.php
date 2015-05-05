<?php
/* 
Template Name: Moon
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
						<?php eme_get_events_list("limit=11&scope=future&order=ASC&paging=0&category=13&long_events=0&format=
<div class=\"event\">
    <div class=\"textright232\">
        <h1 class=\"entry-title\">#_LINKEDNAME</h1>
        <h2>
        	#l, #F #j<sup>#S</sup> 
            	[events_if tag=\"#ESC_{j M Y}\" notvalue=\"#ESC@_{j M Y}\"]
        			 - #@l, #@F #@j<sup>#@S</sup>
        		[/events_if]
                [events_if tag=\"#ESC_{Y}\" notvalue=\"2013\"]
                	, #Y 
                [/events_if] 
        		[events_if tag='#_ATT{timetba}' notvalue=\"1\"]
                	#g:#i#a 
                [/events_if] 
        		[events_if tag=\"#_ATT{End Time Display}\" value=\"1\"] 
                	- #@g:#@i#@a
                [/events_if]
                [events_if tag=\"#_ATT{additionaltime 3:30pm - 4:30pm}\"]
        	 		<span style=\"text-transform:lowercase\">or</span> #_ATT{additionaltime 3:30pm - 4:30pm}
        		[/events_if]
        </h2>
        [events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
        	<h2>
            	<a href=\"#_LOCATIONPAGEURL\"  title=\"#_LOCATION\">#_LOCATION</a> - #_ADDRESS, #_TOWN
            </h2>
        [/events_if]
        [events_if tag='#_ATT{Contact}' value=\"Full\"]
        	<h3 style=\"color:black\"><br />This event is full. Stay up to date on our upcoming events by signing up for our <a href=\"http://clc-archive2011.chameid.es/email-sign-up/\">email newsletter</a>.<br /></h3>
        [/events_if]
        #_EXCERPT
        [events_if tag='#_ATT{Contact}' value='Marcia']
        	<p>For more information, contact Marcia Cary at 518.392.5252, ext. 202 or <a title=\"email Marcia\" href=\"mailto:marcia@clctrust.org\">marcia@clctrust.org</a>.</p>
        [/events_if]
        [events_if tag='#_ATT{Contact}' value='Jenny']
        	<p>For more information, contact Tom Crowell at 518.392.5252, ext. 209 or <a title=\"email Tom\" href=\"mailto:tom@clctrust.org\">tom@clctrust.org</a>.</p>
        [/events_if]
        [events_if tag='#_ATT{Contact}' value='Marissa']
        	<p>For more information, contact Marissa Codey at  518.392.5252, ext. 211 or <a title=\"email Marissa\" href=\"mailto:marissa@clctrust.org\">marissa@clctrust.org</a>.</p>
        [/events_if]
        [events_if tag='#_ATT{Contact}' value='Ellen']
        	<p>For more information, contact Ellen Jouret-Epstein at  518.392.5252, ext. 208 or <a title=\"email Ellen\" href=\"mailto:ellen@clctrust.org\">ellen@clctrust.org</a>.</p>
        [/events_if]
        [events_if tag='#_ATT{Contact}' value='Heidi']
        	<p>For more information, contact Heidi Bock at 518.392.5252, ext. 207 or <a title=\"email Heidi\" href=\"mailto:heidi@clctrust.org\">heidi@clctrust.org</a>.</p>
        [/events_if]
        [events_if tag='#_ATT{Contact}' value='Jessica']
        	<p>For more information, contact Jessica Holmes at 518.392.5252, ext. 216 or <a title=\"email Jessica\" href=\"mailto:jessica@clctrust.org\">jessica@clctrust.org</a>.</p>
        [/events_if]
        [events_if tag='#_EVENTCATEGORIES' value='Wednesday Wandering']
        	<p><a href=\"/events/wednesday-wanderings/\" title=\"Full Schedule\">Wednesday Wandering Full Schedule</a></p>
        [/events_if]
        <h3 class=\"highlight\">#_ATT{Footer}</h3>
        [events_if tag='#_ATT{No-Register}' notvalue=\"1\"]
			<a href=\"https://connect.clctrust.org/full-moon-walks\" title=\"Register for a Full Moon Walk\"><span
class=\"nav-button\">Register</span></a>
		[/events_if]
		[events_if tag='#ESC_ATT{More}']
        	<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><br />Additional information on #_NAME</a></p>
        [/events_if]
    </div>
</div>
<hr />

	"); ?>

<h2 class="breathe">PAST EVENTS</h2> 
<ul>
<?php eme_get_events_list("limit=15&scope=past&order=DESC&paging=0&category=13&format=
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

<?php endwhile; ?>
   
                    </div><!-- .entry-content -->
				</div><!-- #post-## -->               

 <?php comments_template( '', true ); ?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

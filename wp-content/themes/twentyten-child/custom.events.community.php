<?php
/* 
Template Name: Community Events
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
<?php eme_get_events_list("limit=10&scope=future&order=ASC&paging=0&category=2&long_events=0&format=
<div class=\"event\">
[events_if tag='#_ATT{image1}']
<div class=\"rightimages\">
<img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\" />
</div>
[/events_if]
<div class=\"textright232\">
<h1 class=\"entry-title\">#_LINKEDNAME</h1>

[events_if tag='#_ATT{Hide Date}' notvalue='1']
	<h2>#l, #F #j<sup>#S</sup>
	[events_if2 tag='#_ATT{timetba}' notvalue=\"1\"] #g:#i#a [/events_if2]
	[events_if2 tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] - #@g:#@i#@a  [/events_if2]</h2>
[/events_if]	
<h2>#_ATT{Cost}</h2>
[events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
<h2><a href=\"#_LOCATIONPAGEURL\"  title=\"#_LOCATION\">#_LOCATION</a> - #_ADDRESS, #_TOWN</h2>
[/events_if]
[events_if tag='#_ATT{Contact}' value=\"Full\"]
<h3 style=\"color:black\"><br />This event is full. Stay up to date on our upcoming events by signing up for our <a href=\"http://clc-archive2011.chameid.es/email-sign-up/\">email newsletter</a>.<br /></h3>
[/events_if]
#_EXCERPT
<h3 class=\"highlight\">#_ATT{Footer}</h3>
[events_if tag='#_ATT{No-Register}' notvalue=\"1\"]
	<a href=\"https://connect.clctrust.org/community-assistance\" title=\"Community Assistance Event\"><span class=\"nav-button\">Register</span></a>
[/events_if]
[events_if tag='#ESC_ATT{More}']
	<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\">Additional information on #_NAME</a></p>
[/events_if]
</div>
</div>
<hr />
"); ?>	
<h2 class="breathe">RESOURCES FROM PAST COMMUNITY ASSISTANCE EVENTS</h2>  

<ul>
<?php eme_get_events_list("limit=20&scope=past&order=DESC&paging=1&category=2&format=
	<li>
	<h3>#_LINKEDNAME</h3>
	[events_if tag='#_ATT{Hide Date}' notvalue='1']
	#F #j, #Y
	[/events_if]
	#_EXCERPT
	[events_if tag='#ESC_ATT{More}']<span class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\">Additional information on #_NAME</a></span>[/events_if]
	</li>
"); ?>			
</ul>
			
			
			<?php comments_template( '', true ); ?>
<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

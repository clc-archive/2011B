<?php
/* 
Template Name: Knee-High
*/
 get_header(); ?>

		<div id="container">
			<div id="content" class="content0">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<h1 class="page-entry-title">Knee-High Naturalists</h1>
					<div class="entry-content">
<div class="rightimages">
	<a href='http://clc-archive2011.chameid.es/wp-content/gallery/wet-and-wiggly/0052859089.jpg' ><img src='http://clc-archive2011.chameid.es/wp-content/gallery/wet-and-wiggly/thumbs/thumbs_0052859089.jpg' alt='Storytime' width="232" /></a>
</div>
<p>Explore, interact, and discover nature in a beautiful outdoor setting. Participants  will observe and expand their knowledge of nature, learn about what lives in  their own backyard, explore the outdoors, communicate what they have  discovered, create art, collect insects, catch frogs, and splash in Jon’s  Pond!  Each session includes story time,  take home arts &amp; crafts project, nature journaling, and free play.</p>
<p>For ages 3 - 6 with adult<br />
Free</p>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->                        
<?php eme_get_events_list("limit=10&scope=future&order=ASC&paging=1&category=7&long_events=0&format=
<div class=\"event\">
[events_if tag='#_ATT{image1}']
<div class=\"rightimages\">
<img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\" />
</div>
[/events_if]
<div class=\"textright232\">
<h1 class=\"entry-title\">#_LINKEDNAME</h1>
<h2>#l, #F #j<sup>#S</sup>
[events_if tag='#_ATT{timetba}' notvalue=\"1\"] #g:#i#a [/events_if]
[events_if tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] - #@g:#@i#@a  [/events_if]</h2>
[events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
<h2><a href=\"#_LOCATIONPAGEURL\"  title=\"#_LOCATION\">#_LOCATION</a> - #_ADDRESS, #_TOWN</h2>
[/events_if]
[events_if tag='#_ATT{Contact}' value=\"Full\"]
<h3 style=\"color:black\"><br />This event is full. Stay up to date on our upcoming events by signing up for our <a href=\"http://clc-archive2011.chameid.es/email-sign-up/\">email newsletter</a>.<br /></h3>
[/events_if]
#_EXCERPT
<h3 class=\"highlight\">#_ATT{Footer}</h3>
[events_if tag='#_ATT{No-Register}' notvalue=\"1\"]
	<a href=\"https://connect.clctrust.org/education-programs\" title=\"Education Event\"><span class=\"nav-button\">Register</span></a>
[/events_if]
[events_if tag='#ESC_ATT{More}']
	<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><br />Additional information on #_NAME</a></p>
[/events_if]
</div>
</div>
<hr />
"); ?>
<h1>Past Knee High Naturalists:</h1>
<?php eme_get_events_list("limit=10&scope=past&order=DESC&paging=1&category=7&format=
	<li>
	<h3>#_LINKEDNAME</h3>
	#F #j, #Y
	#_EXCERPT
	</li>
"); ?>
				
				

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

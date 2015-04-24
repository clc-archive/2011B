<?php
/* 
Template Name: Barbecue
*/
 get_header(); ?>

		<div id="container">
			<div id="content" class="content0">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
						<h1 class="page-entry-title">Country Barbecue</h1>
					<div class="entry-content">
<div class="rightimages">
	
</div>
<p>CLC's annual fundraiser and celebration of rural culture. </p>
<ul>
	<li>Fresh local food</li>
    <li>Demonstrations and activities highlighting local wildlife, agriculture, and rural traditions</li>
    <li>Hands-on children's activities</li>
    <li>Entertainment</li>
    <li>Set in beautiful Columbia County</li>    
</ul>
				  </div><!-- .entry-content -->
				</div><!-- #post-## -->                        
<?php eme_get_events_list("limit=10&order=DESC&paging=1&category=10&scope=all&long_events=0&format=
<div class=\"event breathe\">
	[events_if tag='#_ATT{image1}']<img src=\"#_ATT{image1}\" width=\"232\" alt=\"#_ATT{alt}\"/>[/events_if]
	<h1 class=\"entry-title\">#_LINKEDNAME</h1>
</div>
"); ?>
<?php endwhile; ?>
Photos from 2010 Country Barbecue: by <a href="http://www.facebook.com/media/set/?set=a.401208315734.178502.88917680734">Peter Blandori</a> and <a href="http://www.facebook.com/media/set/?set=a.401856695734.178997.88917680734">Doug Stalker</a></div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

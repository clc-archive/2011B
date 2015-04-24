<?php
/* 
Template Name: Working Farms Event
*/
get_header(); ?>
		<div id="container">
			<div id="content" class="content0">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <div class="entry-content">
                        <h1 class="page-entry-title"><?php the_title(); ?></h1>	
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>					
							<?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-content -->
					</div><!-- #post-## -->
<?php
 eme_get_events_list("limit=10&scope=future&order=ASC&paging=1&category=8&long_events=0&format=
	<div class=\"event\">
		<div class=\"rightimages\">
			<img src=\"#_ATT{image1}{/images/blank.gif}\" width=\"232\" alt=\"#_ATT{alt}\" />
		</div>
		<div class=\"textright232\">
			<h1 class=\"entry-title\">#_LINKEDNAME</h2>
			[events_if tag='#_CATEGORIES' contains='Down To Earth']<h2><a href=\"/working-farms/down-to-earth/\" title=\"More on the Down To Earth series\">Down To Earth Workshop Series</a></h1>[/events_if]
			<h3>#_ATT{Ages}</h3>
			<h3>#l, #F #j<sup>#S</sup>
			[events_if tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] #g:#i#a [/events_if]
			[events_if tag=\"#ESC_{g i a}\" notvalue=\"#ESC@_{g i a}\"] - #@g:#@i#@a  [/events_if]</h3>
			<h3>#_ATT{Cost}</h3>
			[events_if tag='#ESC_LOCATION' notvalue=\"Location\"]
<h2><a href=\"#_LOCATIONPAGEURL\"  title=\"#_LOCATION\">#_LOCATION</a> - #_ADDRESS, #_TOWN</h2>
[/events_if]
			[events_if tag='#_ATT{Contact}' value=\"Full\"]
<h3 style=\"color:black\"><br />This event is full. Stay up to date on our upcoming events by signing up for our <a href=\"http://clc-archive.chameid.es/email-sign-up/\">email newsletter</a>.<br /></h3>
[/events_if]
			#_EXCERPT
			[events_if tag='#_EVENTCATEGORIES' contains='Down To Earth']
                <a href=\"https://connect.clctrust.org/down-to-earth-registration\" title=\"Register for a Down to Earth Event\"><span
    class=\"nav-button\">Register</span></a>
            [/events_if]
[events_if tag='#_ATT{Contact}' value='Marissa']<p>For more information, contact Marissa Codey at 518.392.5252, ext. 211 or <a title=\"email Marissa\" href=\"mailto:marissa@clctrust.org\">marissa@clctrust.org</a>.</p>[/events_if]
<h3 class=\"highlight\">#_ATT{Footer}</h3>
[events_if tag='#ESC_ATT{More}']
<p class=\"more-link\"><a href=\"#_EVENTPAGEURL\" title=\"Full Event Description\"><br />Continue reading about #_NAME</a></p>
[/events_if]
			<h3 class=\"highlight\">#_ATT{Footer}</h3>
		</div>
	</div>
	<hr />"); 
 ?>

 
<h1 class="breathe">Additional Events</h1>
<h2 class="entry-title">Northeast Beginning Farmers Project</h2>
<p><a href="http://nebeginningfarmers.org/online-courses/">Online Courses</a></p>
<hr />

<?php
  $key="NonCLCEventDate(YYYYMMDD)"; 
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $post_per_page = 4; // -1 shows all posts
  $do_not_show_stickies = 1; // 0 to show stickies
  $args=array(
    'meta_key' => 'NonCLCEventDate(YYYYMMDD)',
	'category__and' => array(11,16),
    'orderby' => 'meta_value',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page,
    'caller_get_posts' => $do_not_show_stickies
  );
  $temp = $wp_query;  // assign orginal query to temp variable for later use   
  $wp_query = null;
  $wp_query = new WP_Query($args); 
  if( have_posts() ) : 
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	    <div>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <!--start category-->
                        <?php if ( count( get_the_category() ) ) : ?>
                            <?php printf( __( 'Posted in %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                        <?php endif; ?>
                        <?php
                            $tags_list = get_the_tag_list( '', ', ' );
                            if ( $tags_list ):
                        ?>
                        <span class="tag-links">
                            <?php printf( __( '<span class="meta-sep">|</span><span class="%1$s">Tagged</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
                        </span>
                        <?php endif; ?>
                        <!--end category-->
                    </div><!-- .entry-meta --> 
                    <div class="entry-content">
                       <?php 
				global $more;    // Declare global $more (before the loop).
$more = 0;       // Set (inside the loop) to display content above the more tag.
				 ?>
					   <?php 
					   the_content( __( '<span class="continue-reading">CONTINUE READING</span>', 'twentyten' ) ); ?>
                    </div><!-- .entry-content -->
						<?php include('comments_buttons.php')?>
                </div><!-- #post-## -->
                 <hr class="event" />
                <?php comments_template( '', true ); ?>
            </div>    
 	   		<?php endwhile; ?>
    		<div id="pagenumbers">
            <a href="http://clc-archive.chameid.es/category/nonclcevent/"><span class="nav-button"> Full Non-CLC Event List</span></a>
            </div>
  			<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
			<?php endif; 
			$wp_query = $temp;  //reset back to original query
			// if ($category)
			?>
			<?php comments_template( '', true ); ?>
			<?php endwhile; ?>
			</div><!-- #content -->
		</div><!-- #container -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>

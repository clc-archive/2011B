<?php
/* 
Template Name: Trails Events
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
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $post_per_page = 3; // -1 shows all posts
  $do_not_show_stickies = 1; // 0 to show stickies
  $args=array(
    'category__and' => 136,
    'orderby' => 'date',
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
	    <ul>
            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Full Article', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>    
	 			<?php twentyten_posted_on(); ?>
				<?php the_excerpt(); ?>
                <!-- #post-## -->
                 </li>
            </ul>    
 	   		<?php endwhile; ?>
    		<div id="pagenumbers">
            <a href="http://clc-archive.chameid.es/tag/trails/"><span class="nav-button">More Trails News</span></a>
            </div>
  			<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
			<?php endif; 
			$wp_query = $temp;  //reset back to original query
			// if ($category)
			?>
<?php endwhile; ?>


<h2 class="breathe">RESOURCES FROM PAST TRAILS EVENTS</h2>  
<ul>
<?php eme_get_events_list("scope=past&order=DESC&paging=0&category=12&format=
	<li>
	<h3>#_LINKEDNAME</h3>
	#F #j, #Y
	#_EXCERPT
	</li>
"); ?>			
</ul>
			
			
			</div><!-- #content -->
		</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

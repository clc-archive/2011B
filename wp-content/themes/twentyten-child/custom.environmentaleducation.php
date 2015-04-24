<?php



/*



Template Name: environmentaleducation



*/



?>







<!--personalized page to display events. show 10 events, only future events, in ascending date order, and paging is on-->











<?php







get_header(); ?>







		<div id="container">



			<div id="content" class="content0">







<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>







				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



					







					<div class="entry-content">



						<?php the_content(); ?>



						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>



						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>



					</div><!-- .entry-content -->



				</div><!-- #post-## -->



<!--Adding in list of environmental ed events-->

Upcoming Environmental Education Events				

<?php eme_get_events_list("limit=10&scope=future&order=ASC&category=1"); ?>



<?php endwhile; ?>





  <!--customization below. Grabs posts with $Category = custom field in the page-->

            <h2>Recent Environmental News</h2>    

                <?php

if (is_page() ) {

$category = 'Nature';

;

}

if ($category) {

  $cat = get_cat_ID($category);

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $post_per_page = 4; // -1 shows all posts

  $do_not_show_stickies = 1; // 0 to show stickies

  $args=array(

    'category__in' => array($cat),

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

	    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

        <div class="entry">

          <?php the_content('Read the rest of this entry »'); ?>

        </div>

        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>

      </div>

    <?php endwhile; ?>

   

  <?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?>



	<?php endif; 

	

	$wp_query = $temp;  //reset back to original query

	

}  // if ($category)

?>





			</div><!-- #content -->





		</div><!-- #container -->







<?php get_sidebar(); ?>



<?php get_footer(); ?>




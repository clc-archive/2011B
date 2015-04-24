<?php
/*
Template Name: non-clc-events
*/
include 'header.php' ?>

		<div id="container">

			<div class="content0" id="content">
 			<h1 class="page-entry-title">Non CLC Events</h1>

<?php if ( have_posts() ) while ( have_posts() ) : the_post();  
	$key="NonCLCEventDate(YYYYMMDD)"; 
	$temp = $wp_query;  // assign orginal query to temp variable for later use   
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args= array(
		'meta_key' => 'NonCLCEventDate(YYYYMMDD)',
		'orderby' => 'meta_value', 
		'posts_per_page'=>6,
		'paged' => $paged
		);
	query_posts($args);

  if( have_posts() ) : 

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

	    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

        

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

						<?php printf( __( '<span class="%1$s"> | Keywords: </span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>

					</span>



				<?php endif; ?>

                <!--end category-->

               </div><!-- .entry-meta --> 

     

	<div class="entry-content">

				<?php 
				global $more;    // Declare global $more (before the loop).
$more = 0;       // Set (inside the loop) to display content above the more tag.
				the_content( __( '<span class="continue-reading">CONTINUE READING</span>', 'twentyten' ) ); ?>

				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

			</div><!-- .entry-content -->

      

      <?php include('comments_buttons.php')?>
		</div><!-- #post-## -->

    <hr/>  

    <?php endwhile; ?>

 <?php 
	include('pagenumbers.php');
?>   
  <?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?>



	<?php endif; 

	

	$wp_query = $temp;  //reset back to original query

	



?>





<?php endwhile; ?>


			</div><!-- #content -->

		</div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>


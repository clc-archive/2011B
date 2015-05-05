<?php
/*
Template Name: indexB
*/
include 'headerboxes.php' ?>

		
		<div id="container">

			<div class="content0" id="content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post();  
	$cat = 29;
	$do_not_show_stickies = 1; // 0 to show stickies
	$args=array(
	'cat' => 29,
	);

  	$temp = $wp_query;  // assign orginal query to temp variable for later use   
	$wp_query = null;
	$wp_query = new WP_Query($args); 

  if( have_posts() ) : 

		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry-meta">
				<?php twentyten_posted_on(); ?> 
			</div><!-- .entry-meta --> 
                
                
	
			<div class="entry-content">
				<?php the_content( __( '<span class="continue-reading">CONTINUE READING</span>', 'twentyten' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			
            </div><!-- .entry-content -->
	

			
				
				
             
		
		</div><!-- #post-## -->

    <hr/>  

    <?php endwhile; ?>

    
  <?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?>



	<?php endif; 

	

	$wp_query = $temp;  //reset back to original query

	



?>





<?php endwhile; ?>
<div id="pagenumbers">
<a href="/news/"><span class="nav-button">News Stories</span></a><a href="http://clc-archive2011.chameid.es/category/headline/page/2/"><span class="nav-button">CLC Headlines, Page 2 </span></a>
</div>


			</div><!-- #content -->

		</div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>


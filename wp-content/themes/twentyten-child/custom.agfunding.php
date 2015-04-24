<?php
/*

Template Name: agfunding

*/
get_header(); ?>

		<div id="container">

			<div class="content0" id="content">
				
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content" id="static">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->
			
<?php {

$category = get_post_meta($posts[0]->ID, 'category', true);

}
// custom query
if ($category) {

  $cat = get_cat_ID($category);

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;

  $post_per_page = 7; // -1 shows all posts

  $do_not_show_stickies = 1; // 0 to show stickies

  $args=array(

    'cat' => 28,

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

        

        <div class="entry-meta">

				<?php twentyten_posted_on(); ?>

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

    
<div id="pagenumbers">
<a href="/category/working-farms/ag-funding/page/2/"><span class="nav-button">More Listings</span></a>
</div>

  <?php else : ?>



		<h2 class="center">Not Found</h2>

		<p class="center">Sorry, but you are looking for something that isn't here.</p>

		<?php get_search_form(); ?>



	<?php endif; 

	

	$wp_query = $temp;  //reset back to original query

	

}  // if ($category)

?>





<?php endwhile; ?>



			</div><!-- #content -->

		</div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>










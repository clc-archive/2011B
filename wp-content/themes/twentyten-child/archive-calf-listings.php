<?php
/*
Template Name: CALF Listings
*/
include 'header.php' ?>

<style type="css">
	.listing {display:block}
</style>	

		<div id="container">

			<div class="content0" id="content" style="min-height:850px;">
            <div class="entry-content" id="static">
                <h1 class="page-entry-title">Calf Listings</h1>
               <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content" id="static">                      
                           
                           
                            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->
    
    <?php endwhile; ?>
    
    <?php
                                   if ( ! post_password_required() ) {
                                        // password has been accepted, or not required
											 
										// Query post that holds content and excerpt, in this case magic number 8580. 
										$introargs = array (
											
											'post_type'        	=> 'calf-listings',
											'p'      			=> 8837,
											
										);
										
										// The Query
										$introquery = new WP_Query( $introargs );
										
										// The Loop
										if ( $introquery->have_posts() ) {
											while ( $introquery->have_posts() ) {
												$introquery->the_post();
												the_content();
											}
										}
										else {
											// intro text not found, use generic text
											echo '<p>Below are the current listings:</p>';
										}
										//Query Featured Text
										$args = array(
										   'post_type' => 'calf-listings',
										   'meta_query' => array(
											   array(
												   'key' => '_calf_listing_status',
												   'value' => 'Active',
												   'compare' => 'LIKE'
											   ),
										   ),
										   'meta_key' => '_calf_price',
										   'orderby' => 'meta_value_num',
										   'order' => 'ASC'
										 );
								
										$previewlistings = new WP_Query( $args );
										if( $previewlistings->have_posts() ) {
											while( $previewlistings->have_posts() ) {
												$previewlistings->the_post();
												
												//full-listings
							echo				'<div class="listing" style="margin-bottom:12px; clear:both">
													<div class="leftimages">';
													if ( has_post_thumbnail() ) { 
							echo						'<a href="';
														the_permalink(); 
							echo						'" rel="bookmark" title="Full Description of ';
														the_title_attribute();
							echo						'">';
														the_post_thumbnail('medium');
							echo						'</a>';						
													}
							echo				'</div>
													<div class="text232">
													<h2 class="entry-title"><a href="';
													the_permalink(); 
							echo					'" rel="bookmark" title="Full Description of ';
													the_title_attribute();
							echo					'">';
													the_title();
							echo					'</a></h2>
													<p>';
													$price = get_field('_calf_price');
													echo '$' . number_format($price) . '<br>';
													if(get_field('_calf_location'))
														{
															echo get_field('_calf_location') . '<br>';
														}
													if(get_field('_calf_acreage_description'))
														{
															echo get_field('_calf_acreage_description') . '<br>';
														}
													if(get_field('_calf_listing_excerpt'))
														{
															echo get_field('_calf_listing_excerpt');
														}
													else {
													the_content();
													}
													
							echo					'</p>
													<p><a href="';
													the_permalink(); 
							echo					'" title="View maps and full description" class="more-link">More</a></p>
												</div>
												</div>';	

											}
										}
										//if no listing found
										else {
											echo '<p>No listings at this time</p>';
										}

										// Restore original Post Data
										wp_reset_postdata();
								   }
								   
								   //password required
                                   else {
                                       	// Query post that holds content and excerpt, in this case magic number 8982. 
										$introargs = array (
											
											'post_type'        	=> 'calf-listings',
											'p'      			=> 8982,
											
										);
										
										// The Query
										$introquery = new WP_Query( $introargs );
										
										// The Loop
										if ( $introquery->have_posts() ) {
											while ( $introquery->have_posts() ) {
												$introquery->the_post();
												the_content();
												//Query Featured Text
											}
											} 
										else {
											// intro text not found, use generic text
											echo '<p>Below are the current listings.</p>';
										}
										wp_reset_postdata();
										the_content();
										$args = array(
										   'post_type' => 'calf-listings',
										   'meta_query' => array(
											   array(
												   'key' => '_calf_listing_status',
												   'value' => 'Active',
												   'compare' => 'LIKE'
											   ),
										   		array(
												   'key' => '_calf_featured',
												   'value' => '1',
												   'compare' => 'LIKE'
											   )
										   ),
										   'meta_key' => '_calf_price',
										   'orderby' => 'meta_value_num',
										   'order' => 'ASC'
										 );
								
										$previewlistings = new WP_Query( $args );
										if( $previewlistings->have_posts() ) {
											while( $previewlistings->have_posts() ) {
												$previewlistings->the_post();
												
												//preview-listings
												
							echo				'<div class="listing" style="margin-bottom:12px; clear:both">
													<div class="leftimages">';
													if ( has_post_thumbnail() ) { 
														the_post_thumbnail('medium');
													}
							echo				'</div>
													<div class="text232">
													<h2 class="entry-title">';	
													$price = get_field('_calf_price');
													echo '$' . number_format($price) . '</h2><p>';
													if(get_field('_calf_location'))
														{
															echo get_field('_calf_location') . '<br>';
														}
													if(get_field('_calf_acreage_description'))
														{
															echo get_field('_calf_acreage_description') . '<br>';
														}
													if(get_field('_calf_listing_excerpt'))
														{
															echo get_field('_calf_listing_excerpt');
														}
							echo					'</p>
												</div>
												</div>';	
													}
											}	
											//if no listing found
											else {
												echo 'No available listings at this time';
											}
											
										// Restore original Post Data
										wp_reset_postdata();
										
                                   }
								   		
                                   ?>
			</div><!-- #entry-content -->
			</div><!-- #content -->

		</div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>


<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<!--single-->
		<div id="container">
			<div class="content0" id="content">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					 <?
                     if ( ! post_password_required() ) {
                     	// password has been accepted, or not required ?>
						<h1 class="entry-title"><?php the_title(); ?></h1> 
                        <div class="listing" style="margin-bottom:12px; clear:both">
                            <div class="rightimages">
                                <?php 
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail('medium');
                                }
								?>
                            </div>
                            <div class="text232">
                            <p>
                            <?php
                            $price = get_field('_calf_price');
							echo '$' . number_format($price) . '<br>';
                            if(get_field('_calf_location'))
								{
									echo get_field('_calf_location') . '<br>';
								}
							if(get_field('_calf_acreage_description'))
								{
									echo get_field('_calf_acreage_description') . ' acres';
								}
							echo '</p>';	
							the_content();
                            echo '<p>';		
										
                           
                            if (get_field('_calf_context_map')) {							
                                echo '<a href="' . get_field('_calf_context_map') . '" title="View Context Map">Context Map</a><br>'; 	
                            }
                            if (get_field('_calf_context_map')) {
								echo '<a href="' . get_field('_calf_topographic_map') . '" title="View Topographic Map">Topographic Map</a><br>'; 	
                            }
                            if (get_field('_calf_context_map')) {							
                                echo '<a href="' . get_field('_calf_aerial_map') . '" title="View Aerial Map">Aerial Map</a><br>'; 	
                            }
                            if (get_field('_calf_context_map')) {							
                                echo '<a href="' . get_field('_calf_soil_map') . '" title="View Soil Map">Soil Map</a>'; 	
                            }
                            echo '</p><p>';	
                            if (get_field('_calf_realtor_name')) {		
                                echo get_field('_calf_realtor_name') . '<br>'; 
                            }
							if (get_field('_calf_agency')) {		
                                echo get_field('_calf_agency') . '<br>'; 
                            }
                            if (get_field('_realtor_listing')) {		
                                echo '<a href="' . get_field('_realtor_listing') . '"title="View Realtor Listing" class="more-link">Official Realtor Listing</a>'; 
                            }
                            ?>
                            </p>
                        </div>
                        </div>	 	
                         <?
                   		//end of password accepted
						}
						//password required
                     	else {
                       		echo '<h1 class="page-entry-title">Calf Listing</h1>';
							the_content();
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
                    ?>
					
				</div><!-- #post-## -->
				<? $img = get_post_meta(get_the_ID(), 'wp_custom_attachment', true); ?>
               
				<?php comments_template( '', true );
				// password has been accepted, or not required
				if ( ! post_password_required() ) {
				 ?>
			
				<? } ?>
                
<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php







/*







Template Name: pca







*/







?>





<?php















get_header(); ?>

























		<div id="container">







			<div id="content" role="main">

				











<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>















				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>







					<?php if ( is_front_page() ) { ?>







						<h2 class="entry-title"><?php the_title(); ?></h2>







					<?php } else { ?>







						<h1 class="entry-title"><?php the_title(); ?></h1>







					<?php } ?>









					<!--customized pca text -->

					<?php 

						$key="PCALocation"; echo get_post_meta($post->ID, $key, true);

				 		$key="Directions"; echo "<br />Directions: " . get_post_meta($post->ID, $key, true);

						$key="CLCRelationship"; echo "<br />" . get_post_meta($post->ID, $key, true);

						$key="Download1"; 

						if (empty($key)); 

						else 

							{echo "<br />" . get_post_meta($post->ID, $key, true);	}

						?>







					<div class="entry-content">







						<?php the_content(); ?>







						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>







						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>







					</div><!-- .entry-content -->







				</div><!-- #post-## -->







<!--Adding in list of environmental ed events-->



Upcoming Community Assistance Events				



<?php eme_get_events_list("limit=10&scope=future&order=ASC&category=2"); ?>







				<?php comments_template( '', true ); ?>















<?php endwhile; ?>















			</div><!-- #content -->







		</div><!-- #container -->















<?php get_sidebar(); ?>







<?php get_footer(); ?>








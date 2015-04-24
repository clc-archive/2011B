<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Full Article', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>    
	 		<div class="entry-summary">
				<?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
		</div><!-- #post-## -->
<?php endwhile; // End the loop. Whew. ?>

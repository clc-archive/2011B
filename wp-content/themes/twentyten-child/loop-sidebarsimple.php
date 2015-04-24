<?php while ( have_posts() ) : the_post(); ?>
		<ul id="bullets">
			<li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Full Article', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>    
		</ul><!-- #post-## -->
<?php endwhile; // End the loop. Whew. ?>

<?php while ( have_posts() ) : the_post(); ?>
		<ul class="bullets">
        	<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Full Article', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</li><!-- #post-## -->
		</ul>
<?php endwhile; // End the loop. Whew. ?>

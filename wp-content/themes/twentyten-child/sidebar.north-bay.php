<div class="section">
<h2><a href="/tag/north-bay//">North Bay News:</a></h2>
<? {query_posts( $query_string . '&tag=north-bay&posts_per_page=3' );
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.html and that will be used instead.
			 */
			 get_template_part( 'loop', 'bulletsidebar' );
				}?>
</div>
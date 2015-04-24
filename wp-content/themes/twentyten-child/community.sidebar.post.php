<div class="section">
<h2><a href="/category/community/">Recent News:</a></h2>
<? {query_posts( $query_string . '&cat=8&posts_per_page=3' );
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.html and that will be used instead.
			 */
			 get_template_part( 'loop', 'bulletsidebar' );
				}?>
</div>
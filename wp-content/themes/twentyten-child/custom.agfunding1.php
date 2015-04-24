<?php

/*

Template Name: agfunding1

*/

get_header(); ?>



		<div id="container">

			<div id="content" class="content0">

		
            <? {query_posts( $query_string . '&tag=nature-quest&posts_per_page=3' );
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.html and that will be used instead.
			 */
			 get_template_part( 'loop', 'sidebar' );
				}?>

			</div><!-- #content -->

        </div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>




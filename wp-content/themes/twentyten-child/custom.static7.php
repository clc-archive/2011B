<?php

/*

Template Name: static7-minheight

*/



get_header(); ?>
<!--page.php template-->


		<div id="container">

			<div id="content" class="content0" style="min-height:680px;">

			<?php

			/* Run the loop to output the page.

			 * If you want to overload this in a child theme then include a file

			 * called loop-page.php and that will be used instead.

			 */

			get_template_part( 'loop', 'page-static' );

			?>

			</div><!-- #content -->

        </div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>


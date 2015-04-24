<?php
/*
Template Name: static5 - image gallery
*/
get_header(); ?>
<!--custom.static5-->

		<div id="container">
			<div id="content" class="content0">
			
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


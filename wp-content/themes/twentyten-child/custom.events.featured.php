<?php

/* 

Template Name: Featured Events

*/



get_header(); ?>





		<div id="container">

			<div id="content" role="main">

event page featured test

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( is_front_page() ) { ?>

						<h2 class="entry-title"><?php the_title(); ?></h2>

					<?php } else { ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>

					<?php } ?>



					<div class="entry-content">

						<?php the_content(); ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>

						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>

					</div><!-- .entry-content -->

				</div><!-- #post-## -->

custom.events.featured                        

<?php eme_get_events_list("limit=10&scope=future&order=ASC&paging=1&category=3&long_events=0&format=<h1>#_LINKEDNAME</h1>

<h2>#j #M #Y - #H:#i</h2>

<h2>#_ATT{Cost}</h2>

<h2><#_ATT{LocationURL}{!--nolink--}>#_LOCATION<#_ATT{LocationURLClose}{!--noclose--}>, #_TOWN</h2>

#_EXCERPT

<h3>#_ATT{Contact}</h3>

<h3>#_ATT{Footer}</h3>

<hr>
custom.events.featured

						  

						  

						  

						  "); ?>

				

				

				

				

			

				

				

				<?php comments_template( '', true ); ?>



<?php endwhile; ?>



			</div><!-- #content -->

		</div><!-- #container -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>


<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

include 'header404.php' ?>

	<div id="container" style="background-color:white">
		<div id="content" class="contentfull"  >
			<div id="post-0" class="post error404 not-found">
				
				<div class="entry-content">
					<img src="http://clc-archive2011.chameid.es/images/train.jpg" width="500" height="263" alt="train" style="float:right; margin-bottom:6px;"/><h1 class="page-entry-title">Not Found</h1>
                    <p>The page you requested could not be found.<br />
 Try the <a href="http://clc-archive2011.chameid.es">homepage</a>, one of the menu links above, or a search.</p>
					
						<!--<?php get_search_form(); ?>-->

						<?php include("searchform2.php") ?>
                
                </div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
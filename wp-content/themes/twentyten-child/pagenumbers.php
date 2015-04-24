	<?php $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
	<div id="pagenumbers">
		<?php 
			previous_posts_link_first(); 
            previous_posts_link2(); 	
			previous_posts_link_mc();
			echo( "<span class=\"nav-current\">" .$pageNumber. "</span>" ); 
            next_posts_link_mc(); 
			next_posts_link2( ); 
			next_posts_link_last(); 
 		?>
    </div>

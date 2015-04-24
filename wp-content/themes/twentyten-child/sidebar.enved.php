<div class="section"><a href="/events/environmental-education/"><img src="/images/education/Hudson-Head-Start-Spring-4-13-2011-027.jpg" width="150" height="141" alt="Hudson Head Start" title="Hudson Head Start" /></a>
<h4>Over 4,000 people participated in our 2012 <a href="/events/environmental-education/">educational programs</a>.</h4>
</div>
<?
include('sidebar.naturequestpromo.php'); 
?>
<div class="section">
<h2><a href="/category/nonclcevent/">Non CLC Events:</a></h2>
<? {query_posts( $query_string . '&cat=11' . '&posts_per_page=3' );
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.html and that will be used instead.
			 */
			 get_template_part( 'loop', 'sidebarsimple' );
				}?>
</div>

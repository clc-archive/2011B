<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area">
			<div id="sidebar">
                
    	<?php
			wp_reset_query;
						
			
			if ( !is_home()&&!is_page("indexb")&&!is_page("indexc") ) 
				{if (!is_page(events))
					{
						include('sidebar.featuredevents.php');
						 
					}
				
				else 
					
					{
						include('sidebar.enved.php');
						
						
					}
					

				
				}
				
			
			else 
				{
						include('sidebar.home.php'); 
					}
			
		
			
			if ( is_page( 'community-assistance' )  ) 
				{
					include('sidebar.community.php'); 
					include('community.sidebar.post.php'); 
				}
			
			
			else if ( is_page( array ('conservation-development-and-design' , 'land-use-education-and-events', 'conservation-advisory-councils', 'columbia-county-trails', 'harlem-valley-rail-trail', 'resources', 'map') ) || is_category('community') )  
				{
					include('sidebar.community.php'); 
					
				}
					
			else if ( is_page( array ('working-farms' , 'working-farms-trainings') )  )  
				{
					include('workingfarms.sidebar.post.php'); 
					
				}
			else if ('265' == $post->post_parent || '268' == $post->post_parent  || '272' == $post->post_parent  || is_category('working-farms') || is_page (array ('ag-funding', 'ag-resources', 'farmland-protection'))) {    
				// parent is working farms
				if (is_page ('calf'))
				//calf page
				{include('sidebar.calf.menu.php'); }
				include('workingfarms.sidebar.menu.php'); 
				}
			else if (is_page( 
				array('buying-farmland', 'calf-listings', 'calf-realtors', 'realtors-conserving-farmland', 'sell', 'form', 'realtor')
				)|| 'calf-listings' == get_post_type()
				)
			{include('sidebar.calf.menu.php');
				}	
			else if ( is_page("public-conservation-areas"  )  )  
				{
					include('sidebar.public-conservation-areas.php'); 
				}
			else if ( is_page("bordens-pond"  )  )  
				{
					include('sidebar.bordens-pond.php'); 
				}
				
			else if ( is_page("drowned-lands"  )  )  
				{
					include('sidebar.drowned-lands.php'); 
				}	
			
			else if ( is_page("greenport"  )  )  
				{
					include('sidebar.greenport.php'); 
				}	
				
			else if ( is_page("hand-hollow"  )  )  
				{
					include('sidebar.handhollow.php'); 
				}	
			
			else if ( is_page("harrier-hill"  )  )  
				{
					include('sidebar.harrierhill.php'); 
				}
				
			else if ( is_page("high-falls"  )  )  
				{
					include('sidebar.highfalls.php');
				}	
				
			else if ( is_page("ooms"  )  )  
				{
					include('sidebar.ooms.php'); 
				}
				
			else if ( is_page("round-ball-mountain"  )  )  
				{
					include('sidebar.round-ball-mountain.php'); 
				}	
				
			else if ( is_page("schor"  )  )  
				{
					include('sidebar.schor.php'); 
				}	
			else if ( is_page("siegel-kline-kill"  )  )  
				{
					include('sidebar.siegel-kline-kill.php'); 
				}	
			
			else if ( is_category( array( 'publication', 'annual-report', 'calendar', 'land-matters', 'newsletter', 'conservation-minded') ) )
				{
					include('sidebar.publications.php'); 
				}
				
			else if ( is_page( array( 'about', 'clc-store', 'staff', 'board-of-trustees', 'contact', 'financials', 'links', 'rss-feeds') ) )
				{
					if ( is_page("clc-store") )			
			{
					include('sidebar.store.php'); 
				}	
					include('sidebar.about.php'); 
					
				
				}
			else if ( is_page( news) )			
			{
					include('sidebar.publications.php'); 
				}
			else if ( is_page("naturequest") )			
			{
					include('sidebar.naturequest.php'); 
				}
			else if ( is_page("environmental-education") )			
			{
					include('sidebar.environmental-education.php'); 
				}
			
			else if ( is_page("knee-high-naturalists") )			
			{
					include('sidebar.knee-high-naturalists.php'); 
				}
			else if ( is_page("land-protection") )			
			{
					include('sidebar.land-protection.php'); 
				}
			else if ( is_page("conservation-easements") )			
			{
					include('sidebar.conservation-easements.php'); 
				}
			else if ( is_single ("hudson-north-bay-recreation-and-natural-area") )			
			{
					include('sidebar.community.php'); 
					include('sidebar.north-bay.php'); 
				}	
				
			else if ( is_page("woodland-pools") )			
			{
					include('sidebar.woodland.php'); 
				}
			
			
		?>
          
      <?  if ( !is_home() ) 
					{
						
						include('sidebar.social.php'); 
						
					}  
      ?>      
    		<ul class="xoxo">
	 
	<?php
        
		/* When we call the dynamic_sidebar() function, it'll spit out
         * the widgets for that widget area. If it instead returns false,
         * then the sidebar simply doesn't exist, so we'll hard-code in
         * some default sidebar stuff just in case.
         */
        if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
            <?php endif; // end primary widget area ?>        	
		</ul>
		</div>
            </div><!-- #primary .widget-area -->
    
   

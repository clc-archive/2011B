<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Columbia Land Conservancy - Conserving Rural Landscapes</title>
<link rel="icon" type="image/gif" href="http://clc-archive2011.chameid.es/favicon.ico" />
 <link rel="shortcut icon" type="image/x-icon" href="http://clc-archive2011.chameid.es/favicon.ico" />
 
<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentyten-child/style.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
?>
<? wp_head();
?>
<script type="text/javascript" async src="http://clc-archive2011.chameid.es/js/boxescombine.js"></script>
<script src="/js/jbar/js/jbar-custom2b.js"></script>
	<script>
    $(function() {
        $.jBar({
            type: 'fixed', // fixed/static (lowercase)
            delay: '1500', // In milliseconds
            backgroundColor: '#3399CC', // Background Color
            borderColor: '#FFF', // Background Color
            buttonTextColor: '#FFD400', // Button Text
            buttonColor: '#3399CC', // Button Color
            buttonColorHover: '#000', // Button Color Hover
            calltoAction: '', // Call to action text
            buttonText: 'May 26 Country Barbecue &ndash; Pre-Purchase Tickets &amp; Save', // Button Text
            buttonLink: 'http://clc-archive2011.chameid.es/events/137/2013-country-barbecue/' // Hyperlink from button
        });
    });
</script>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <div id="headerindex" >
            <div id="masthead" >
                <div id="branding">
                	<div id="headerlogo"> 
                   	  <div id="toplinks">
                			<a href="http://clc-archive2011.chameid.es">
                            	<img src="/images/graphics/clc-logo.png" height="64" width="360" alt="Columbia Land Conservancy" class="noshadow" id="headerlogoimage" /></a>
                            <ul>
                            	<li><a href="http://clc-archive2011.chameid.es/not-available.html?utm_source=header&amp;utm_medium=links&amp;utm_campaign=membership" title="Donate to CLC" onClick="_gaq.push(['_trackEvent', 'Links', 'Donate', 'Top Menu']);">DONATE</a> <span class="pipes">|</span> </li>
                                <li> <a href="/email-sign-up/" OnClick="_gaq.push(['_trackEvent', 'Links', 'email', 'Top Menu']);">EMAIL UPDATES</a> <span class="pipes">| </span></li>
                                <li><a href="index.html" OnClick="_gaq.push(['_trackEvent', 'Links', 'Home', 'Top Menu']);">Home</a> <span class="pipes"></span></li>
								</ul>
            			</div>
                    </div>
            			<!--top links-->
    			<div id="featured">                 
					<?php $featured_post = new WP_Query('showposts=4&cat=10'); ?>
                	<?php if ($featured_post->have_posts()) : while ($featured_post->have_posts()) : $featured_post->the_post(); ?>
                	<div class="f-item">
                    	<?php the_post_thumbnail( 'featured-thumb' );?>
                        <!--Enables featured posts to link somewhere else
                        	Gets metadata postlink. If blank, inserts permalink
                         -->
						<?php 
							$key="postlink"; 
							$featuredlink = get_post_meta($post->ID, $key, true);
								if ($featuredlink == "") $featuredlink = the_permalink();
								if ($featuredlink == "http://clc-archive2011.chameid.es/not-available.html?utm_source=featured&amp;utm_medium=links&amp;utm_campaign=membership") 
									{$category = "Donate";}
								else {$category = $featuredlink;}
								?>
                    	<div class="f-meta" onclick="location.href='<?php echo ($featuredlink); ?>'; _gaq.push(['_trackEvent', 'Links', '<?php echo ($category); ?>', 'Featured Boxes']);" >
						<h3><a href="<?php echo ($featuredlink); ?>" title="Continue reading &quot;<?php the_title(); ?>&quot;" onclick="location.href='<?php echo ($featuredlink); ?>'; _gaq.push(['_trackEvent', 'Links', '<?php echo ($category); ?>', 'Featured Boxes']);"><?php the_title(); ?> </a></h3>
                    		<?php the_excerpt(); ?> 
                         </div>	
					</div>
				<?php endwhile; endif; ?>
            	</div>	
            	<div id="access">
                  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
                    <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
                  </div>
                    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>



               	 </div><!-- #access -->



            </div><!-- #masthead -->



        </div><!-- #header -->



    </div>



	<!--redline-->



    <div id="redline">



    </div>







	<div id="main">
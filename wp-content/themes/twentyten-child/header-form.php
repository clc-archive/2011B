<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		wp_title( '|', true, 'right' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
		?>	Columbia Land Conservancy
	</title>
    <link rel="icon" type="image/gif" href="http://clc-archive.chameid.es/favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="http://clc-archive.chameid.es/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/wp-content/themes/twentyten-child/style.css" />
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/twentyten-child/css/form.css" />
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<? wp_head();
?>
</head>
<body <?php body_class(); ?>>
    <div id="wrapper" class="hfeed">
        <div id="header" >
            <div id="masthead" >
                <div id="branding">
                	<div id="headerlogo"> 
                   	  <div id="toplinks">
                      	<a href="http://clc-archive.chameid.es" title="home">
                        	<img src="/images/graphics/clc-logo.png" height="64" width="360" alt="Columbia Land Conservancy" class="noshadow" id="headerlogoimage" />
                        </a>
                            <ul>
                            	<li><a href="http://clc-archive.chameid.es/not-available.html?utm_source=header&amp;utm_medium=links&amp;utm_campaign=membership" title="Donate to CLC" onClick="_gaq.push(['_trackEvent', 'Links', 'Donate', 'Top Menu']);" >DONATE</a> <span class="pipes">|</span></li>
                                <li> <a href="/email-sign-up/" OnClick="_gaq.push(['_trackEvent', 'Links', 'email', 'Top Menu']);">EMAIL UPDATES</a> <span class="pipes">| </span></li>
                                <li><a href="/index.html" OnClick="_gaq.push(['_trackEvent', 'Links', 'Home', 'Top Menu']);">Home</a><span class="pipes"></span></li>
							</ul>
            			</div>
                    </div>
            		<div id="access">
                  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
                    	<div class="skip-link screen-reader-text">
                        	<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a>
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
<?php

// custom theming begins for page numbers-----------------
/**
 * Retrieve next posts pages link.
 *
copied from above 
@return string
 */
function get_next_posts_page_link2($max_page = 0) {
	global $paged;

	if ( !is_single() ) {
		if ( !$paged )
			$paged = 1;
		$nextpage = intval($paged) + 2;
		if ( !$max_page || $max_page >= $nextpage )
			return get_pagenum_link($nextpage);
	}
}

/**
 * Retrieve last pages link.
 *
copied from above 
@return string
custom theming page numbers
 */
function get_next_posts_page_link_last($max_page = 0) {
	global $paged;

	if ( !is_single() ) {
		if ( !$paged )
			$paged = 1;
		$paged2 = intval($paged) + 2;
		$nextpage = $max_page;
		if ( !$max_page || $max_page >= $paged2 )
			return get_pagenum_link($nextpage);
	}
}





/**
 * Display or return the next posts page link.
 *
 * @since 0.71
 *
 * @param int $max_page Optional. Max pages.
 * @param boolean $echo Optional. Echo or return;
 */
function next_posts_mc( $max_page = 0, $echo = true ) {
	$output = esc_url( get_next_posts_page_link( $max_page ) );

	if ( $echo )
		echo $output;
	else
		return $output;
}

/**
 * Display or return the next posts pages link.
 *
 copied from above
 */
function next_posts2( $max_page = 0, $echo = true ) {
	$output = esc_url( get_next_posts_page_link2( $max_page ) );

	if ( $echo )
		echo $output;
	else
		return $output;
}

/**
 * Display or return the next posts pages link last.
 *
 copied from above
 */
function next_posts_last( $max_page = 0, $echo = true ) {
	$output = esc_url( get_next_posts_page_link_last( $max_page ) );

	if ( $echo )
		echo $output;
	else
		return $output;
}




/**
 * Return the next posts page link.
 *
 * @since 2.7.0
 *
 * @param string $label Content for link text.
 * @param int $max_page Optional. Max pages.
 * @return string|null
 custom theming. page number instead of 'next page'
 
 */
function get_next_posts_link_mc( $label = null, $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page )
		$max_page = $wp_query->max_num_pages;

	if ( !$paged )
		$paged = 1;

	$nextpage = intval($paged) + 1;

	if ( null === $label )
		$label = __( '<span class="nav-button">' . $nextpage . '</span>' );

	if ( !is_single() && ( $nextpage <= $max_page ) ) {
		$attr = apply_filters( 'next_posts_link_attributes', '' );
		return '<a href="' . next_posts( $max_page, false ) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</a>';
	}
}

/**
 * Return the next posts pages link.
 *
 * copied from above
 */
function get_next_posts_link2( $label = null, $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page )
		$max_page = $wp_query->max_num_pages;

	if ( !$paged )
		$paged = 1;

	$nextpage = intval($paged) + 2;

	if ( null === $label )
		$label = __( '<span class="nav-button">' . $nextpage . '</span>');

	if ( !is_single() && ( $nextpage <= $max_page ) ) {
		$attr = apply_filters( 'next_posts_link_attributes', '' );
		return '<a href="' . next_posts2( $max_page, false ) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</a>';
	}
}

/**
 * Return the next posts pages link last.
 *
 * copied from above
 custom theming page numbers
 */
function get_next_posts_link_last( $label = null, $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page )
		$max_page = $wp_query->max_num_pages;

	if ( !$paged )
		$paged = 1;

	$nextpage = $max_page;

	if ( null === $label )
		$label = __( '<span class="nav-button">' . $nextpage . '</span>' );

	if ( !is_single() && ( $nextpage > $paged + 2 ) ) {
		$attr = apply_filters( 'next_posts_link_attributes', '' );
		return '<a href="' . next_posts_last( $max_page, false ) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</a>';
	}
}



/**
 * Display the next posts page link.
 *
 * @since 0.71
 * @uses get_next_posts_link()
 *
 * @param string $label Content for link text.
 * @param int $max_page Optional. Max pages.
 */
function next_posts_link_mc( $label = null, $max_page = 0 ) {
	echo get_next_posts_link_mc( $label, $max_page );
}
/**
 * copied from above
 prints the text on page
 */
function next_posts_link2( $label = null, $max_page = 0 ) {
	echo get_next_posts_link2( $label, $max_page );
}

/**
 * copied from above
 prints the text on page
 custom theming page numbers
 */
function next_posts_link_last( $label = null, $max_page = 0 ) {
	echo get_next_posts_link_last( $label, $max_page );
}



/**
 * Retrieve previous posts page link.
 *
 * Will only return string, if not on a single page or post.
 *
 * Backported to 2.0.10 from 2.1.3.
 *
 * @since 2.0.10
 *
 * @return string|null
 */
function get_previous_posts_page_link_mc() {
	global $paged;

	if ( !is_single() ) {
		$nextpage = intval($paged) - 1;
		if ( $nextpage < 1 )
			$nextpage = 1;
		return get_pagenum_link($nextpage);
	}
}

/**
 * Retrieve page prior to previous post pages link.
 *
 * copied from above
 *
 * @return string|null
 custom theming page numbers
 */
function get_previous_posts_page_link2() {
	global $paged;

	if ( !is_single() ) {
		$nextpage = intval($paged) - 2;
		if ( $nextpage < 1 )
			$nextpage = 1;
		return get_pagenum_link($nextpage);
	}
}


/**
 * Retrieve 1st post pages link.
 *
 * copied from above
 *
 * @return string|null
 custom theming page numbers
 */
function get_previous_posts_page_link_first() {
	global $paged;

	if ( !is_single() ) {
		$nextpage = 1;
		if ( $nextpage < 1 )
			$nextpage = 1;
		return get_pagenum_link($nextpage);
	}
}


/**
 * Display or return the previous posts page link.
 *
 * @since 0.71
 *
 * @param boolean $echo Optional. Echo or return;
 */
function previous_posts_mc( $echo = true ) {
	$output = esc_url( get_previous_posts_page_link() );

	if ( $echo )
		echo $output;
	else
		return $output;
}


/**
 * Display or return the prior to previous posts pages link.
 *
 * copied from above
 *
 * @param boolean $echo Optional. Echo or return;
 custom theming page numbers
 */
function previous_posts2( $echo = true ) {
	$output = esc_url( get_previous_posts_page_link2() );

	if ( $echo )
		echo $output;
	else
		return $output;
}

/**
 * Display or return 1st posts pages link.
 *
 * copied from above
 *
 * @param boolean $echo Optional. Echo or return;
 custom theming
 */
function previous_posts_first( $echo = true ) {
	$output = esc_url( get_previous_posts_page_link_first() );

	if ( $echo )
		echo $output;
	else
		return $output;
}


/**
 * Return the previous posts page link.
 *
 * @since 2.7.0
 *
 * @param string $label Optional. Previous page link text.
 * @return string|null
 custom theming. page number. 
 */
function get_previous_posts_link_mc( $label = null ) {
	global $paged; 
	
	if ( null === $label )
		{$prevpage = $paged - 1;
		$label = __( '<span class="nav-button">' . $prevpage . '</span>' );}

	if ( !is_single() && $paged > 1 ) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts( false ) . "\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</a>';
	}
}

/**
 * Return the prior to previous posts pages link.
 *
 * copied from above
 *
 * @param string $label Optional. Previous page link text.
 * @return string|null
 custom theming. page number.
 */
function get_previous_posts_link2( $label = null ) {
	global $paged;

	if ( null === $label )
		{$prevpage = $paged - 2;
		$label = __( '<span class="nav-button">' . $prevpage . '</span>' );}

	if ( !is_single() && $paged > 2 ) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts2( false ) . "\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</a>';
	}
}


/**
 * Return the prior 1st pages link.
 *
 * copied from above
 *
 * @param string $label Optional. Previous page link text.
 * @return string|null
 custom theming. page number.
 */
function get_previous_posts_link_first( $label = null ) {
	global $paged;

	if ( null === $label )
		$label = __( '<span class="nav-button">1</span>' );

	if ( !is_single() && $paged > 3 ) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts_first( false ) . "\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/', '&#038;$1', $label ) .'</a>';
	}
}



/**
 * Display the previous posts page link.
 *
 * @since 0.71
 * @uses get_previous_posts_link()
 *
 * @param string $label Optional. Previous page link text.
 */
function previous_posts_link_mc( $label = null ) {
	echo get_previous_posts_link_mc( $label );
}

/**
 * Display the prior to previous posts page link.
 *
 * copied from above
 *
 * @param string $label Optional. Previous page link text.
 custom theming. page numbers.
 */
function previous_posts_link2( $label = null ) {
	echo get_previous_posts_link2( $label );
}

/**
 * Display the 1st page link.
 *
 * copied from above
 *
 * @param string $label Optional. Previous page link text.
 custom theming. page numbers
 */
function previous_posts_link_first( $label = null ) {
	echo get_previous_posts_link_first( $label );
}



//end of page numbers-------------------------------------------------------------------------------------------






//custom password text
function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	//calf listings get a unique password code
	if (is_page_template( 'custom.CALF-listings.php' ) || is_singular( 'calf-listings' )  )
	{
		$o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "<p>Enter the password to get full access to this page or <a href=\"http://clc-archive2011.chameid.es/working-farms/form/\">sign up</a>. If you have lost your password, contact Marissa Codey for assistance at <a href=\"mailto:marissa@clctrust.org\">marissa@clctrust.org</a>.</p>" ) . '
    <label for="' . $label . '">' . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit Password" ) . '" />
    </form>
    ';
	}
	else
	{
		$o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To view this protected post, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';}
    
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

//adjusted from twentyten theme to just show date
if ( ! function_exists( 'twentyten_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_on() {
	printf( __( '%2$s', 'twentyten' ),
		'meta-prep',
		sprintf( '<span class="entry-date">%1$s</span>',
			get_the_date()
		)
	);
}
endif;


//stop more link anchor
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


//remove 'protected' from the title of password protectd posts
add_filter('protected_title_format', 'blank');
function blank($title) {
       return '%s';
}



//make individual calf listings private, with exceptions for intro text (magicnumber)
function force_calf_password($post)
{
    if ($post['post_type'] == 'calf-listings' && $post['post_name'] !== 'intro-text-full-listings')
    {
		if ($post['post_name'] !== 'intro-text-preview-listings')
		{$post['post_password'] = 'ForeverRural!86';}
		}	
    return $post;
}
add_filter('wp_insert_post_data', 'force_calf_password');


//removes the continue reading from the excerpt
//this is used to make the use of the excerpt on the header boxes cleaner

add_action( 'after_setup_theme', 'mc_setup' );
function mc_setup() {
	remove_filter( 'excerpt_more', 'twentyten_auto_excerpt_more' );
	remove_filter( 'get_the_excerpt', 'twentyten_custom_excerpt_more' );
}

function mc_auto_excerpt_more( $more ) {
	return ' …' . mc_custom_more_link();
}
add_filter( 'excerpt_more', 'mc_auto_excerpt_more' );

function mc_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= mc_custom_more_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'mc_custom_excerpt_more' );

function mc_custom_more_link(){
	return '<div class="excerpt-more"><a href="'. get_permalink() . '">' . __( 'more') . '</a></div>';
}

//end



remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link


add_filter( 'index_rel_link', 'disable_stuff' );
add_filter( 'parent_post_rel_link', 'disable_stuff' );
add_filter( 'start_post_rel_link', 'disable_stuff' );
add_filter( 'previous_post_rel_link', 'disable_stuff' );
add_filter( 'next_post_rel_link', 'disable_stuff' );


function disable_stuff( $data ) {
	return false;
}
?>
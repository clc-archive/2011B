<?php


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
    $post['post_password'] = 'ForeverRural!86';	
    return $post;
}
add_filter('wp_insert_post_data', 'force_calf_password');


//custom password text
function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    //calf listings get a unique password code
	if (is_page_template( 'custom.listings-full.php' ) || is_singular( 'calf-listings' )  )
	{$o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "<p>Enter password to get full access to this page, or <a href=\"http://clc-archive2011.chameid.es/working-farms/form/\">sign up</a>.</p>" ) . '
    <input name="post_password" id="' . $label . '" type="password" size="20" />
	<input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';}
	else
	{$o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "To view this protected post, enter the password below:" ) . '
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
	}
	
    return $o;
	}
add_filter( 'the_password_form', 'my_password_form' );





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
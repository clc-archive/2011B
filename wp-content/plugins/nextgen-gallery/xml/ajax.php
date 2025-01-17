<?php


// see http://codex.wordpress.org/AJAX_in_Plugins





// check if we have all needed parameter


if ( !defined('ABSPATH') || (!isset($_GET['galleryid']) || !is_numeric($_GET['galleryid'])) || (!isset($_GET['p']) || !is_numeric($_GET['p'])) || !isset($_GET['type'])){


    // if it's not ajax request, back to main page


    if($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest')


        header('Location: http://'. $_SERVER['HTTP_HOST']);


    die();    


}





switch ($_GET['type']) {


	case 'gallery':


	


		// get the navigation page


		set_query_var('nggpage', intval($_GET['nggpage']));


		


		// get the current page/post id


		set_query_var('pageid', intval($_GET['p']));


		set_query_var('show', 'gallery');


		$GLOBALS['id'] = intval($_GET['p']);


		


		echo nggShowGallery( intval($_GET['galleryid']) );


		


		break;


	case 'browser':


	


		// which image should be shown ?


		set_query_var('pid', intval($_GET['pid']));


		


		// get the current page/post id


		set_query_var('pageid', intval($_GET['p']));


		$GLOBALS['id'] = intval($_GET['p']);


			


		echo nggShowImageBrowser( intval($_GET['galleryid']) );


		


		break;


	default:


		echo 'Wrong request type specified.';


}
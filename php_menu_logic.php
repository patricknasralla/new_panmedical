<?php

/*
	Function that determines the current page and displays links accordingly - 
	Cuurrent page will not be a link and can be styled as you want.
*/

function nav_logic($url, $link_id, $page_id) {
	if ($page_id == $link_id) {
		/*	HTML for current page goes here	*/
		$output = "<li class='current'>{$link_id}</li>";
	} else {
		/*	HTML for standard links goes here	*/
		$output = "<li><a href={$url}>{$link_id}</a></li>";
	}
	return $output;
}


/*
	This is the function for menu structure - for each link, simply put a new line in the Main Menu items as follows:
		nav_logic("file_name", "string to display", $page_id);
*/

function navigation($page_id) {
	$output = "<nav><div id=\"main_links\"><ul>";
	
	/*	Main Menu items	*/
	$output .= nav_logic("about.php", "about us", $page_id);
	$output .= nav_logic("news.php", "news", $page_id);
	$output .= nav_logic("products.php", "products", $page_id);
	$output .= nav_logic("contact.php", "contact us", $page_id);
				
	/*	Sub Menu Bits Go Here...	*/
	$output .= "</ul></div></nav>" ;

	return $output;
}

?>
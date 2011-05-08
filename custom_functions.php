<?php
/* -------------Add your code above this line------------
 * Copyright (c) 2011 King Sidharth. All Rights Reserved
 * For more info: https://github.com/kingsidharth/Oyake
 *
 * Index
 * 1. Move Navigation In Sidebar
 * 2. Blank Div in Header
 * 3. Footer
 * 4. Remove Attribution
 */

// 1. Move Navigation in Sidebar
remove_action('thesis_hook_before_header', 'thesis_nav_menu');
add_action('thesis_hook_before_sidebars', 'thesis_nav_menu');

//2. Blank Div in Header
function blank_div() {
	echo '<div id="header_deco"></div>';
}
add_action('thesis_hook_header','blank_div');

// 3. Footer
function custom_footer() { ?>
	<p><a href="http://www.64notes.com/oyake">Oyake</a> is child theme for <a href="http://64notes.com/thesis">thesis</a> designed by <em><a href="http://www.kingsidharth.com">King Sidharth</a></em> .
<?php }
add_action('thesis_hook_footer', 'custom_footer');

// 4. Remove Attribution
remove_action('thesis_hook_footer', 'thesis_attribution');

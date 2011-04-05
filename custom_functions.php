<?php
/* Index
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
	<p>Site on <a href="http://www.wordpress.org">WordPress</a> with <a href="http://www.kingsidharth.com/thesis">Thesis Theme Framework</a>.</p>
	<p>Copyright &#169; <?php echo date("Y") ?> Rishabh Verma. All Rights Reserved.</p>
	<p>Site designed by <em><a href="http://www.kingsidharth.com">King Sidharth</a></em>.
<?php }
add_action('thesis_hook_footer', 'custom_footer');

// 4. Remove Attribution
remove_action('thesis_hook_footer', 'thesis_attribution');

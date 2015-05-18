<?php
header('Content-type: text/css');

define ( 'THEME_ABS_PATH', str_replace("\\", "/", dirname(__FILE__)));

require( '../../../wp-load.php' );

include_once  THEME_ABS_PATH. '/inc/init.php';


$o  = new webnus_options();


/*
 *
*Top  Menu Hover Color
*/

?>
<?php 

/*
 * Google Font For P,H Tags
*/
$thm_options = get_option('webnus_options');


if(isset($thm_options['webnus_p_font']) && $thm_options['webnus_p_font']!='')
{
	echo "p { font-family: {$thm_options['webnus_p_font']}}\n";
}
if(isset($thm_options['webnus_heading_font']) && $thm_options['webnus_heading_font']!='')
{
	echo "h1, h2, h3, h4, h5, h6 { font-family: {$thm_options['webnus_heading_font']}}\n";
}

if(isset($thm_options['webnus_body_font']) && $thm_options['webnus_body_font']!='')
{
	echo "body { font-family: {$thm_options['webnus_body_font']}}\n";
}



/* topnav font size */

$webnus_body_font_size = $webnus_options->webnus_body_font_size(); 
if( !empty($webnus_body_font_size) )
{
	
	echo "body { font-size:{$webnus_body_font_size};}\n";
	
}


$webnus_body_line_height = $webnus_options->webnus_body_line_height(); 
if( !empty($webnus_body_line_height) )
{
	
	echo "body { line-height:{$webnus_body_line_height}; }\n";
	
}
$webnus_body_font_wieght = $webnus_options->webnus_body_font_wieght(); 
if( !empty($webnus_body_font_wieght) )
{
	
	echo "body { font-weight:{$webnus_body_font_wieght}; }\n";
	
}
$webnus_body_font_color = $webnus_options->webnus_body_font_color(); 
if( !empty($webnus_body_font_color) )
{
	
	echo "body { color:{$webnus_body_font_color}; }\n";
	
}
$webnus_topnav_font_size = $webnus_options->webnus_topnav_font_size(); 
if( !empty($webnus_topnav_font_size) )
{
	
	echo "ul#nav * { font-size:{$webnus_topnav_font_size}; }\n";
	
}
$webnus_topnav_letter_spacing = $webnus_options->webnus_topnav_letter_spacing(); 
if( !empty($webnus_topnav_letter_spacing) )
{
	
	echo "ul#nav * { letter-spacing:{$webnus_topnav_letter_spacing}; }\n";
	
}
$webnus_topnav_line_height = $webnus_options->webnus_topnav_line_height(); 
if( !empty($webnus_topnav_line_height) )
{
	
	echo "ul#nav * { line-height:{$webnus_topnav_line_height}; }\n";
	
}
$webnus_topnav_font_wieght = $webnus_options->webnus_topnav_font_wieght(); 
if( !empty($webnus_topnav_font_wieght) )
{
	
	echo "ul#nav * { font-weight:{$webnus_topnav_font_wieght}; }\n";
	
}
$webnus_topnav_font_color = $webnus_options->webnus_topnav_font_color(); 
if( !empty($webnus_topnav_font_color) )
{
	
	echo "ul#nav * { color:{$webnus_topnav_font_color}; }\n";
	
}
$webnus_h1_font_size = $webnus_options->webnus_h1_font_size(); 
if( !empty($webnus_h1_font_size) )
{
	
	echo "h1 { font-size:{$webnus_h1_font_size}; }\n";
	
}
$webnus_h1_letter_spacing = $webnus_options->webnus_h1_letter_spacing(); 
if( !empty($webnus_h1_letter_spacing) )
{
	
	echo "h1 { letter-spacing:{$webnus_h1_letter_spacing}; }\n";
	
}
$webnus_h1_line_height = $webnus_options->webnus_h1_line_height(); 
if( !empty($webnus_h1_line_height) )
{
	
	echo "h1 { line-height:{$webnus_h1_line_height}; }\n";
	
}
$webnus_h1_font_wieght = $webnus_options->webnus_h1_font_wieght(); 
if( !empty($webnus_h1_font_wieght) )
{
	
	echo "h1 { font-weight:{$webnus_h1_font_wieght}; }\n";
	
}
$webnus_h1_font_color = $webnus_options->webnus_h1_font_color(); 
if( !empty($webnus_h1_font_color) )
{
	
	echo "h1 { color:{$webnus_h1_font_color}; }\n";
	
}
$webnus_h1_font_color = $webnus_options->webnus_h1_font_color(); 
if( !empty($webnus_h1_font_color) )
{
	
	echo "h1 { color:{$webnus_h1_font_color}; }\n";
	
}


/*  H2 */

$webnus_h2_font_size = $webnus_options->webnus_h2_font_size(); 
if( !empty($webnus_h2_font_size) )
{
	
	echo "h2 { font-size:{$webnus_h2_font_size}; }\n";
	
}
$webnus_h2_letter_spacing = $webnus_options->webnus_h2_letter_spacing(); 
if( !empty($webnus_h2_letter_spacing) )
{
	
	echo "h2 { letter-spacing:{$webnus_h2_letter_spacing}; }\n";
	
}
$webnus_h2_line_height = $webnus_options->webnus_h2_line_height(); 
if( !empty($webnus_h2_line_height) )
{
	
	echo "h2 { line-height:{$webnus_h2_line_height}; }\n";
	
}
$webnus_h2_font_wieght = $webnus_options->webnus_h2_font_wieght(); 
if( !empty($webnus_h2_font_wieght) )
{
	
	echo "h2 { font-weight:{$webnus_h2_font_wieght}; }\n";
	
}
$webnus_h2_font_color = $webnus_options->webnus_h2_font_color(); 
if( !empty($webnus_h2_font_color) )
{
	
	echo "h2 { color:{$webnus_h2_font_color}; }\n";
	
}
$webnus_h2_font_color = $webnus_options->webnus_h2_font_color(); 
if( !empty($webnus_h2_font_color) )
{
	
	echo "h2 { color:{$webnus_h2_font_color}; }\n";
	
}

/*  H3 */

$webnus_h3_font_size = $webnus_options->webnus_h3_font_size(); 
if( !empty($webnus_h3_font_size) )
{
	
	echo "h3 { font-size:{$webnus_h3_font_size}; }\n";
	
}
$webnus_h3_letter_spacing = $webnus_options->webnus_h3_letter_spacing(); 
if( !empty($webnus_h3_letter_spacing) )
{
	
	echo "h3 { letter-spacing:{$webnus_h3_letter_spacing}; }\n";
	
}
$webnus_h3_line_height = $webnus_options->webnus_h3_line_height(); 
if( !empty($webnus_h3_line_height) )
{
	
	echo "h3 { line-height:{$webnus_h3_line_height}; }\n";
	
}
$webnus_h3_font_wieght = $webnus_options->webnus_h3_font_wieght(); 
if( !empty($webnus_h3_font_wieght) )
{
	
	echo "h3 { font-weight:{$webnus_h3_font_wieght}; }\n";
	
}
$webnus_h3_font_color = $webnus_options->webnus_h3_font_color(); 
if( !empty($webnus_h3_font_color) )
{
	
	echo "h3 { color:{$webnus_h3_font_color}; }\n";
	
}
$webnus_h3_font_color = $webnus_options->webnus_h3_font_color(); 
if( !empty($webnus_h3_font_color) )
{
	
	echo "h3 { color:{$webnus_h3_font_color}; }\n";
	
}


/*  H4 */

$webnus_h4_font_size = $webnus_options->webnus_h4_font_size(); 
if( !empty($webnus_h4_font_size) )
{
	
	echo "h4 { font-size:{$webnus_h4_font_size}; }\n";
	
}
$webnus_h4_letter_spacing = $webnus_options->webnus_h4_letter_spacing(); 
if( !empty($webnus_h4_letter_spacing) )
{
	
	echo "h4 { letter-spacing:{$webnus_h4_letter_spacing}; }\n";
	
}
$webnus_h4_line_height = $webnus_options->webnus_h4_line_height(); 
if( !empty($webnus_h4_line_height) )
{
	
	echo "h4 { line-height:{$webnus_h4_line_height}; }\n";
	
}
$webnus_h4_font_wieght = $webnus_options->webnus_h4_font_wieght(); 
if( !empty($webnus_h4_font_wieght) )
{
	
	echo "h4 { font-weight:{$webnus_h4_font_wieght}; }\n";
	
}
$webnus_h4_font_color = $webnus_options->webnus_h4_font_color(); 
if( !empty($webnus_h4_font_color) )
{
	
	echo "h4 { color:{$webnus_h4_font_color}; }\n";
	
}
$webnus_h4_font_color = $webnus_options->webnus_h4_font_color(); 
if( !empty($webnus_h4_font_color) )
{
	
	echo "h4 { color:{$webnus_h4_font_color}; }\n";
	
}


/*  H5 */

$webnus_h5_font_size = $webnus_options->webnus_h5_font_size(); 
if( !empty($webnus_h5_font_size) )
{
	
	echo "h5 { font-size:{$webnus_h5_font_size}; }\n";
	
}
$webnus_h5_letter_spacing = $webnus_options->webnus_h5_letter_spacing(); 
if( !empty($webnus_h5_letter_spacing) )
{
	
	echo "h5 { letter-spacing:{$webnus_h5_letter_spacing}; }\n";
	
}
$webnus_h5_line_height = $webnus_options->webnus_h5_line_height(); 
if( !empty($webnus_h5_line_height) )
{
	
	echo "h5 { line-height:{$webnus_h5_line_height}; }\n";
	
}
$webnus_h5_font_wieght = $webnus_options->webnus_h5_font_wieght(); 
if( !empty($webnus_h5_font_wieght) )
{
	
	echo "h5 { font-weight:{$webnus_h5_font_wieght}; }\n";
	
}
$webnus_h5_font_color = $webnus_options->webnus_h5_font_color(); 
if( !empty($webnus_h5_font_color) )
{
	
	echo "h5 { color:{$webnus_h5_font_color}; }\n";
	
}
$webnus_h5_font_color = $webnus_options->webnus_h5_font_color(); 
if( !empty($webnus_h5_font_color) )
{
	
	echo "h5 { color:{$webnus_h5_font_color}; }\n";
	
}


/*  H6 */

$webnus_h6_font_size = $webnus_options->webnus_h6_font_size(); 
if( !empty($webnus_h6_font_size) )
{
	
	echo "h6 { font-size:{$webnus_h6_font_size}; }\n";
	
}
$webnus_h6_letter_spacing = $webnus_options->webnus_h6_letter_spacing(); 
if( !empty($webnus_h6_letter_spacing) )
{
	
	echo "h6 { letter-spacing:{$webnus_h6_letter_spacing}; }\n";
	
}
$webnus_h6_line_height = $webnus_options->webnus_h6_line_height(); 
if( !empty($webnus_h6_line_height) )
{
	
	echo "h6 { line-height:{$webnus_h6_line_height}; }\n";
	
}
$webnus_h6_font_wieght = $webnus_options->webnus_h6_font_wieght(); 
if( !empty($webnus_h6_font_wieght) )
{
	
	echo "h6 { font-weight:{$webnus_h6_font_wieght}; }\n";
	
}
$webnus_h6_font_color = $webnus_options->webnus_h6_font_color(); 
if( !empty($webnus_h6_font_color) )
{
	
	echo "h6 { color:{$webnus_h6_font_color}; }\n";
	
}
$webnus_h6_font_color = $webnus_options->webnus_h6_font_color(); 
if( !empty($webnus_h6_font_color) )
{
	
	echo "h6 { color:{$webnus_h6_font_color}; }\n";
	
}











/*
 * Color Skin Style Generator
 */

 /* == Menu Colors ------------------ */
if(isset($thm_options['webnus_menu_link_color']) && $thm_options['webnus_menu_link_color']!='')
{
	echo "#nav a { color:{$thm_options['webnus_menu_link_color']};}\n\n";
}
if(isset($thm_options['webnus_menu_link_background_color']) && $thm_options['webnus_menu_link_background_color']!='')
{
	echo "#nav a { background-color:{$thm_options['webnus_menu_link_background_color']};}\n\n";
}

if(isset($thm_options['webnus_menu_current_item_border_item_color']) && $thm_options['webnus_menu_current_item_border_item_color']!='')
{
	echo "#nav > li.current:after {background:{$thm_options['webnus_menu_current_item_border_item_color']};}\n";
}

if(isset($thm_options['webnus_menu_top_link_hover_color']) && $thm_options['webnus_menu_top_link_hover_color']!='')
{
	echo "#nav li:hover > a { color:{$thm_options['webnus_menu_top_link_hover_color']}; }";
}
if(isset($thm_options['webnus_menu_top_link_hover_background_color']) && $thm_options['webnus_menu_top_link_hover_background_color']!='')
{
	echo "#nav li:hover > a { background-color:{$thm_options['webnus_menu_top_link_hover_background_color']};}\n";
}
//submenu
if(isset($thm_options['webnus_submenu_link_hover_color']) && $thm_options['webnus_submenu_link_hover_color']!='')
{
	echo "#nav ul li a:hover, #nav li.current ul li a:hover, .nav-wrap2 #nav ul li a:hover, .nav-wrap2.darknavi #nav ul li a:hover, #nav ul li.current > a , #nav ul li:hover > a { color:{$thm_options['webnus_submenu_link_hover_color']};  }";
}
if(isset($thm_options['webnus_submenu_link_hover_background_color']) && $thm_options['webnus_submenu_link_hover_background_color']!='')
{
	echo "#nav ul li a:hover, #nav li.current ul li a:hover, .nav-wrap2 #nav ul li a:hover, .nav-wrap2.darknavi #nav ul li a:hover, #nav ul li.current > a , #nav ul li:hover > a { background-color:{$thm_options['webnus_submenu_link_hover_background_color']}; }";
}






/* == Icon Box Colors---------------------- */



/* iconbox 0 icon color  */
if(isset($thm_options['webnus_iconbox0_icon_color']) && $thm_options['webnus_iconbox0_icon_color']!='')
{
	echo ".icon-box i { color:{$thm_options['webnus_iconbox0_icon_color']};}\n";
}
if(isset($thm_options['webnus_iconbox0_background_icon_color']) && $thm_options['webnus_iconbox0_background_icon_color']!='')
{
	echo ".icon-box i { background-color:{$thm_options['webnus_iconbox0_background_icon_color']};}\n";
}



/* iconbox 0 icon hover color  */

if(isset($thm_options['webnus_iconbox0_hover_color']) && $thm_options['webnus_iconbox0_hover_color']!='')
{
	echo ".icon-box:hover i { color:{$thm_options['webnus_iconbox0_hover_color']};}\n";
}
if(isset($thm_options['webnus_iconbox0_hover_background_color']) && $thm_options['webnus_iconbox0_hover_background_color']!='')
{
	echo ".icon-box:hover i { background-color:{$thm_options['webnus_iconbox0_hover_background_color']};}\n";
}




/* iconbox 1 icon color + icon background color */
if(isset($thm_options['webnus_iconbox1_icon_color']) && $thm_options['webnus_iconbox1_icon_color']!='')
{
	echo ".icon-box1 i { color:{$thm_options['webnus_iconbox1_icon_color']};}\n";
}
if(isset($thm_options['webnus_iconbox1_background_icon_color']) && $thm_options['webnus_iconbox1_background_icon_color']!='')
{
	echo ".icon-box1 i { background-color:{$thm_options['webnus_iconbox1_background_icon_color']};}\n";
}
/* iconbox 1 icon color + icon background color */

if(isset($thm_options['webnus_iconbox1_hover_color']) && $thm_options['webnus_iconbox1_hover_color']!='')
{
	echo ".icon-box1:hover i { color:{$thm_options['webnus_iconbox1_hover_color']}; }";
}
if(isset($thm_options['webnus_iconbox1_hover_background_color']) && $thm_options['webnus_iconbox1_hover_background_color']!='')
{
	echo ".icon-box1:hover i { background-color:{$thm_options['webnus_iconbox1_hover_background_color']}; }";
}






/* iconbox 2 icon color  */
if(isset($thm_options['webnus_iconbox2_icon_color']) && $thm_options['webnus_iconbox2_icon_color']!='')
{
	echo ".icon-box2 i { color:{$thm_options['webnus_iconbox2_icon_color']};}\n";
}
/* iconbox 2 icon hover color  */
if(isset($thm_options['webnus_iconbox2_hover_color']) && $thm_options['webnus_iconbox2_hover_color']!='')
{
	echo ".icon-box2:hover i { color:{$thm_options['webnus_iconbox2_hover_color']};}\n";
}




/* iconbox 3 icon color  */
if(isset($thm_options['webnus_iconbox3_icon_color']) && $thm_options['webnus_iconbox3_icon_color']!='')
{
	echo ".icon-box3 i { color:{$thm_options['webnus_iconbox3_icon_color']};}\n";
}
if(isset($thm_options['webnus_iconbox3_hover_color']) && $thm_options['webnus_iconbox3_hover_color']!='')
{
	echo ".icon-box3:hover i { color:{$thm_options['webnus_iconbox3_hover_color']};}\n";
}






/* iconbox 4 icon color + icon background color */
if(isset($thm_options['webnus_iconbox4_icon_color']) && $thm_options['webnus_iconbox4_icon_color']!='')
{
	echo ".icon-box4 i { color:{$thm_options['webnus_iconbox4_icon_color']};}\n";
}
if(isset($thm_options['webnus_iconbox4_background_icon_color']) && $thm_options['webnus_iconbox4_background_icon_color']!='')
{
	echo ".icon-box4 i { background-color:{$thm_options['webnus_iconbox4_background_icon_color']};}\n";
}
/* iconbox 4 icon hover color + icon background hover color */
if(isset($thm_options['webnus_iconbox4_hover_color']) && $thm_options['webnus_iconbox4_hover_color']!='')
{
	echo ".icon-box4:hover i { color:{$thm_options['webnus_iconbox4_hover_color']};}\n";
}
if(isset($thm_options['webnus_iconbox4_hover_background_color']) && $thm_options['webnus_iconbox4_hover_background_color']!='')
{
	echo ".icon-box4:hover i { background-color:{$thm_options['webnus_iconbox4_hover_background_color']};}\n";
}






/* iconbox 5 icon color + icon background color */
if(isset($thm_options['webnus_iconbox5_icon_color']) && $thm_options['webnus_iconbox5_icon_color']!='')
{
	echo ".icon-box5 i { color:{$thm_options['webnus_iconbox5_icon_color']}; }\n";
}

if(isset($thm_options['webnus_iconbox5_background_icon_color']) && $thm_options['webnus_iconbox5_background_icon_color']!='')
{
	echo ".icon-box5 i { background-color:{$thm_options['webnus_iconbox5_background_icon_color']}; }\n";
}
/* iconbox 5 icon hover color + icon background hover color */

if(isset($thm_options['webnus_iconbox5_hover_color']) && $thm_options['webnus_iconbox5_hover_color']!='')
{
	echo ".icon-box5:hover i { color:{$thm_options['webnus_iconbox5_hover_color']};}\n";
}
if(isset($thm_options['webnus_iconbox5_hover_background_color']) && $thm_options['webnus_iconbox5_hover_background_color']!='')
{
	echo ".icon-box5:hover i { background-color:{$thm_options['webnus_iconbox5_hover_background_color']};}\n";
}





/* iconbox 6 icon color + icon background color */
if(isset($thm_options['webnus_iconbox6_icon_color']) && $thm_options['webnus_iconbox6_icon_color']!='')
{
	echo ".icon-box6 i { color:{$thm_options['webnus_iconbox6_icon_color']};}\n";
}
if(isset($thm_options['webnus_iconbox6_background_icon_color']) && $thm_options['webnus_iconbox6_background_icon_color']!='')
{
	echo ".icon-box6 i { background-color:{$thm_options['webnus_iconbox6_background_icon_color']};}\n";
}
/* iconbox 6 icon hover color + icon background hover color */
if(isset($thm_options['webnus_iconbox6_hover_color']) && $thm_options['webnus_iconbox6_hover_color']!='')
{
	echo ".icon-box6:hover i { color:{$thm_options['webnus_iconbox6_hover_color']};}\n";
}
if(isset($thm_options['webnus_iconbox6_hover_background_color']) && $thm_options['webnus_iconbox6_hover_background_color']!='')
{
	echo ".icon-box6:hover i { background-color:{$thm_options['webnus_iconbox6_hover_background_color']};}\n";
}



/* iconbox 7 icon color + icon background color */
if(isset($thm_options['webnus_iconbox7_icon_color']) && $thm_options['webnus_iconbox7_icon_color']!='')
{
	echo ".icon-box7 i { color:{$thm_options['webnus_iconbox7_icon_color']};}\n";
}
if(isset($thm_options['webnus_iconbox7_background_icon_color']) && $thm_options['webnus_iconbox7_background_icon_color']!='')
{
	echo ".icon-box7 i { background-color:{$thm_options['webnus_iconbox7_background_icon_color']};}\n";
}
/* iconbox 6 icon hover color + icon background hover color */
if(isset($thm_options['webnus_iconbox7_hover_color']) && $thm_options['webnus_iconbox7_hover_color']!='')
{
	echo ".icon-box7:hover i { color:{$thm_options['webnus_iconbox7_hover_color']};}\n";
}
if(isset($thm_options['webnus_iconbox7_hover_background_color']) && $thm_options['webnus_iconbox7_hover_background_color']!='')
{
	echo ".icon-box7:hover i { background-color:{$thm_options['webnus_iconbox7_hover_background_color']};}\n";
}




/* == Portfolio Colors---------------------- */


/* portfolio filter links color + border color */
if(isset($thm_options['webnus_portfolio_filter_links_color']) && $thm_options['webnus_portfolio_filter_links_color']!='')
{
	echo "nav.primary .portfolioFilters a { color:{$thm_options['webnus_portfolio_filter_links_color']};}\n";
}
if(isset($thm_options['webnus_portfolio_filter_links_border_color']) && $thm_options['webnus_portfolio_filter_links_border_color']!='')
{
	echo "nav.primary .portfolioFilters a { border-color:{$thm_options['webnus_portfolio_filter_links_border_color']};}\n";
}
/* portfolio filter links hover color + border color */

if(isset($thm_options['webnus_portfolio_filter_links_hover_color']) && $thm_options['webnus_portfolio_filter_links_hover_color']!='')
{
	echo "nav.primary .portfolioFilters a:hover {  color:{$thm_options['webnus_portfolio_filter_links_hover_color']};}\n";
}
if(isset($thm_options['webnus_portfolio_filter_links_hover_border_color']) && $thm_options['webnus_portfolio_filter_links_hover_border_color']!='')
{
	echo "nav.primary .portfolioFilters a:hover {  border-color:{$thm_options['webnus_portfolio_filter_links_hover_border_color']};}\n";
}

/* portfolio filter links color selected + border color */
if(isset($thm_options['webnus_portfolio_filter_selected_links_color']) && $thm_options['webnus_portfolio_filter_selected_links_color']!='')
{
	echo "nav.primary .portfolioFilters a.selected, nav.primary ul li a:active {  color:{$thm_options['webnus_portfolio_filter_selected_links_color']}; }\n";
}

if(isset($thm_options['webnus_portfolio_filter_selected_links_border_color']) && $thm_options['webnus_portfolio_filter_selected_links_border_color']!='')
{
	echo "nav.primary .portfolioFilters a.selected, nav.primary ul li a:active {  border-color:{$thm_options['webnus_portfolio_filter_selected_links_border_color']}; }\n";
}



/* portfolio item zoom link color */

if(isset($thm_options['webnus_portfolio_item_zoom_link_color']) && $thm_options['webnus_portfolio_item_zoom_link_color']!='')
{
	echo ".zoomex2 a { color:{$thm_options['webnus_portfolio_item_zoom_link_color']};}\n";
}
/* portfolio item zoom link border color */
if(isset($thm_options['webnus_portfolio_item_zoom_link_border_color']) && $thm_options['webnus_portfolio_item_zoom_link_border_color']!='')
{
	echo ".zoomex2 a i { border-color:{$thm_options['webnus_portfolio_item_zoom_link_border_color']};}\n";
}


/* portfolio item zoom link hover color + border color */
if(isset($thm_options['webnus_portfolio_item_zoom_link_hover_color']) && $thm_options['webnus_portfolio_item_zoom_link_hover_color']!='')
{
	echo ".zoomex2 a:hover i { color:{$thm_options['webnus_portfolio_item_zoom_link_hover_color']};  }\n";
}
if(isset($thm_options['webnus_portfolio_item_zoom_link_hover_border_color']) && $thm_options['webnus_portfolio_item_zoom_link_hover_border_color']!='')
{
	echo ".zoomex2 a:hover i { border-color:{$thm_options['webnus_portfolio_item_zoom_link_hover_border_color']};  }\n";
}







/* == Learn more link Colors----------------------------- */

/* learn more link color */

if(isset($thm_options['webnus_learnmore_link_color']) && $thm_options['webnus_learnmore_link_color']!='')
{
	echo "a.magicmore { color:{$thm_options['webnus_learnmore_link_color']};}\n";
}
/* learn more hover link color */

if(isset($thm_options['webnus_learnmore_hover_link_color']) && $thm_options['webnus_learnmore_hover_link_color']!='')
{
	echo "a.magicmore:hover { color:{$thm_options['webnus_learnmore_hover_link_color']};}\n";
}






/* == Our Process Icon Colors------------------------------ */

/* our process icon color + border color += background color */
if(isset($thm_options['webnus_ourprocess_icon_color']) && $thm_options['webnus_ourprocess_icon_color']!='')
{
	echo ".our-process-item i { color:{$thm_options['webnus_ourprocess_icon_color']};}\n";
}

if(isset($thm_options['webnus_ourprocess_border_color']) && $thm_options['webnus_ourprocess_border_color']!='')
{
	echo ".our-process-item i { border-color:{$thm_options['webnus_ourprocess_border_color']};}\n";
}

if(isset($thm_options['webnus_ourprocess_background_color']) && $thm_options['webnus_ourprocess_background_color']!='')
{
	echo ".our-process-item i { background-color:{$thm_options['webnus_ourprocess_background_color']};} \n";
}

/* our process icon hover color + border color += background color */

if(isset($thm_options['webnus_ourprocess_hover_icon_color']) && $thm_options['webnus_ourprocess_hover_icon_color']!='')
{
	echo ".our-process-item:hover i { color:{$thm_options['webnus_ourprocess_hover_icon_color']};  } \n";
}
if(isset($thm_options['webnus_ourprocess_hover_border_color']) && $thm_options['webnus_ourprocess_hover_border_color']!='')
{
	echo ".our-process-item:hover i { border-color:{$thm_options['webnus_ourprocess_hover_border_color']};  } \n";
}
if(isset($thm_options['webnus_ourprocess_hover_background_color']) && $thm_options['webnus_ourprocess_hover_background_color']!='')
{
	echo ".our-process-item:hover i { background-color:{$thm_options['webnus_ourprocess_hover_background_color']};  } \n";
}






/* == Our Team Image Border Color---------------------------------- */

/* our team hover image border color */

if(isset($thm_options['webnus_ourteam_hover_image_border_color']) && $thm_options['webnus_ourteam_hover_image_border_color']!='')
{
	echo ".our-team:hover img { border-color:{$thm_options['webnus_ourteam_hover_image_border_color']};}\n";
}

/* == Our Clients Icon Hover Color----------------------------------- */

if(isset($thm_options['webnus_ourclients_hover_icon_color']) && $thm_options['webnus_ourclients_hover_icon_color']!='')
{
	echo ".our-clients-wrap .jcarousel-next:hover, .our-clients-wrap .jcarousel-next:active, .our-clients-wrap .jcarousel-prev:hover, .our-clients-wrap .jcarousel-prev:active {color:{$thm_options['webnus_ourclients_hover_icon_color']}; }\n";
}

if(isset($thm_options['webnus_ourclients_hover_icon_border_color']) && $thm_options['webnus_ourclients_hover_icon_border_color']!='')
{
	echo ".our-clients-wrap .jcarousel-next:hover, .our-clients-wrap .jcarousel-next:active, .our-clients-wrap .jcarousel-prev:hover, .our-clients-wrap .jcarousel-prev:active {border-color:{$thm_options['webnus_ourclients_hover_icon_border_color']}; }\n";
}






/* == Accordion Title Color---------------------------- */

/* caccordion title active and hover color */

if(isset($thm_options['webnus_accordion_active_color']) && $thm_options['webnus_accordion_active_color']!='')
{
	echo ".acc-trigger a:hover, .acc-trigger.active a, .acc-trigger.active a:hover { color:{$thm_options['webnus_accordion_active_color']}; }\n";
}





/* == Subtitle3 Border Bottom Color------------------------------------ */
/* subtitle3 border bottom color */

if(isset($thm_options['webnus_subtitle3_border_bottom_color']) && $thm_options['webnus_subtitle3_border_bottom_color']!='')
{
	echo "h6.h-sub-content { border-bottom-color:{$thm_options['webnus_subtitle3_border_bottom_color']};}\n";
}












/* == Blog Posts Link Color---------------------------- */
/* latest from blog link hover color */


if(isset($thm_options['webnus_latestfromblog_link_hover_color']) && $thm_options['webnus_latestfromblog_link_hover_color']!='')
{
	echo ".blog-line:hover h4 a { color:{$thm_options['webnus_latestfromblog_link_hover_color']}; }\n";
}
/* latest from blog category link color */
if(isset($thm_options['webnus_latestfromblog_category_link_color']) && $thm_options['webnus_latestfromblog_category_link_color']!='')
{
	echo ".blog-line p.blog-cat a { color:{$thm_options['webnus_latestfromblog_category_link_color']}; }\n";
}

/* blog post link hover color */
if(isset($thm_options['webnus_blogpost_link_hover_color']) && $thm_options['webnus_blogpost_link_hover_color']!='')
{
	echo ".blog-post a:hover { color:{$thm_options['webnus_blogpost_link_hover_color']}; }\n";
}


/* == Flex Slider Next & Previous Button Hover Background Color---------------------------------------------------------------- */

/* flex slider next & previous button hover background color */


if(isset($thm_options['webnus_flexslider_next_previous_button_hover_background_color']) && $thm_options['webnus_flexslider_next_previous_button_hover_background_color']!='')
{
	echo ".flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover { background-color:{$thm_options['webnus_flexslider_next_previous_button_hover_background_color']};}\n";
}

/*
 * Blog Loop And Single Blog Styles
 * 
 */
/* All Posts Title Font-family */
$webnus_blog_title_font_family = $webnus_options->webnus_blog_title_font_family(); 
if( !empty($webnus_blog_title_font_family) )
{
	echo ".blog-post h4, .blog-post h1, .blog-post h3, .blog-line h4, .blog-single-post h1 { font-family:$webnus_blog_title_font_family;}\n";
}

/* Blog Loop Title font-size */
$webnus_blog_loop_title_font_size = $webnus_options->webnus_blog_loop_title_font_size(); 
if( !empty($webnus_blog_loop_title_font_size) )
{
	echo ".blog-post h3 { font-size:{$webnus_blog_loop_title_font_size};}\n";
}

/* Blog Loop Title line-height */
$webnus_blog_loop_title_line_height = $webnus_options->webnus_blog_loop_title_line_height(); 
if( !empty($webnus_blog_loop_title_line_height) )
{
	echo ".blog-post h3 { line-height:{$webnus_blog_loop_title_line_height};}\n";
}

/* Blog Loop Title font-wight */
$webnus_blog_loop_title_font_weight = $webnus_options->webnus_blog_loop_title_font_weight(); 
if( !empty($webnus_blog_loop_title_font_weight) )
{
	echo ".blog-post h3 { font-weight:{$webnus_blog_loop_title_font_weight};}\n";
}

/* Blog Loop Title letter-spacing */
$webnus_blog_loop_title_letter_spacing = $webnus_options->webnus_blog_loop_title_letter_spacing(); 
if( !empty($webnus_blog_loop_title_letter_spacing) )
{
	echo ".blog-post h3 { letter-spacing:{$webnus_blog_loop_title_letter_spacing};}\n";
}

/* Blog Loop Title color */
$webnus_blog_loop_title_color = $webnus_options->webnus_blog_loop_title_color(); 
if( !empty($webnus_blog_loop_title_color) )
{
	echo ".blog-post h3, .blog-post h3 a { color:$webnus_blog_loop_title_color;}\n";
}


/* Blog Loop Title hover color */
$webnus_blog_loop_title_hover_color = $webnus_options->webnus_blog_loop_title_hover_color(); 
if( !empty($webnus_blog_loop_title_hover_color) )
{
	echo ".blog-post h3 a:hover { color:$webnus_blog_loop_title_hover_color;}\n";
}

/***** Blog Single Title Font Options *****/

/* Single post Title font-size */

$webnus_blog_single_post_title_font_size = $webnus_options->webnus_blog_single_post_title_font_size(); 
if( !empty($webnus_blog_single_post_title_font_size) )
{
	echo ".blog-single-post h1 { font-size:{$webnus_blog_single_post_title_font_size};}\n";
}


/* Single post Title line-height */

$webnus_blog_single_title_line_height = $webnus_options->webnus_blog_single_title_line_height(); 
if( !empty($webnus_blog_single_title_line_height) )
{
	echo ".blog-single-post h1 { line-height:{$webnus_blog_single_title_line_height};}\n";
}


/* Single post Title font-wight */

$webnus_blog_single_title_font_weight = $webnus_options->webnus_blog_single_title_font_weight(); 
if( !empty($webnus_blog_single_title_font_weight) )
{
	echo ".blog-single-post h1 { font-weight:{$webnus_blog_single_title_font_weight};}\n";
}

/* Single post Title letter-spacing */

$webnus_blog_single_title_letter_spacing = $webnus_options->webnus_blog_single_title_letter_spacing(); 
if( !empty($webnus_blog_single_title_letter_spacing) )
{
	echo ".blog-single-post h1 { letter-spacing:{$webnus_blog_single_title_letter_spacing};}\n";
}


/* Single post Title color */

$webnus_blog_single_title_color = $webnus_options->webnus_blog_single_title_color(); 
if( !empty($webnus_blog_single_title_color) )
{
	echo ".blog-single-post h1 { color:$webnus_blog_single_title_color;}\n";
}




























?>
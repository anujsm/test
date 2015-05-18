<?php
GLOBAL $webnus_options;
?>
<?php if( $webnus_options->webnus_header1_sticky() ): ?>
<div id="sticker">
<?php endif; ?>
<header id="header" <?php

$menu_icon = $webnus_options->webnus_header_menu_icon();

if(!empty($menu_icon)) echo 'class="sm-rgt-mn"';


 ?>>
<div  class="container">
<div class="col-md-3 col-sm-3 logo-wrap">
<div class="logo"><a href="<?php echo home_url( '/' ); ?>">
<?php
$logo ='';
$logo_width = '';
$logo = !empty($logo) ? $logo : $webnus_options->webnus_logo();
$logo_width = !empty($logo_width)? $logo_width : $webnus_options->webnus_logo_width();

if(!empty($logo))
{
?>
<img src="<?php echo $logo; ?>" width="<?php  echo !empty($logo_width)?$logo_width:"150"; ?>" id="img-logo" alt="logo">
<?php 
}else{ ?>
<h5 id="site-title"><?php bloginfo( 'name' ); ?>
<small>
<?php 
                
	$slogan = $webnus_options->webnus_slogan();
   
	if( empty($slogan))
		bloginfo( 'description' );
	else
		echo $slogan;
                
                
?>
</small></h5>

<?php } ?>
</a></div></div>
<nav id="nav-wrap" class="nav-wrap1 col-md-9 col-sm-9">
		<?php 
		if($webnus_options->webnus_header_search_enable())
		{
		?>
		<div id="search-form">
			<form action="<?php echo home_url( '/' ); ?>" method="get">
				<input type="text" class="search-text-box" id="search-box" name="s">
			</form>
		</div>
		<?php } ?>
				<?php
					if ( has_nav_menu( 'header-menu' ) ) { 
						wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new description_walker()) );
					}
				?>
	</nav>
		<!-- /nav-wrap -->
</div>
<?php 
if($webnus_options->webnus_header_search_enable())
{
?>
<div id="search-form2">
<form action="<?php echo home_url( '/' ); ?>" method="get">
	<input name="s" type="text" class="search-text-box2">
</form>
</div>
<?php } ?>
</header>

<?php if( $webnus_options->webnus_header1_sticky() ): ?>
</div>
<?php endif; ?>
<!-- end-header -->

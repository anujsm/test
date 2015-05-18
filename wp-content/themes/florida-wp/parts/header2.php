<?php
GLOBAL $webnus_options;
?>

<header id="header"  <?php

$menu_icon = $webnus_options->webnus_header_menu_icon();

if(!empty($menu_icon)) echo 'class="sm-rgt-mn"';


 ?>>
	<div  class="container">
	 <div class="col-md-5 col-sm-5 logo-wrap">
		<div class="logo">
			<a href="<?php echo home_url( '/' ); ?>">
				<?php
					$logo = $webnus_options->webnus_logo();
					if(!empty($logo))
					{
						?>
						<img src="<?php echo $logo; ?>" width="<?php $logo_width = $webnus_options->webnus_logo_width(); echo !empty($logo_width)?$logo_width:"150"; ?>" id="img-logo" alt="logo">
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
			</a>
		</div></div>
		<?php
		$logo_rightside = $webnus_options->webnus_header_logo_rightside();
		if( 0 != $logo_rightside )
		{
			if( 1 == $logo_rightside )
			{
			?>
				<div class="col-md-7 col-sm-7 alignright">
					<hr class="vertical-space" />
					<form action="<?php echo home_url( '/' ); ?>" method="get">
						<input name="s" type="text" placeholder="<?php _e('Search...','WEBNUS_TEXT_DOMAIN') ?>" class="header-saerch" >
					</form>
					
				</div>
				
			<?php
			}elseif(2 == $logo_rightside)
			{
			?>
				<div class="col-md-7 col-sm-7 alignright"><hr class="vertical-space" /><h6><i class="icomoon-envelop-2"></i> <?php echo $webnus_options->webnus_header_email(); ?></h6> <h6><i class="icomoon-phone-2"></i> <?php echo $webnus_options->webnus_header_phone(); ?></h6></div>
		<?php 
			}
			elseif(3 == $logo_rightside)
			{ ?>
				<div class="col-md-7 col-sm-7 alignright"><hr class="vertical-space" /><?php dynamic_sidebar('header-advert'); ?></div>
			<?php }
		}
		?>
		
	</div>
	<hr class="vertical-space" />
	<nav id="nav-wrap" class="nav-wrap2 <?php 
		
		switch($webnus_options->webnus_header_menu_type()){
			case 3:
				echo 'darknavi';
				break;
			case 4:
				echo 'mn4';
				break;
			case 5:
				echo 'mn4 darknavi';
				break;
			default:
				echo '';
		}


	?>">
		<div class="container">	
			<?php
				if ( has_nav_menu( 'header-menu' ) ) { 
					wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'false', 'menu_id' => 'nav', 'depth' => '5', 'fallback_cb' => 'wp_page_menu', 'items_wrap' => '<ul id="%1$s">%3$s</ul>',  'walker' => new description_walker() ) );
				}
			?>
		</div>
	</nav>
			<!-- /nav-wrap -->
	
</header>

<!-- end-header -->

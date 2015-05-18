<?php

/*

Template Name: Contact Page

*/
get_header();

GLOBAL $webnus_options;

$last_time = get_the_time(' F Y');


GLOBAL $webnus_page_options_meta;

$meta = isset($webnus_page_options_meta)?$webnus_page_options_meta->the_meta():null;
if(!empty($meta)){
$show_titlebar =  isset($meta['webnus_page_options'][0]['show_page_title_bar'])?$meta['webnus_page_options'][0]['show_page_title_bar']:null;
$titlebar_bg =  isset($meta['webnus_page_options'][0]['title_background_color'])?$meta['webnus_page_options'][0]['title_background_color']:null;
$titlebar_fg =  isset($meta['webnus_page_options'][0]['title_text_color'])?$meta['webnus_page_options'][0]['title_text_color']:null;
$sidebar_pos =  isset($meta['webnus_page_options'][0]['sidebar_position'])?$meta['webnus_page_options'][0]['sidebar_position']:'right';
}
if($show_titlebar && ( 'show' == $show_titlebar)):
?>
<section id="headline" style="<?php

/// To change the title bar background color
if(!empty($titlebar_bg)) echo ' background-color:'.$titlebar_bg.';'; 
 
/// To change the title bar text color 


 ?>">
    <div class="container">
      <h3 style="<?php /* TEXT COLOR OF TITLE */ if(!empty($titlebar_fg)) echo ' color:'.$titlebar_fg.';';  ?>"><?php the_title(); ?></h3>
    </div>
</section>
<?php
endif;
?>
<section id="main-content" class="container">
<!-- Start Page Content -->
<hr class="vertical-space">

<hr class="vertical-space3">
<div class="col-md-5 contact-inf">
<h4><?php echo __('Contact Information:','WEBNUS_TEXT_DOMAIN') ?>:</h4>
<br />
<p><strong><?php _e('Address','WEBNUS_TEXT_DOMAIN') ?>:</strong></p>
<p>
<?php echo $webnus_options->webnus_contact_address(); ?></p>
<br />
<p><strong><?php _e('Phone','WEBNUS_TEXT_DOMAIN') ?>:</strong></p>
<p>
<?php echo $webnus_options->webnus_contact_phone(); ?><br />
</p>
<br />
<p><strong><?php _e('Email', 'WEBNUS_TEXT_DOMAIN'); ?>:</strong></p>
<p>
<?php echo $webnus_options->webnus_contact_email(); ?><br />
</p>
<br />
<hr class="boldbx">
<?php 
		  if( have_posts() ): while( have_posts() ): the_post();
			the_content(); 
		  endwhile;
		  endif;
?>
</div>

<div class="col-md-6 col-md-offset-1">
<div class="contact-form">
<div class="clr"></div><br />
<form action="#" method="post" class="frmContact">
<h5><?php _e('Whats your Name?', 'WEBNUS_TEXT_DOMAIN'); ?></h5>
<input name="txtName" type="text" class="txbx" value="<?php _e('Name', 'WEBNUS_TEXT_DOMAIN'); ?>" /><br />
<h5><?php _e('Whats your Email?','WEBNUS_TEXT_DOMAIN') ?></h5>
<input type="hidden" name="emailTo" value="<?php echo $webnus_options->webnus_contact_email(); ?>" />
<input name="txtEmail" type="text" class="txbx" value="<?php _e('Email','WEBNUS_TEXT_DOMAIN'); ?>" /><br />
<h5><?php _e('Email Subject?','WEBNUS_TEXT_DOMAIN'); ?></h5>
<input name="txtSubject" type="text" class="txbx" value="<?php _e('Subject ?','WEBNUS_TEXT_DOMAIN'); ?>" /><br />
<div class="erabox">
<h5><?php _e('Message to us','WEBNUS_TEXT_DOMAIN') ?></h5>
<textarea name="txtText" class="txbx era" ></textarea><br />
<button name="" type="button" class="sendbtn btnSend" ><?php _e('Send Message','WEBNUS_TEXT_DOMAIN') ?></button>

<div id="spanMessage">
</div>
</div>
</form>
</div><!-- end-contact-form  -->

</div>
<div class="white-space"></div>

<section class="col-md-12">
<div id="contact-map">
<?php 
echo $webnus_options->webnus_google_map();
?>

<!-- END-Google Map -->
</div><!-- END-contact Map -->
</section><!-- END-Google Map Section -->

<hr class="vertical-space3">
</section><!-- container -->
<?php get_footer(); ?>
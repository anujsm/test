<?php
header('Content-type: text/javascript');

/* Short and sweet */
define('WP_USE_THEMES', false);
require('../../../wp-blog-header.php');
?>
jQuery(document).ready(function(){
	jQuery("button.btnSend").click(function(){
	
	var form = jQuery(this).closest('form');
	
	jQuery.ajax({type:'POST', url: '<?php echo get_template_directory_uri(); ?>/inc/contactus/contact2.php', data:jQuery(form).serialize(), success: function(response) {
		 
		 if(parseInt(response)>0)
		   {
			 if(jQuery(form).find("#spanMessage").length)
			 jQuery(form).find("#spanMessage").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Well done!','WEBNUS_TEXT_DOMAIN') ?></strong> <?php _e('Your message has been sent.','WEBNUS_TEXT_DOMAIN') ?></div>');
			 else
			 alert('<?php _e('Well done! Your message has been sent','WEBNUS_TEXT_DOMAIN') ?>');
		   }
		   else{
			 if(jQuery(form).find("#spanMessage").length)
			 jQuery(form).find("#spanMessage").html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><?php _e('Error!','WEBNUS_TEXT_DOMAIN') ?> </strong> <?php _e('Somthing Wrong','WEBNUS_TEXT_DOMAIN') ?></div>');
			 else
			 alert('Somthing wrong!');
		   }   
			 
	}});
	});
	});

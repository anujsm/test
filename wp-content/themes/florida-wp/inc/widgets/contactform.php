<?php

include_once str_replace("\\","/",get_template_directory()). '/inc/helpers/woptions.php';

class WebnusContactForm extends WP_Widget{

	var $woptions;
	
	function __construct(){

		$params = array(
		'description'=> 'Webnus Contact Form',
		'name'=> 'Webnus-Contact Form'
		);
		
		
		
		$this->woptions = new webnus_options();
		//var_dump($this->woptions->webnus_contact_email());
		parent::__construct('WebnusContactForm', '', $params);

	}

	public function form($instance){


		extract($instance);
		
		?>
		<p>
		<label for="<?php echo $this->get_field_id('title') ?>">Title:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('title') ?>"
		name="<?php echo $this->get_field_name('title') ?>"
		value="<?php if( isset($title) )  echo esc_attr($title); ?>"
		/>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id('email') ?>">Delivery Email Address:</label>
		<input
		type="text"
		class="widefat"
		id="<?php echo $this->get_field_id('email') ?>"
		name="<?php echo $this->get_field_name('email') ?>"
		value="<?php if( !empty($email) )  echo esc_attr($email); 
		else 
		echo $this->woptions->webnus_contact_email();
		?>"
		/>
		</p>
		
		
		<?php 
	}
	
	
	public function widget($args, $instance){
		//36587311
		extract($args);
		extract($instance);
		?>
		<?php echo $before_widget; ?>
		<div class="contact-inf">
		<?php echo $before_title.$title.$after_title; ?>
			<form class="frmContact" action="#">
				<input type="hidden" name="emailTo" value="<?php echo $email; ?>"/>
				<input type="text" name="txtName" id="txtName" value="" placeholder="<?php _e('Your Name','WEBNUS_TEXT_DOMAIN'); ?>..."/>
				<input type="text" name="txtEmail" id="txtEmail" value="" placeholder="<?php _e('Your Email Address','WEBNUS_TEXT_DOMAIN'); ?>..."/>
				<textarea name="txtText" id="txtText" placeholder="<?php _e('Your Message','WEBNUS_TEXT_DOMAIN'); ?>..."></textarea>
				<button type="button" class="btnSend"><?php _e('SEND MESSAGE','WEBNUS_TEXT_DOMAIN'); ?></button>
				<div id="spanMessage"></div>
			</form>
		</div>

		<?php echo $after_widget; ?>
		  
		<?php 
	} 
}

add_action('widgets_init', 'register_webnuscontactform');

function register_webnuscontactform(){
	
	register_widget('WebnusContactForm');
	
}


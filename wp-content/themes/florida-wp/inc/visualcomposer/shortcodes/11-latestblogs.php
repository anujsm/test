<?php

vc_map( array(
        'name' =>'Webnus LatestBlogs',
        'base' => 'latestfromblog',
        "icon" => "webnus_latestfromblog",
		"description" => "Recent posts",
        'category' => __( 'Webnus Shortcodes', 'WEBNUS_TEXT_DOMAIN' ),
        'params' => array(
						array(
							'type' => 'textfield',
							'heading' => __( 'LatestBlog Title', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'title',
							'value' => 'Latest Blog',
							'description' => __( 'Enter the LatestBlog title', 'WEBNUS_TEXT_DOMAIN')
						),
						array(
							'type' => 'dropdown',
							'heading' => __( 'Show Title', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'show_title',
							'value' => array(
								
								'Show'=>'true',
								'Hide'=>'false',
								
							),
							'description' => __( 'Show Title Metadata', 'WEBNUS_TEXT_DOMAIN')
					  	),

						array(
							'type' => 'dropdown',
							'heading' => __( 'Show Category', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'show_category',
							'value' => array(
								
								'Show'=>'true',
								'Hide'=>'false',
								
							),
							'description' => __( 'Show Category Metadata', 'WEBNUS_TEXT_DOMAIN')
					  	),
						array(
							'type' => 'dropdown',
							'heading' => __( 'Show Date', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'show_date',
							'value' => array(
								
								'Show'=>'true',
								'Hide'=>'false',
								
							),
							'description' => __( 'Show Date Metadata', 'WEBNUS_TEXT_DOMAIN')
					  	),
						array(
							'type' => 'dropdown',
							'heading' => __( 'Show Author', 'WEBNUS_TEXT_DOMAIN' ),
							'param_name' => 'show_author',
							'value' => array(
								
								'Show'=>'true',
								'Hide'=>'false',
								
							),
							'description' => __( 'Show Author Metadata', 'WEBNUS_TEXT_DOMAIN')
					  	),
						
						
						
           
        ),
		
        
    ) );


?>
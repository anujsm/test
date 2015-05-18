<?php
function latestfromblog_shortcode($attributes, $content)
{
	extract(shortcode_atts(	array(
		'title'=>'Latest From Blog',
		'show_title'=>'true',
		'show_date'=>'true',
		'show_category'=>'true',
		'show_author'=>'true'
		
		), $attributes));
	ob_start();
	?>
	
		<!-- Latest-from-Blog-start -->
    	<div class="latest-f-blog clearfix">
    		<div class="col-md-12">
    			<div class="sub-content">
					<h6 class="h-sub-content"><?php echo $title; ?></h6>
				</div>
    		</div>
      		<?php
      		/*
			 *Begin of One Col 
			 */
      		
      		$wpbp = new WP_Query(array( 'post_type' => 'post','paged'=>1, 'posts_per_page' =>4 ) ); 
			$i = 0;
			$div_must_echo_first_time = 0;  
			if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
      		if( 0 == $i ) {
      		?>
      		<div class="col-md-7">
       		 	<article class="blog-post clearfix ">
       		 		<figure class="pad-r20">
       		 			<?php
						  echo '<a href="'. get_permalink() .'">';
						  $image = get_the_image( array( 'meta_key' => array( 'Thumbnail', 'Thumbnail' ), 'size' => 'latestfromblog' ,'echo'=>false) );
						 
						  if( !empty($image) ) 
						  	echo $image;
						  else 
						  	echo '<img src="'.get_template_directory_uri() . '/images/featured.jpg" />';
						  echo '</a>';
       		 			?>
       		 		</figure>
         	 		<?php if('true' == $show_date) { ?>
         	 		<div class="col-md-2">
            			<div class="blog-date-sec">
              				<h3><?php echo get_the_time('d'); ?></h3>
              				<span><?php echo get_the_time('M'); ?></span>
              			</div>
          			</div>
          			<?php } ?>
	          	<div class="col-md-10">
					<?php if('true' == $show_title){ ?>
	            	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	            	<?php } ?>
	              	<p class="blog-author">
	              		<?php if('true' == $show_author) { ?>
	              		<strong><?php _e('by','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_author(); ?>
	              		<?php } ?>
	              		<?php if('true' == $show_category){ ?>
	              		<strong><?php _e('in','WEBNUS_TEXT_DOMAIN'); ?></strong> <?php the_category(', ') ?>
	              		<?php } ?>
	              	</p>
	            <p class="blog-detail"><?php echo get_the_excerpt(); ?></p>
	            </div>
        </article>
      </div>
      <?php
       
      }else{
	 
      /*
	   * End of One Col
	   * 
	   */
      
      
      if( 0 == $div_must_echo_first_time ) echo '<div class="col-md-5">';
      ?>
	  <!-- latest-f-blog-line-start -->
	  
      	<article class="blog-line clearfix">
          	<a href="<?php the_permalink(); ?>" class="img-hover"><?php 
          		
						  
						  $image = 	get_the_image( array( 'meta_key' => array( 'Thumbnail', 'Thumbnail' ), 'size' => 'lfb_thumb' ,'echo'=>false) ); 
						 
						  if( !empty($image) ) 
						  	echo $image;
						  else 
						  	echo '<img src="'.get_template_directory_uri() . '/images/featured_140x110.jpg" />';
						  
          		          		
          	
          		
          	?></a>
			<?php if('true' == $show_category) { ?>
			<p class="blog-cat"><?php the_category(', '); ?></p>
			<?php } ?>
            <?php if('true' == $show_title) { ?>
            <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
            <?php } ?>

            	<p><?php if('true' == $show_date) echo get_the_time('d M Y'); ?> 
            	<?php if( ('true' == $show_date) &&  ('true' == $show_author)) { ?>
            	/
            	<?php } ?>
            	<?php if('true' == $show_author) {  ?>
            	<strong><?php _e('by', 'WEBNUS_TEXT_DOMAIN') ?></strong> <?php echo get_the_author(); ?>
            	<?php } ?></p>

        </article>
       
      <?php
      
		if( 0 == $div_must_echo_first_time ) echo '</div>';
		}
$i++; 
		endwhile; endif;
      ?>
    </div>	
	
	<?php
	$out = ob_get_contents();
	ob_end_clean();
	return $out;
	
}

add_shortcode('latestfromblog', 'latestfromblog_shortcode');
?>
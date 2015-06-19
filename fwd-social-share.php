<?php
 /*
Plugin Name: FWD Social Share WP Plugin
Plugin URI: http://freshwebdev.com
Description: A simple WordPress plugin to display social share button
Version: 1.0
Author: Alfareed Abdullah
Author URI: http://twitter.com/bimoweb2
License: GPL2
*/

add_action( 'admin_menu', 'fwdss_add_admin_menu' );
add_action( 'admin_init', 'fwdss_settings_init' );


function fwdss_add_admin_menu(  ) { 

	add_menu_page( 'FWD Social Share', 'FWD Social Share', 'manage_options', 'fwd_social_share', 'fwd_social_share_options_page' );

}


function fwdss_settings_init(  ) { 

	register_setting( 'pluginPage', 'fwdss_settings' );

	add_settings_section(
		'fwdss_pluginPage_section', 
		__( 'Easy and simple social share created by freshwebdev.com', 'fwdss' ), 
		'fwdss_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'fwdss_fb', 
		__( 'Show FB Button?', 'fwdss' ), 
		'fwdss_fb_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_twitter', 
		__( 'Show Twitter Button?', 'fwdss' ), 
		'fwdss_twitter_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_gp', 
		__( 'Show Google+ Button?', 'fwdss' ), 
		'fwdss_gp_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_pinterest', 
		__( 'Show Pinterest Button?', 'fwdss' ), 
		'fwdss_pinterest_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_linkedin', 
		__( 'Show Linkedin Button?', 'fwdss' ), 
		'fwdss_linkedin_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	/*add_settings_field( 
		'fwdss_buffer', 
		__( 'Show Bufferapp Button?', 'fwdss' ), 
		'fwdss_buffer_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);
	*/

	add_settings_field( 
		'fwdss_digg', 
		__( 'Show Digg Button', 'fwdss' ), 
		'fwdss_digg_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_tumblr', 
		__( 'Show Tumblr Button?', 'fwdss' ), 
		'fwdss_tumblr_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_reddit', 
		__( 'Show Reddit Button?', 'fwdss' ), 
		'fwdss_reddit_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_stumbleupon', 
		__( 'Show Stumbleupon Button?', 'fwdss' ), 
		'fwdss_stumbleupon_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_del', 
		__( 'Show Delicious Button?', 'fwdss' ), 
		'fwdss_del_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	/*add_settings_field( 
		'fwdss_ever', 
		__( 'Show Evernote Button?', 'fwdss' ), 
		'fwdss_ever_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);
	*/

	add_settings_field( 
		'fwdss_wp', 
		__( 'Show Wordpress Button?', 'fwdss' ), 
		'fwdss_wp_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);

	add_settings_field( 
		'fwdss_pocket', 
		__( 'Show Pocket Button?', 'fwdss' ), 
		'fwdss_pocket_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);
	
	add_settings_field( 
		'fwdss_action_text', 
		__( 'Action Text', 'fwdss' ), 
		'fwdss_action_text_render', 
		'pluginPage', 
		'fwdss_pluginPage_section' 
	);



}


function fwdss_fb_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_fb]' <?php checked( $options['fwdss_fb'], 1 ); ?> value='1'>
	<?php

}


function fwdss_twitter_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_twitter]' <?php checked( $options['fwdss_twitter'], 1 ); ?> value='1'>
	<?php

}


function fwdss_gp_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_gp]' <?php checked( $options['fwdss_gp'], 1 ); ?> value='1'>
	<?php

}


function fwdss_pinterest_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_pinterest]' <?php checked( $options['fwdss_pinterest'], 1 ); ?> value='1'>
	<?php

}


function fwdss_linkedin_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_linkedin]' <?php checked( $options['fwdss_linkedin'], 1 ); ?> value='1'>
	<?php

}



function fwdss_digg_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_digg]' <?php checked( $options['fwdss_digg'], 1 ); ?> value='1'>
	<?php

}


function fwdss_tumblr_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_tumblr]' <?php checked( $options['fwdss_tumblr'], 1 ); ?> value='1'>
	<?php

}


function fwdss_reddit_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_reddit]' <?php checked( $options['fwdss_reddit'], 1 ); ?> value='1'>
	<?php

}


function fwdss_stumbleupon_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_stumbleupon]' <?php checked( $options['fwdss_stumbleupon'], 1 ); ?> value='1'>
	<?php

}


function fwdss_del_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_del]' <?php checked( $options['fwdss_del'], 1 ); ?> value='1'>
	<?php

}





function fwdss_wp_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_wp]' <?php checked( $options['fwdss_wp'], 1 ); ?> value='1'>
	<?php

}


function fwdss_pocket_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<input type='checkbox' name='fwdss_settings[fwdss_pocket]' <?php checked( $options['fwdss_pocket'], 1 ); ?> value='1'>
	<?php

}

function fwdss_action_text_render(  ) { 

	$options = get_option( 'fwdss_settings' );
	?>
	<textarea cols='40' rows='5' name='fwdss_settings[fwdss_action_text]'> 
		<?php echo $options['fwdss_action_text']; ?>
 	</textarea>
	<?php

}





function fwdss_settings_section_callback(  ) { 

	echo __( 'Option for FWD Social Share', 'fwdss' );

}


function fwd_social_share_options_page() { 

	?>
	<form action='options.php' method='post'>
		
		<h2>FWD Social Share</h2>
		
		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>
		
	</form>
	<?php

}


function fwd_social_share(){
	global $post;
	$args = array(
										'post_type' => 'attachment',
										'numberposts' => -1,
										'post_status' => null,
										'post_parent' => $post->ID,
										'exclude'     => get_post_thumbnail_id()
									);
	
	$attachments = get_posts( $args );
	
	
 if ( $attachments ) {
										foreach ( $attachments as $attachment ) {
	
											$original = wp_get_attachment_image_src( $attachment->ID, 'full' );
	
										}
									}
 ?>

<?php
	 
	 
	$option = get_option('fwdss_settings');
	echo $option['fwdss_action_text'];
	?>
 <ul id="fwd-share-button">
	 <?php if ($option['fwdss_fb']==1){?><li><a target="_blank" rel="nofollow"  href="http://www.facebook.com/sharer.php?u=<?php echo  get_permalink();?>"><i class="icon-2x icon-facebook-sign"></i></a></li><?php }?>
	 <?php if ($option['fwdss_twitter']==1){?><li><a target="_blank" rel="nofollow"  href="https://twitter.com/share?url=<?php echo  get_permalink();?>&text=<?php echo  get_the_title();?>&via=fwd-social-share&hashtags="><i class="icon-2x icon-twitter-sign"></i></a></li><?php }?>
	 <?php if ($option['fwdss_gp']==1){?><li><a target="_blank" rel="nofollow"  href="https://plus.google.com/share?url=<?php echo  get_permalink();?>"><i class="icon-2x icon-googleplus-sign"></i></a></li><?php }?>
	 <?php if ($option['fwdss_pinterest']==1){?><li><a target="_blank" rel="nofollow"  href="https://pinterest.com/pin/create/bookmarklet/?media=<?php echo  $original[0];?>&url=<?php echo get_permalink();?>description=<?php echo get_the_title();?>"><i class="icon-2x icon-pinterest-sign"></i></a></li><?php }?>
	 <?php if ($option['fwdss_linkedin']==1){?><li><a target="_blank" rel="nofollow"  href="http://www.linkedin.com/shareArticle?url=<?php echo  get_permalink();?>&title=<?php echo  get_the_title();?>"><i class="icon-2x icon-linkedin-sign"></i></a></li><?php }?>
	<?php if ($option['fwdss_digg']==1){?><li><a target="_blank" rel="nofollow"  href="http://digg.com/submit?url=<?php echo  get_permalink();?>&title=<?php echo  get_the_title();?>"><i class="icon-2x icon-digg-sign"></i></a></a></li><?php }?>
	<?php if ($option['fwdss_tumblr']==1){?><li><a target="_blank" rel="nofollow"  href="http://www.tumblr.com/share/link?url=<?php echo  get_permalink();?>&name=<?php echo  get_the_title();?>"><i class="icon-2x icon-tumblr-sign"></i></a></a></li><?php }?>
	<?php if ($option['fwdss_reddit']==1){?><li><a target="_blank" rel="nofollow"  href="http://reddit.com/submit?url=<?php echo  get_permalink();?>&title=<?php echo  get_the_title();?>"><i class="icon-2x icon-reddit-sign"></i></a></a></li><?php }?>
	<?php if ($option['fwdss_stumbleupon']==1){?><li><a target="_blank" rel="nofollow"  href="http://www.stumbleupon.com/submit?url=<?php echo  get_permalink();?>&title=<?php echo  get_the_title();?>"><i class="icon-2x icon-stumbleupon-sign"></i></a></a></li><?php }?>
	<?php if ($option['fwdss_del']==1){?><li><a target="_blank" rel="nofollow"  href="https://delicious.com/save?v=5&provider=[provider]&noui&jump=close&url=<?php echo  get_permalink();?>&title=<?php echo  get_the_title();?>"><i class="icon-2x icon-delicious-sign"></i></a></a></li><?php }?>
	<?php if ($option['fwdss_wp']==1){?><li><a target="_blank" rel="nofollow"  href="http://wordpress.com/press-this.php?u=<?php echo  get_permalink();?>&t=<?php echo  get_the_title();?>&i=<?php echo $original[0];?>"><i class="icon-2x icon-wordpress-sign"></i></a></a></li><?php }?>
	<?php if ($option['fwdss_pocket']==1){?><li><a target="_blank" rel="nofollow"  href="https://getpocket.com/save?url=<?php echo  get_permalink();?>&title=<?php echo  get_the_title();?>"><i class="icon-2x icon-pocket-sign"></i></a></a></li><?php }?>
</ul>
<?php
}


function fwd_load_scripts() {
	
	wp_register_style( 'fwd-style', plugins_url('css/fwd-social-share-style.css', __FILE__) );
	wp_register_style( 'fwd-socialicious', plugins_url('socialicious/css/socialicious.css', __FILE__) );
	wp_enqueue_style( 'fwd-style' );
	wp_enqueue_style( 'fwd-socialicious' );
	}
add_action('wp_enqueue_scripts','fwd_load_scripts');

function fwd_social_share_short_code(){
 global $post;
	$args = array(
										'post_type' => 'attachment',
										'numberposts' => -1,
										'post_status' => null,
										'post_parent' => $post->ID,
										'exclude'     => get_post_thumbnail_id()
									);
	
	$attachments = get_posts( $args );
	
	
 if ( $attachments ) {
										foreach ( $attachments as $attachment ) {
	
											$original = wp_get_attachment_image_src( $attachment->ID, 'full' );
	
										}
									}
								$option = get_option('fwdss_settings');
								$output.='<div class="action_text">'.$option['fwdss_action_text'].'<br />';
								$output.='<ul id="fwd-share-button">';
								if ($option['fwdss_fb']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://www.facebook.com/sharer.php?u='.get_permalink().'"><i class="icon-2x icon-facebook-sign"></i></a></li>';
								}
								if ($option['fwdss_twitter']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="https://twitter.com/share?url='.get_permalink().'&text='.get_the_title().'&via=fwd-social-share&hashtags="><i class="icon-2x icon-twitter-sign"></i></a></li>';
								}
								if ($option['fwdss_gp']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="https://plus.google.com/share?url='.get_permalink().'"><i class="icon-2x icon-googleplus-sign"></i></a></li>';
								}
								if ($option['fwdss_pinterest']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="https://pinterest.com/pin/create/bookmarklet/?media='.$original[0].'&url='.get_permalink().'description='.get_the_title().'"><i class="icon-2x icon-pinterest-sign"></i></a></li>';
								}
								if ($option['fwdss_linkedin']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://www.linkedin.com/shareArticle?url='.get_permalink().'&title='.get_the_title().'"><i class="icon-2x icon-linkedin-sign"></i></a></li>';
								}
							
								if ($option['fwdss_digg']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://digg.com/submit?url='.get_permalink().'&title='.get_the_title().'"><i class="icon-2x icon-digg-sign"></i></a></li>';
								}
								if ($option['fwdss_tumblr']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://www.tumblr.com/share/link?url='.get_permalink().'&name='.get_the_title().'"><i class="icon-2x icon-tumblr-sign"></i></a></li>';
								}
								if ($option['fwdss_reddit']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://reddit.com/submit?url='.get_permalink().'&title='.get_the_title().'"><i class="icon-2x icon-reddit-sign"></i></a></li>';
								}
								if ($option['fwdss_stumbleupon']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://www.stumbleupon.com/submit?url='.get_permalink().'&title='.get_the_title().'"><i class="icon-2x icon-stumbleupon-sign"></i></a></li>';
								}
								if ($option['fwdss_del']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="https://delicious.com/save?v=5&provider=[provider]&noui&jump=close&url='.get_permalink().'&title='.get_the_title().'"><i class="icon-2x icon-delicious-sign"></i></a></li>';
								}
								
								if ($option['fwdss_wp']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="http://wordpress.com/press-this.php?u='.get_permalink().'&t='.get_the_title().'&i='.$original[0].'"><i class="icon-2x icon-wordpress-sign"></i></a></li>';
								}
								if ($option['fwdss_pocket']==1){
									$output.='<li><a target="_blank" rel="nofollow"  href="https://getpocket.com/save?url='.get_permalink().'&title='.get_the_title().'"><i class="icon-2x icon-pocket-sign"></i></a></li>';
							    }
								$output.='</ul></div>';
	
	return $output;
}

add_shortcode( 'fwdss', 'fwd_social_share_short_code' );
?>
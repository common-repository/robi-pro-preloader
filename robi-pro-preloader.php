<?php

/*
Plugin Name: Robi Pro Preloader
Plugin URI: http://rahman.site88.net
Description: The Robi Pro Preloader wordPress plugin.It will be enable a Preloader on your web site. You can change the preloader image/design from settings.
Author: Abadur Rahman Robi
Author URI: http://rahman.site88.net
Version: 1.0
*/
/**
 * Copyright (c) 2016 Abadur Rahman Robi (email: robi011029@gmail.com). All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */

defined( 'ABSPATH' ) or die( 'No direct access the script please!' );


// Call Latest jQuery From wordpress library
function robi_latest_jquery(){
	wp_enqueue_script('jquery');	
}

add_action('init' , 'robi_latest_jquery');


// Files Folder Settings
define('ROBI_PRO_PRELOADER' , WP_PLUGIN_URL .'/' . plugin_basename(dirname(__FILE__)) . '/');


// Adding css file
function robi_pro_preloader_files(){
	wp_enqueue_style('' , ROBI_PRO_PRELOADER .'css/style.css' );		
}
add_action('wp_enqueue_scripts' , 'robi_pro_preloader_files');



// Adding Robi Pro Preloader Menu
function add_robipropreloader_options()  
{  
	add_options_page('Robi Pro Preloader Settings', 'Robi Pro Preloader Settings', 'manage_options', 'robi-pro-preloader-settings','robi_pro_preloader_settings');  
}  
add_action('admin_menu', 'add_robipropreloader_options');


// Default options values
$robi_pro_preloader_options = array(
	'preloader_images' => ROBI_PRO_PRELOADER.'img/preloader1.gif',
);


// Load only if we are viewing an admin page
if ( is_admin() ) : 



function robi_pro_pleloader_register_settings() {
	// Register settings and call sanitation functions
	register_setting( 'robi_pro_preloader_p_options', 'robi_pro_preloader_options', 'robi_pro_pleloader_validate_options' );
}
add_action( 'admin_init', 'robi_pro_pleloader_register_settings' );



 function robi_pro_preloader_plugin_actions( $links ) {

 		$settings_link = '<a href="' . admin_url( 'options-general.php?page=robi-pro-preloader-settings' ) . '">' . __('Settings') . '</a>';
 		array_unshift( $links, $settings_link ); // before other links

 	return $links;
 }
 add_filter( 'plugin_action_links', 'robi_pro_preloader_plugin_actions', 10, 2 );



// Store Gif Images in array
$preloader_images = array(
	'preloader_images1' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader1.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader1.gif'
	),
	'preloader_images2' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader2.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader2.gif'
	),	
	'preloader_images3' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader3.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader3.gif'
	),	
	'preloader_images4' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader4.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader4.gif'
	),	
	'preloader_images5' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader5.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader5.gif'
	),	
	'preloader_images6' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader6.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader6.gif'
	),
	'preloader_images7' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader7.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader7.gif'
	),
	'preloader_images8' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader8.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader8.gif'
	),	
	'preloader_images9' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader9.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader9.gif'
	),	
	'preloader_images10' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader10.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader10.gif'
	),	
	'preloader_images11' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader11.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader11.gif'
	),	
	'preloader_images12' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader12.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader12.gif'
	),
	'preloader_images13' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader13.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader13.gif'
	),
	'preloader_images14' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader14.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader14.gif'
	),	
	'preloader_images15' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader15.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader15.gif'
	),	
	'preloader_images16' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader16.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader16.gif'
	),	
	'preloader_images17' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader17.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader17.gif'
	),	
	'preloader_images18' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader18.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader18.gif'
	),
	'preloader_images19' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader19.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader19.gif'
	),
	'preloader_images20' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader20.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader20.gif'
	),	
	'preloader_images21' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader21.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader21.gif'
	),	
	'preloader_images22' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader22.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader22.gif'
	),	
	'preloader_images23' => array(
		'value' => ROBI_PRO_PRELOADER.'img/preloader23.gif',
		'img' => ROBI_PRO_PRELOADER.'img/preloader23.gif'
	),				
);


// Function to generate options page
function robi_pro_preloader_settings() {

	global $robi_pro_preloader_options, $preloader_images;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted.		
?>
<div class="wrap robi-preloader">

	
	<h2>Robi Pro Preloader Settings</h2>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade">
		<p>
			<strong><?php _e( 'Options saved' ); ?></strong>
		</p>
	</div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>



	<!-- Form Started To Set the image for loader -->
	<form method="post" action="options.php">
		<?php $settings = get_option( 'robi_pro_preloader_options', $robi_pro_preloader_options ); ?>
		<?php settings_fields( 'robi_pro_preloader_p_options' );?>
		<table class="form-table">
			<tr class="active">
				<th><label>Now Selected</label></th>
				<td><img src="<?php echo $settings['preloader_images'];?>" alt="" width="70" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="background_color">Chosse Your Preloader</label></th>
				<td>
					<?php foreach( $preloader_images as $activate ) : ?>
					<div style="margin-right:15px; display: inline-block; line-height: 50px;">
						<input type="radio" id="<?php echo $activate['value']; ?>" name="robi_pro_preloader_options[preloader_images]" value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $settings['preloader_images'], $activate['value'] ); ?> />
						<label for="<?php echo $activate['value']; ?>">
							<img src="<?php echo $activate['img']; ?>" alt="" width="70" />
						</label>
					</div>
					<?php endforeach; ?>
				</td>
			</tr>		
		</table>
		<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>
	</form>

</div>

<?php
}

function robi_pro_pleloader_validate_options( $input ) {
	global $robi_pro_preloader_options, $preloader_images;

	$settings = get_option( 'robi_pro_preloader_options', $robi_pro_preloader_options );
	
			
	// We select the previous value of the field, to restore it in case an invalid entry has been given
	$prev = $settings['layout_only'];
	// We verify if the given value exists in the layouts array
	if ( !array_key_exists( $input['layout_only'], $preloader_images ) )
		$input['layout_only'] = $prev;		
	
	return $input;
}


// Adding Preloader Admin Custom css
function robi_pro_preloader_custom_css()
{
?>
<style>

.robi-preloader h2 {
  background: #fff none repeat scroll 0 0;
  box-shadow: 0 0 2px #666;
  color: #00b39f;
  padding: 15px 10px !important;
  text-align: center;
  margin: 0 0 20px 0 !important;
}

.robi-preloader label {
  padding: 0 10px;
}

.form-table div {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #fff;
  box-shadow: 0 0 2px #666;
  margin: 10px 0;
  padding: 5px;
  transition: all 0.5s ease;
}

.form-table div:hover {
  background: #ccc;
  border: 1px solid #ccc;
}

.robi-preloader .active {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #fff;
}

</style>
<?php
}
add_action('admin_head','robi_pro_preloader_custom_css');

endif;  // EndIf is_admin() 


// Adding Preloader options css
function robi_pro_preloader_option_css(){ ?>
<?php global $robi_pro_preloader_options; $robi_preloader_settings = get_option( 'robi_pro_preloader_options', $robi_pro_preloader_options ); ?>
	<style type="text/css">
		#status {
			background-image:url(<?php echo $robi_preloader_settings['preloader_images']; ?>);
		}
	</style>
<?php	
}
add_action('wp_head' , 'robi_pro_preloader_option_css');



// Adding Preloader HTML
function robi_pro_preloader_html(){ 
	
?>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>

<?php }
add_action('wp_footer' , 'robi_pro_preloader_html');



// Adding Preloader Custom jQuery
function robi_pro_preloader_js(){ 

global $robi_pro_preloader_options; $robi_preloader_settings = get_option( 'robi_pro_preloader_options', $robi_pro_preloader_options ); ?>

<script type="text/javascript">       
		jQuery(window).load(function() {
		jQuery("#preloader").delay(1200).fadeOut("slow");  
		jQuery("#status").delay(1200).fadeOut("slow");              
		});             
</script>

<?php	
}
add_action('wp_footer' , 'robi_pro_preloader_js');


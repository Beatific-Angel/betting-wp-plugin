<?php 

/**
 * Trigger this file on plugin uninstall
 *
 * @package Super Side
 */

if( ! defined('WP_UNINSTALL_PLUGIN') ) { die; }

// Clear Database stored data
$sides = get_posts( array( 'post_type' => 'side', 'numberposts' => -1 ) );

// Run through each side and delete from db
foreach( $sides as $side ) {
	wp_delete_post($side->ID, true );
}

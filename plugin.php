<?php
/*
Plugin Name: Cosm DataStream
Plugin URI: http://github.com/LeoColomb/Cosm-for-Yourls
Description: Puch to Cosm YOURLS data.
Version: 1.2
Author: L&#233;o Colomb
Author URI: http://twitter.com/LeoColomb
*/

function lpc_update_cosm() {

	/** Your configuration **/

	$api_key = "YOUR_API_KEY";	// Set your Cosm API Key 
	$feed = FEED_ID;			// Set your feed number
	
	/** Function System - You don't have to modify this **/

	// Load Cosm API library
	require_once('CosmAPI.php');

	// Create connection
	$cosm = new CosmAPI($api_key);

	// Get YOURLS data
	$yourlsData = yourls_get_db_stats();

	// Convert to JSON
	$jsonData = '"id":"links","current_value":"' . $yourlsData["total_links"] . '"},{"id":"clicks","current_value":"' . $yourlsData["total_clicks"] . '"';
	$data = '{"title":"Yourls Data","version":"1.0.0","datastreams":[{' . $jsonData . '}]}';
	
	// Push data to Cosm - Allow DEBUG
	if ( YOURLS_DEBUG == true ) {
	$putYourlsData = $cosm->_debugStatus( $cosm->updateFeed("json", $feed, $data));
	} else {
	$putYourlsData = $cosm->updateFeed("json", $feed, $data);
	}
	
	return $putYourlsData;
}

yourls_add_action( 'update_clicks', 'lpc_update_cosm' );
yourls_add_action( 'insert_link', 'lpc_update_cosm' );
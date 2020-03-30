<?php
	/*
		Plugin Name: Action Plugin
		Version: 1.0
        Deepak 8567091
	*/

	// Function that displays the number
	function display($number){
        //requesting data from api
		$request = wp_remote_get( 'http://history.muffinlabs.com/date' ); 
		if( is_wp_error( $request ) ) { 
        //error handling
return false; 
	}
	$body = wp_remote_retrieve_body( $request ); 
	$data = json_decode( $body ); 
		
		if( !empty( $data ) ) {	

		if (is_array($data) || is_object($data)) 
			{
				print_r($data->data->Events[1]->text); 
				print_r($data->data->Events[1]->year); 
			}
		}
	}

	add_action('wp_footer', 'display');
?>
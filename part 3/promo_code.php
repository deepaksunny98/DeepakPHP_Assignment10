<?php
	/*
		Plugin Name: Promo Code 
		Version: 1.0
        Deepak 8567091
	*/
    // Short Code
	add_shortcode('promo', 'promocode');	

	function promocode()	//Function definition
	{
	    $posted= strtotime(get_the_date()); 
        //getting todays current system time
	    $today= time(); 
	    $interval = $today - $posted;
	   
	    //if the difference is greater than 2 days in seconds
	    if($interval > 162800) { 
	        return 'Sorry times up';
	    } else {
	        return 'PROMONUMBER'; //Printing Promo code.
	    }
	}
?>

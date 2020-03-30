<?php
	/*
		Plugin Name: Word Counter
		Version: 1.0
        Deepak 8567091
	*/
    //this is the plugin to count no of words in a text
		function count ($noofwords) {
			return $noofwords . " (" . str_word_count($noofwords) . " Words in the text.)"; 
		}

		// This is to call the function to count the number of words. 
		add_filter("the_content", "count");
?>
<?php
	/*
		Plugin Name: String Replace Filter
		Version: 1.0
        Deepak 8567091
	*/
		function stringreplace ($text) {
			$filter = array(
				'twitter' => '<a href="https://www.twitter.com/">twitter</a>', // twitter text will be replaced by twitter link
				'yeyyyy' => '<p>haha</p>', // yeyyy will replace by haha
				'html' => '<p> hyper text transfer protocol </p>' // html replace by full form
			);

			$text = str_replace(array_keys($filter), $filter, $text); 
			return $text; // returns the value
		}

		add_filter ('pre_comment_content', 'stringreplace'); 
?>
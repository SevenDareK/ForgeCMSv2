<?php
namespace App;

class Validate
{
	
	function isEmail($string)
	{
		if(filter_var($string, FILTER_VALIDATE_EMAIL)) {
			return true;
    	}
    	else {
    		return false;
    	}
	}

	function minChar($string, $num)
	{
		if(strlen($string)>=$num) {
			return true;
    	}
    	else {
    		return false;
    	}
	}

	function errorBlock($string)
	{
		echo '<ul><li class="alert-block">'.$string.'</li></ul>';
	}

}
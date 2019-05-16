<?php
	function get_code($find)
	{
		//array with key and value.
		$languages = array(
			"js"=>"999",
			"c"=>"101",
			"php"=>"555"
		);
		
		//use foreach since it is with array.
		foreach($languages as $language=>$code)
		{
			if($language==$find)
			{
				return $code;
				break;
			}
		}
	}
?>
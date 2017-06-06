<?php

if (!function_exists('pageTitle'))
{
	function pageTitle($title)
	{
		$defaultTitle = 'Laracarte - List of artisans';
		if ($title == '') 
		{
			return $defaultTitle;
		}
		else
		{
			return $title. ' | '. $defaultTitle;
		}
	}
}

if (!function_exists('activeRoute'))
{
	function activeRoute($route)
	{	
		return Route::is($route) ? 'active' : '';
	}
}

?>
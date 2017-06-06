<?php

if (!function_exists('pageTitle'))
{
	function pageTitle($title)
	{
		$defaultTitle = config('app.name').' - List of artisans';
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
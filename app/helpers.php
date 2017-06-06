<?php

#{PAGES TITLE HELPER}
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

# {ACTIVE ROUTES HELPER}
if (!function_exists('activeRoute'))
{
	function activeRoute($route)
	{	
		return Route::is($route) ? 'active' : '';
	}
}

# {ERROR HELPER}
if (!function_exists('errorType'))
{
	function errorType($error) 
	{
		if ($error == '') 
		{
			return 'Error';
		}
		else
		{
			return $error;
		}
	}
}

if (!function_exists('errorMessage'))
{
	function errorMessage($message) 
	{
		if ($message == '') 
		{
			return '';
		}
		else
		{
			return ' - '.$message;
		}
	}
}

?>
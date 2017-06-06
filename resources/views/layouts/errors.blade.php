<!DOCTYPE HTML>
<html>
	<head>
		<title>Error {{ errorType($errorType ?? '') }}</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

		@include('layouts.partials._errors__css')
	</head>


	<body>
		<div class="wrap">
		   <div class="logo">
		   <h1>{{ errorType($errorType ?? '') }}</h1>
		    <p>Error occured! {{ errorMessage($errorMessage ?? '') }}</p>
	  	      @if($Back)
	  	      <div class="sub">
		        <p><a href="{{ route('rootPath')}}">Back</a></p>
		      </div>
		      @endif
	        </div>
		</div>
	</body>
</html>
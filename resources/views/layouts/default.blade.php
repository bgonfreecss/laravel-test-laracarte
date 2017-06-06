<!DOCTYPE html>
<html>
    <head>

    	<!-- META -->
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BASIC HEAD INFO -->
        <title>{{ pageTitle($title ?? '') }}</title>


        <!-- CSS INCLUDE -->
        @include('layouts.partials._default__css')
    </head>
    <body>

    	<!-- STATIC NAVBAR -->
    	@include('layouts.partials._default__nav')


    	<!-- PAGE CONTENT  -->
    	@yield('content')


    	<!-- FOOTER -->
    	@include('layouts.partials._default__footer')

    	<!-- SCRIPT INCLUDE -->
        @include('layouts.partials._default__script')
    </body>
</html>
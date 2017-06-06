@extends('layouts.default', ['title' => 'About'])


@section('content')

    <div class="container">
    	<h2>What is {{  config('app.name') }} ?</h2>
    	<p>{{  config('app.name') }} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a>.</p>

    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert alert-warning">
    				<i class="fa fa-warning"></i><strong> This app has been built by <a href="https://twitter.com/etsmo" target="_blank">@etsmo</a> for learnig purposes.</strong>
    			</p>
    		</div>
    	</div>

    	<p>Feel free to help to improve the <a href="https://github.com/bgonfreecss/laravel-test-laracarte" target="_blank">source code</a>.</p>

    	<hr>

    	<h2>What is Laramap ?</h2>
    	<p>Laramap is the website which {{  config('app.name') }} was inspired :).</p>
    	<p>More info <a href="https://laramap.com/p/about">here.</a></p>

    	<hr>

    	<h2>Which tools and services are used in {{  config('app.name') }} ?</h2>
    	<p>Basically it's built on Laravel &amp; Boostrap. But there's a bunch of services used for email and other sections.</p>
    	<ul>
    		<li>Laravel</li>
    		<li>Boostrap</li>
    		<li>Amazon S3</li>
    		<li>Mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Antony Martin's Geolocalisation Package</li>
    		<li>Michel Fortin's Markdown Parser Package</li>
    		<li>Heroku</li>
    	</ul>
    </div>

@stop
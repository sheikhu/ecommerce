<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'debug' => true,

	'providers' => append_config(
		[
		'Way\Generators\GeneratorsServiceProvider',
		'Barryvdh\Debugbar\ServiceProvider',
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Mmanos\Casset\CassetServiceProvider',
		]),

	'aliases' => append_config([
		 'Debugbar' => 'Barryvdh\Debugbar\Facade',
         'Casset' => 'Mmanos\Casset\Casset',
		 ])

	);

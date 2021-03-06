<?php

return [

	/*
	|----------------------------------------------------------------------------------------------------
	| Url
	|----------------------------------------------------------------------------------------------------
	| Will use to return base url of app.
	*/

	'url'       => env('APP_URL', '') . '/storage',

	/*
	|----------------------------------------------------------------------------------------------------
	| Folder
	|----------------------------------------------------------------------------------------------------
	| Will use to put file uploads in `/storage/app/public`.
	*/

	'folder'    => '/media/',

	/*
	|----------------------------------------------------------------------------------------------------
	| Split
	|----------------------------------------------------------------------------------------------------
	| Organize my uploads into year-month based folders.
	| Will use to put file uploads in `/storage/app/public/{folder}/YYYY-MM/`
	*/

	'split'     => true,

	/*
	|----------------------------------------------------------------------------------------------------
	| Type
	|----------------------------------------------------------------------------------------------------
	| This option let you to filter your image by extensions.
	*/

	'type'      => ['jpg', 'jpeg', 'png', 'gif', 'svg'],

	/*
	|----------------------------------------------------------------------------------------------------
	| Step
	|----------------------------------------------------------------------------------------------------
	| The number of files that will be returned with each step.
	| (The tool loads images from a folder not all at once).
	*/

	'step'      => 40,

];

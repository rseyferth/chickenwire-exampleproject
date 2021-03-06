<?php

	///////////////////////////////////
	//  Set the current environment  //
	///////////////////////////////////
	
	// This is used for switching between settings when deploying
	// to different servers. 
	// 
	$config->environment = 'development';


	//////////////////////
	// Set your webPath //
	//////////////////////
	
	// If your project is not in the webroot of the domain, 
	// configure the webPath here. 
	// 
	// The webPath is the part of the url after the domain,
	// for example `/my-project/'
	// 
	$config->webPath = '/';



	////////////////////////////////////
	// Configure database connections //
	////////////////////////////////////

	$config->database = array(
		'development' => 'mysql://[user]:[pass]@[host]/[dbname];charset=[charset]',
		'test' => 'mysql://[user]:[pass]@[host]/[dbname];charset=[charset]',
		'production' => 'mysql://[user]:[pass]@[host]/[dbname];charset=[charset]'
	);


	/////////////////////////////////////
	// Set the timezone of your server //
	/////////////////////////////////////
	
	$config->timezone = "Europe/Amsterdam";



	///////////////////////////////
	// Enable/disable Csrf Guard //
	///////////////////////////////

	// This default settings will only enable the Csrf guard
	// once you deploy. During development the Csrf guard
	// can become quite annoying.

	$config->enableCsrfGuard = array(
		'development' => false,
		'test' => true,
		'production' => true
	);




?>
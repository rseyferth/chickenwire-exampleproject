<?php

	use ChickenWire\Route;

	///////////////////////////
	// Configure your routes //
	///////////////////////////
	
	//
	// For more information on routing, see 
	// www.chickenwire.nl/guides/routing
	// 
	
	Route::match("/", array(			
		"to" => "ExampleController#index"			
	));
	
?>
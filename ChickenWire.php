<?php

	// Set APP root to my current directory
	define("APP_ROOT", __DIR__);			

	// Start autoloading of classes from Composer
	require 'vendor/autoload.php';

	// Now boot the application
	\ChickenWire\Application::boot();

?>
<?php 

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/Crud/");

	require_once "Config/Autoload.php"; 

	Config\Autoload::arranque();
?>
<?php 

session_start();

require_once './boot.php';

spl_autoload_register('autoload');

function autoload($class_name){
	$array_paths = array(
		'database/',
		'app/class/',
		'models/',
		'controllers/'
	);

	$parts = explode('\\',$class_name);
    // print_r($parts);
	$name = array_pop($parts);
    // print_r($name);

	foreach($array_paths as $path){
		$file = sprintf($path.'%s.php',$name);
		if(is_file($file)){
			include_once $file;
		}
	}
}
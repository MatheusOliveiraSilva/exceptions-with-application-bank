<?php

function load($namespace) {
	$namespace = str_replace("Alura\\", "/", $namespace);
	$fullPath = __DIR__ . "/" . $namespace . ".php";
	include_once $fullPath;
}
  
spl_autoload_register(__NAMESPACE__ ."\load");
?>
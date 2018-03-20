<?php
spl_autoload_register(function ($class_name) {
	include $class_name . '.php';
});

//print_r('<pre>'. new Pikachu('Pika') . '</pre>');
print_r('<pre>'. new Charmeleon('Char') . '</pre>');
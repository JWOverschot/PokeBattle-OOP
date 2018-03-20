<?php
spl_autoload_register(function ($class_name) {
	include $class_name . '.php';
});

//print_r('<pre>'. new Pikachu('Pika') . '</pre>');
//print_r('<pre>'. new Charmeleon('Char') . '</pre>');

$pika = new Pikachu('Pika');
$char = new Charmeleon('Char');

print_r($pika->name .' HP '. $pika->hitpoints .'<br>');
print_r($char->name .' HP '. $pika->hitpoints .'<br><br>');

$pika->doAttack('Electric Ring', $char);

print_r($pika->name .' HP '. $pika->hitpoints .'<br>');
print_r($char->name .' HP '. $char->hitpoints .'<br><br>');

$char->doAttack('Flare', $pika);

print_r($pika->name .' HP '. $pika->hitpoints .'<br>');
print_r($char->name .' HP '. $char->hitpoints .'<br><br>');
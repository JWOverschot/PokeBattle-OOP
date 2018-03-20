<?php

class Pikachu extends Pokemon {
	public $energyType = "Lightning";
	public $hitpoints = 60;

	public function __construct($name)
	{
		parent::__construct(
			$name,
			$this->energyType,
			$this->hitpoints,
			array(new Attack('Electric Ring', 50), new Attack('Pika Punch', 20)),
			new Weakness('Fire', 1.5),
			new Resistance('Fighting', 20)
		);
	}
}
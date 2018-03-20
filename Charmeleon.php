<?php

class Charmeleon extends Pokemon {
	public $energyType = "Fire";
	public $hitpoints = 60;

	public function __construct($name)
	{
		parent::__construct(
			$name,
			$this->energyType,
			$this->hitpoints,
			array(new Attack('Head Butt', 10), new Attack('Flare', 30)),
			new Weakness('Water', 2),
			new Resistance('Lightning', 10)
		);
	}
}
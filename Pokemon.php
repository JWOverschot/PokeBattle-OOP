<?php

class Pokemon {
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance)
	{
		$this->name = $name;
		$this->energyType = $energyType;
		$this->hitpoints = $hitpoints;
		$this->health = $hitpoints;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function doAttack($attack, $pokemon)
	{
		if ($this->name != $pokemon) {
			for ($i=0; $i < count($this->attacks); $i++) {
				if ($this->attacks[$i]->name == $attack) {
					print_r($this->name . ' attacks ' . $pokemon->name . ' with ' . $attack . ' doing ' . $this->attacks[$i]->demage . ' damage.<br>');
					$attackDamage = $this->attacks[$i]->demage;

					if ($pokemon->hitpoints < $attackDamage) {
						$pokemon->getDamage(0);
					} else {
						$pokemon->getDamage($pokemon->hitpoints - $attackDamage);
					}
				}
			}
		}
		
	}

	public function getDamage($damage)
	{
		
		$this->hitpoints = $damage;
	}

	public function __toString()
	{
		return json_encode($this);
	}
}
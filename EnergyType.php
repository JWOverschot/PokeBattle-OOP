<?php 

class EnergyType
{

	const FIRE = 'Fire';
	const LIGHTNING = 'Lightning';

	public $name;

	function __construct($name)
	{
		$this->name = $name;
	}

}
?>
<?php 
class Attack {
	public $name;
	public $demage;

	public function __construct($name, $demage) {
		$this->name = $name;
		$this->demage = $demage;
	}
}
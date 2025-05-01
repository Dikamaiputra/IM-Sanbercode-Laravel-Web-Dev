<?php 

/**
 * class animal
 */
class Animal
{
	public $name;
	public $legs = 4;
	public $cold_blood = "no";
	
	function __construct($name)
	{
		$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
}

 ?>
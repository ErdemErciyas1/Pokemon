<?php

class Resistance
{
	public $Resistance;
	

	function __construct ($resistance)
	{
		$this->EnergyType = $resistance;	
	} 
//
	public function Resistance()
	{
		return $this->Resistance;
	}

	public function __toString()
	{
	return json_encode($this);
	} 


	//
}
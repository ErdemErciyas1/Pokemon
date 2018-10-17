<?php

class EnergyType
{
	public $EnergyType;
	

	function __construct ($energytype)
	{
		$this->EnergyType = $energytype;	
	} 

	public function EnergyType()
	{
		return $this->EnergyType;
	}

	public function __toString()
	{
	return json_encode($this);
	} 


	
}
//
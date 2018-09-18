<?php

Class Aanval{
	
	public $Name;
	public $Attackpoints;


public function __construct($name, $attackpoints)
	{

		$this->Name = $name;
		$this->Attackpoints = $attackpoints;

	}
}
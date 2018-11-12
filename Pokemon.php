 <?

Class Pokemon
{

	public $Name;
	public $Hitpoints;
	public $Health;
	public $Weakness;
	public $Resistance;
	
	
 

	public function __construct($Name,$Hitpoints,$Health,$Weakness, $Resistance , $EnergyType)
	{
	
	$this->Name = $Name;
	$this->Hitpoints = $Hitpoints;	
	$this->Health = $Health;
	$this->Weakness = $Weakness;
	$this->Resistance = $Resistance;
	$this->EnergyType = $EnergyType;
	}


	public function Attacker()
	{
		return $this->Name . " Attacks " .  50 .  " Damage" . " on" . " Charmelon " . "with "; 
//
	}

	public function GetDamage()
	{
//hier komt er te staan dat balbausaur damage ontvangt van pikachu..
		return $this->Name .  " recieved " .  $this->Hitpoints . " Damage" .  " From " . "Pikachu";
	}




	public function __toString()
	{
	return json_encode($this);
	} 
}




 
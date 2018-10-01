<?

Class Pokemon
{

	public $Name;
	public $Hitpoints;
	public $Health;
	public $Resistance;
	public $Attack;
  

	public function __construct($Name,$Hitpoints,$Health, $Resistance)
	{
	
	$this->Name = $Name;
	$this->Hitpoints = $Hitpoints;	
	$this->Health = $Health;
	$this->Resistance = $Resistance;
	}


	public function Attack()
	{
		return $this->Name . " Attacks " .  "Bulbasaur " . "with "; 

	}

	public function GetDamage()
	{
//hier komt er te staan dat balbausaur damage ontvangt van pikachu..
		return $this->Name . " Recieves " . "Damage " . "From " . "Pikachu";
	}




	public function __toString()
	{
	return json_encode($this);
	} 
}





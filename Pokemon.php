<?

Class Pokemon
{

	public $Name;
	public $Hitpoints;
	public $Health;
	public $Energytype;
	public $Weakness;
    public $Attack;
    public $Resistance;

	


	public function __construct($name,$hitpoints,$health,$energytype, $weakness)
	{

	$this->Name = $name;
	$this->Hitpoints = $hitpoints;	
	$this->Health = $health;
	$this->Energytype = $energytype;
	$this->Weakness = $weakness;
	$this->Attack = [];
	
	}




	public function __toString()
	{
	return json_encode($this);
	}
}



<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Attack.php';

$energytype = new EnergyType ("Lightning");
$energytype2 = new EnergyType ("Solarbeam");




$p = new Pokemon('Pikachu'  , 50 , 100 , $energytype);
print_r('<pre>'.$p.'</pre>'); 


$b = new Pokemon('Balbasaur'   , 50 , 100 , $energytype2);
print_r('<pre>'.$b.'</pre>');  


echo "<br>";
echo $p->Attack();
echo $energytype->EnergyType();	
echo "\n" . "<br>" . "<br>";

echo $b->GetDamage();




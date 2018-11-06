<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Attack.php';

//

$energytype = new EnergyType ("Lightning");
$energytype2 = new EnergyType ("Solarbeam");
$Ring = new Attack ("Electric Ring");
$Punch = new Attack ("Pika Punch");



$p = new Pokemon('Pikachu'  ,  60 , 100 ,'Fire', 'Steel' ,  $energytype );
print_r('<pre>'.$p.'</pre>'); 


$b = new Pokemon('Charmelon'  , 50 , 100 ,'Water', 'Grass', $energytype2);
print_r('<pre>'.$b.'</pre>');  


echo "<br>";

echo $p->Attacker(); 

echo $energytype->EnergyType();

//



echo "\n" . "<br>" . "<br>";

echo $b->GetDamage();



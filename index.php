<?php

require 'Pokemon.php';

$p = new Pokemon('Pikachu'  , 50 , 100 , Lightning , Solarbeam);
print_r('<pre>'.$p.'</pre>'); 


$b = new Pokemon('Bulbasaur'  , 50 , 100 , Solarbeam , Lightning);

print_r('<pre>'.$b.'</pre>');  




echo 'Pikachu valt Bulbasaur aan' ;
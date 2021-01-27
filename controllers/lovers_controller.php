<?php 

$tab_all_member = 
[
    ['lastname' => 'Mathilde', 'mail' => ''],
    ['firstname' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['age' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    ['gender' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    ['mail' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    ['zipcode' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    ['picture' => 'Amandine', 'mail' => 'amandine@lp.fr'],  
    ['description' => '', '']
];

for ($cursor = 0; $cursor < count($tab_all_member); $cursor++)
{
    echo $tab_all_member[$cursor];
}

?>
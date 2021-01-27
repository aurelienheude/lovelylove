<?php 

$tab_all_member = 
[0 =>
    ["lastname" => "Philippe",
    "firstname" => "Marius", 
    "age" => 0, 
    "gender" => "homme", 
    "mail" => "mariuskoko@gmail.com",
    "zipcode" => 76620,
    "picture" => "../assets/img/300.png",
    "description" => "je mange des cookies"
    ],
1 =>

    ["lastname" => "Philippe",
    "firstname" => "Marius", 
    "age" => 0, 
    "gender" => "homme", 
    "mail" => "mariuskoko@gmail.com",
    "zipcode" => 76620,
    "picture" => "../assets/img/300.png",
    "description" => "je mange des cookies"
    ],
    
];

for ($cursor = 0; $cursor < count($tab_all_member); $cursor++)
{
    print_r($tab_all_member[$cursor]);
}

?>
<?php 

$tab_all_member = 

[0 =>
    [
    "lastname" => "Philippe",
    "firstname" => "Marius", 
    "age" => 23, 
    "gender" => "homme", 
    "mail" => "marius@gmail.com",
    "zipcode" => 76620,
    "picture" => "../assets/img/300.png",
    "description" => "je mange des cookies et j'aime le foot et boire des grosses binouse"
    ],

1 =>

    [
    "lastname" => "toto",
    "firstname" => "Marius", 
    "age" => 0, 
    "gender" => "homme", 
    "mail" => "mariuskoko@gmail.com",
    "zipcode" => 76620,
    "picture" => "../assets/img/300.png",
    "description" => "je mange des cookies"
    ],
    
];

foreach($tab_all_member as $key => $value)
{
    var_dump($value["lastname"]);
}

?>
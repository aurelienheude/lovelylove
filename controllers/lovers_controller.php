<?php

$tab_all_member =

    [
        [
            "lastname" => "Philippe",
            "firstname" => "candeloro",
            "age" => 23,
            "gender" => "homme",
            "mail" => "marius@gmail.com",
            "zipcode" => 76620,
            "picture" => "../assets/img/300.png",
            "description" => "je mange des cookies et j'aime le foot et boire des grosses binouse"
        ],
        [
            "lastname" => "maxime",
            "firstname" => "delarue",
            "age" => 20,
            "gender" => "homme",
            "mail" => "toto@gmail.com",
            "zipcode" => 76620,
            "picture" => "../assets/img/300.png",
            "description" => "je mange des cookies"
        ]

    ];

foreach ($tab_all_member as $key => $value) {

?>

    <div class="col-md-3 pb-5">
        <div class="card">
            <img class="card-img-top" src="<?php echo $value["picture"]; ?>" alt="Card image cap">

            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $value["lastname"] . ", " . $value["firstname"]; ?></h5>
                <ul>
                    <li>age : <?php echo $value["age"]; ?></li>
                    <li>code postal : <?php echo $value["zipcode"]; ?></li>
                    <li>Description : <?php echo $value["description"]; ?></li>
                </ul>
            </div>
        </div>
    </div>

<?php } ?>
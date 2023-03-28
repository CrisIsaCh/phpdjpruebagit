<?php

$arreglo=
    [
    [
        "pais"=>"Argentina",
        "mundiales"=>3

    ],
    [    "pais"=>"Brasil",
        "mundiales"=>5
    ],
    [
        "pais"=>"Francia",
        "mundiales"=>2
    ]

    ];
    foreach ($arreglo as $valor) {
        echo "<h1>". $valor["pais"]."</h1><br> <h3>Tiene ".$valor["mundiales"]." Mundiales</h3><br>";
    }
?>
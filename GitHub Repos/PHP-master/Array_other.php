<?php

    // Associative Array made of key => value pairs
    /*
        countries => capitals
        id => password
        people => fake
    */

    echo "Associative Array <br> <br>";

    $countries = array("India" => "New Delhi",
                        "Russia" => "Moscow",
                        "Israel" => "Jeruselam",
                        "Japan" => "Kyoto");

    //switch key with values
    $capitals = array_flip($countries);

    foreach($countries as $key => $value){
        echo "{$key} ---> {$value} <br>";
    }

    foreach($capitals as $key => $value){
        echo "{$key} ---> {$value} <br>";
    }
?>
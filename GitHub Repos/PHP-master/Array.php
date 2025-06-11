<?php

    // $food = ["mango", "guava"]; OR
    $foods = array("mango", "kiwi", "strawberry", "papaya");
    // echo $food[02];

    //add a new element to the end of the array
    array_push($foods, "Pineapple", "apple", "melon");

    //remove the last index
    array_pop($foods);

    //remove the first element
    array_shift($foods);

    //reverse the array and store in same or other variable
    $foods = array_reverse($foods);
 
    foreach($foods as $food){
        echo $food . "<br>";
    }

    //count the elements of an array
    echo count($foods);

?>
<?php

    // &&, ||, !
    $temp = 30;
    if($temp >= 0 && $temp <= 40){
        echo "good weather<br>";
    }

    $child = false;
    $adult = true;
    $senior = true;

    if($child || $senior){
        echo "Ticket : Rs. 50";
    }else
    {
        echo "ticket : Rs. 200";
    }

?>
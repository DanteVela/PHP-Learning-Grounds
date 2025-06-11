<?php

    echo "SWITCHES------------<br>";

    // In PHP we can use string as cases;
    $grade = "A";

    switch($grade){
        case "A":
            echo "you are excellent<br>";
            break;
        case "B":
            echo "you are good<br>";
            break;
        case "C":
            echo "you are average<br>";
            break;
        case "D":
            echo "need to improve<br>";
            break;
        case "F":
            echo "you are FAIL<br>";
            break;
        default:
            echo "'{$grade}' is not valid !";
    }

?>
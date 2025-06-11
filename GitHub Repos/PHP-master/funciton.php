<?php
    // we can also datatypes in paramenter.
    // hypotenuse(float $a, float $b){}

    function hypotenuse( $a, $b){
        $c = sqrt($a**2 + $b**2);
        return $c;
    }

    $hypotenuse = hypotenuse(4, 3);
    echo "hypotenuse of the triangle is ". $hypotenuse;
?>
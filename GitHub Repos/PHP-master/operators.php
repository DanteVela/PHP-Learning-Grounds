<?php
    //Arithmetic operators
    // +, -, *, /, **, %

    $a = 12;
    $b = 8;
    $c = null;

    // $c = $a + $b;
    // $c = $a - $b;
    // $c = $a * $b;
    // $c = $a / $b;

    // $c = $a ** $b;  --> 12 pow(8)
    $c = $a % $b;
    
    echo "c : {$c}";
    
    
    //Increment/Decrement Operator

    $number = 5;

    // $number++;
    // $number+= 5;
    $number-= 8;
    echo "<br>decrement by 8 = {$number}";


    /* Operator Precedence (from 'left' to 'right')
        ()
        **
        *   /   %
        +   -
    */
    $total = 1 + 4 / 2 ** 4 % 6 * 3 - 5;
    echo "<br>total = {$total}";

?>
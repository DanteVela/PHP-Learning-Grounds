<!DOCTYPE html>
<html>
<body>

<?php
    // This is a simple PHP script that outputs "Hello, World!"
    echo "Hello, World!";
    echo "<br>";
    // --------------------------------------------------------------------------------------------------------------------------
    $c = (int)42;       // Integer
    $d = (float)3.14;   // Floating-point
    // --------------------------------------------------------------------------------------------------------------------------
    $coddy1 = (int)10 ;
    $coddy2 = (int)19 ;
    $coddy2 = $coddy1 ;

    // Don't change below this line
    echo $coddy2;
    echo " ";
    echo $coddy1;
    // --------------------------------------------------------------------------------------------------------------------------
    echo "<br>";
    $coddy = 'I am learning to code with Coddy!';
    echo $coddy;

    $link = "https://github.com/LeCoupa/awesome-cheatsheets/blob/master/languages/php.php";
    $text = "Click this link for more PHP Examples";
    echo "<br> <a href=\"$link\">$text</a>";
?> 

</body>
</html>
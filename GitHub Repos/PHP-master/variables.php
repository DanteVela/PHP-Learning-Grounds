<?php
    echo "variables<br>";
    // String variables
    $name = "Pranav";
    echo $name;
    echo "<br>or,<br> hello, this is {$name}";

    //integer variables
    $age = 21;
    echo "<br> my age is {$age}";

    //float variables
    $gpa = 8.7;
    $height = 5.11;

    echo "<br> my height is {$height} and my gpa is {$gpa}";

    //boolean variables
    $student = false;
    $online = true;

    // variable having value 'false' won't display anything
    echo "<br> are you student: {$student}";
    echo "<br> are you online: {$online}";
?>
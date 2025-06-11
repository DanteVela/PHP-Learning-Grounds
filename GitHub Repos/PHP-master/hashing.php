<?php
    /*
        hashing = transforming sensitive data (password)
        into letter, numbers and/or symbols via
        mathematical process (similar to encryption).
        hides the original data from 3rd parities.
    */

    $password = "pranav223323";

    //1st arg = value, 2nd arg = algorithm
    //we've used popular algorithm called bcrypt algorithm

    $hash = password_hash($password, PASSWORD_DEFAULT);
    echo $hash;

    //verify if password and hash
    if(password_verify("praav223323", $hash)){
        echo "you are logged in!";
    }
    else{
        echo "<br>Incorrect Password!";
    }

?>
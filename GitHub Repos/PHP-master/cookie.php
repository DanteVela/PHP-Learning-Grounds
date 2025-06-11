<?php
    //cookies => Information about user stored in 
        // user's web browser.
        // targeted advertisement, browsing preferences
        // and other non sensitive data
        //  cookie is set as Associative array
        //  i.e. as key => value pairs

        //parameters=> "key", "value", expiration_time, "file_path"
        // 86400 second == 1 day and "/" --> default path
    
    setcookie("food", "Burger", time() - 0 , "/");
    setcookie("drink", "limica", time() + (86400 * 2), "/");
    setcookie("sweet", "kajuKatli", time() + (86400 * 2), "/");
    setcookie("laptop", "acer", time() + (86400 * 2), "/");
    
    //to see the cookies
    // right click --> inspect --> Application
    // select cookies from Storage section
    //to Delete --> time() - 0

    // foreach($_COOKIE as $key => $value){
    //     echo $key. " => ". $value. "<br>";
    // }

    //target adverstisement
    if(isset($_COOKIE["food"])){
        echo "BUY SOME {$_COOKIE["food"]}!!! ";
    }
    else{
        echo "I don't know your favoutite food";
    }
?>
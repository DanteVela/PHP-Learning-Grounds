<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- here we used php script coz if we rename our file then PHP_SELf i.e.current path will also change -->
    <!-- we added htmlspecialchars() to avoid/bypass satization and validation problem. -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username:<br>
        <input type="text" name="username"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    /*
        $_SERVER = it is super global variables that contains 
            headers, paths and script locations.
            The entries in this array is created by the web server.
            shows nearly everything i need to about the current web page environment.

    */

    // foreach($_SERVER as $key => $value){
    //     echo "{$key} ----> {$value}<br>";
    // }

    //using another use of sever variable
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "hello";
    }
?>
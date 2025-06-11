<?php

    /*
        session : In php it is a super global variable
            that used to store information on user to
            be used across multiple pages.
            A user is assigned a session-id.
            eg: login credentials.
    */

    //creating session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

<?php
 // these values will be accessable on home page too.
    if(isset($_POST["submit"])){   
        if(!empty($_POST["username"]) &&
            !empty($_POST["password"])){
                
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];

                // echo $_SESSION["username"];
                // echo $_SESSION["password"];
                
                //jump to home page(sesseionHome.php)
                header("Location: sessionHome.php");
            }
        else
        {
            echo "missing username/password";
        }
   }
?>

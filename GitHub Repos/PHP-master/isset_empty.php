<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php"  method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="Login" value="Log in">
    </form>
</body>
</html>

<?php

    //isset() = Return TRUE if the variable is 'declared' and not NULL
    //  i.e. $fork = ""; ----> return TRUE; $fork = null; --> return FALSE(nothing)
    //empty() = Return TRUE if variable is not declared, false, null, ""

    // $username = null;
    // echo isset($username); --> return 1
    // echo isset($username); --> return nothing ($username = null)


    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_POST["Login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "username is missing";
        }
        elseif(empty($password)){
            echo "password is missing";
        }
        else{
            echo "hello! {$username}";
        }
    }
?>
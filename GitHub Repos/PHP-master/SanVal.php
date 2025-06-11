<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SanVal.php" method="post">
        <label>Username:<br></label>
        <input type="text" name="username"><br>
        <label>Age:<br></label>
        <input type="text" name="age"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    /*we sanitize our code because if anyone input
        any malicious code in username box.
        here we used...
        <script> alert("you have VIRUS!") </script>
        in input container
    */

    if(isset($_POST["submit"])){
        // $username = $_POST["username"];
        // instead of this we use the below code

        //1st arg--> coz we've used 'post' in method
        // 2nd arg --> input "name --> username"
        //3rd arg --> to sanitize characters or String
        $username = filter_input(INPUT_POST, "username", 
        FILTER_SANITIZE_SPECIAL_CHARS);


        //FILTER_SANITIZE_NUMBER_INT --> for integer


        // $age = filter_input(INPUT_POST, "age", 
        // FILTER_SANITIZE_NUMBER_INT);

        //similarly for e-mail, we use
        //FILTER_SANITIZE_EMAIL etc


        //valdiating age
        //it remove value if the value is not correct
        $age = filter_input(INPUT_POST, "age",
               FILTER_VALIDATE_INT);

        if(empty($age)){
            echo "you age is not valid";
        
        }
        else{
            echo "you are {$age} years olds";
        }
        echo $username."<br>";
        // echo "you are {$age} years old";
    }
?>
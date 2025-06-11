<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <label>Food Items:<br></label>
        <input type="checkbox" name="foods[]" value="Burger">
        Burger<br>
        <input type="checkbox" name="foods[]" value="Momos">
        Momos<br>
        <input type="checkbox" name="foods[]" value="Maggie">
        Maggie<br>
        <input type="checkbox" name="foods[]" value="Gulab-Jamun">
        Gulab-Jamun<br>
        <input type="checkbox" name="foods[]" value="Coke">
        Coke<br>

        <input type="submit" name="order" value="order">

    </form>
</body>
</html>

<?php

    if(isset($_POST["order"])){
        $foods = $_POST["foods"];

        echo "you've ordered:<br>";
        foreach($foods as $food){
            echo $food. "<br>";
        }
    }

?>
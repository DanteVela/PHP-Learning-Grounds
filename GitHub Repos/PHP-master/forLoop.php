<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
            <label>Enter a number for table:</label>
            <input type="text" name="number">
            <input type="submit" value="submit">
    </form>
</body>
</html>


<?php

    $number = $_POST["number"];
    $total = null;

    for ($i=1; $i <= 10; $i++) { 
        $total = $number * $i;
        echo "{$number} * {$i} = {$total}<br>";
    }

?>
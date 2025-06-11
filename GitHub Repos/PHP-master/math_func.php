<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_func.php" method="post">
        <label>X:</label>
        <input type="text" name="x"><br>

        <label>Y:</label>
        <input type="text" name="y"><br>
        
        <label>Z:</label>
        <input type="text" name="z">

        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //absolute value
    // $total = abs($x);

    //round-off
    // $total = round($x);

    //round down
    // $total = floor($x);

    //round up
    // $total = ceil($x);

    // $total = sqrt($x);
    
    // $total = pow($x, $y);

    // $total = max($x, $y, $z);
    // $total = min($x, $y, $z);

    //gives value of pi
    // $total = pi();

    //give random no.(upto 2B) or 
    //rand(x, y) ---> x=min_value and y=max_value
    
    $total = rand(1, 6);

    echo $total;
?>
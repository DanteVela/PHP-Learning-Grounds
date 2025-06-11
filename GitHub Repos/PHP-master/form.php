<?php
    $food = "Burger";
    $price = 30;

    //from form.html
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $price * $quantity;

    echo "you have ordered {$quantity} x {$food}";
    echo "<br> total amount is Rs.{$total}";
?>

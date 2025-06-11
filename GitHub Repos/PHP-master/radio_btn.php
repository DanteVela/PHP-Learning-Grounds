<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_btn.php" method="post">
        <label>Payment Options:<br></label>
        <input type="radio" name="upi" value="phone pe">
        Phone pe<br>

        <input type="radio" name="upi" value="paytm">
        Paytm<br>

        <input type="radio" name="upi" value="google pay">
        Google pay<br>

        <input type="radio" name="upi" value="BHIM UPI">
        BHIM UPI<br>

        <input type="submit" name="Buy" value="Buy">
        
        </html>
    </form>
</body>


<?php 

    if(isset($_POST["Buy"])){
        
        if(isset($_POST["upi"])){
            $payment = $_POST["upi"];
            echo $payment;
        }
        else{
            echo "select payment method!";
        }
        

    }

?>
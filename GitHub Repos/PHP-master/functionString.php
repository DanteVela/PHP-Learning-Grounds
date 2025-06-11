<?php

$name = "  Pranav Kumar";

//string to lower case
// $name = strtolower($name);

//string to upper
// $name = strtoupper($name);

//remove whitespaces before or after the string
// $name = strtoupper($name);

//length of the string
// $name = strlen($name);

//reverse the string
// $name = strrev($name);

//add 72 till the string len = 20
$name = str_pad($name,20, "72");

//1st -->what to replace
//2nd --> from which to replace
//3rd --> varible

$phone = "123-456-7890";
// $phone = str_replace("-", ":", "123-456-7890<br>");

$phone = str_shuffle($phone);
echo $phone;


echo "<br><br>";

echo $name;

?>
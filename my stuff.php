<?php
$num1=20;
$num2=50;
$place="School";
$School="Lenana";
//variable variables
echo $$place;
echo "<br>";
//constants
define("Name", "Patroba",);
echo Name;
echo "<br>";
define("school","Emobilis");
echo school;
echo "<br>";
//Arithmetic operators
echo $num1+$num2;
echo "<br>";
echo $num2-$num1;
echo "<br>";
echo $num2%$num1;
echo "<br>";
echo $num1*$num2;
echo "<br>";
echo $num2/$num1;
echo "<br>";
//increment and decrement
$num1--;
echo $num1;
echo"<br>";
++$num2;
echo $num2;
echo "<br>";
//assignment operators
$n=25;
$n2=60;
$n+=$n2;
echo $n;
echo "<br>";
$n2-=$n;
echo $n2;
echo "<br>";
//comparison operator
var_dump($num1!=$num2);
echo "<br>";
var_dump($num2>$num1);
echo "<br>";
var_dump($num1!==$num2);
echo "<br>";
var_dump($num1>=$num2);
echo "<br>";
var_dump($num2==$num1);
echo "<br>";
//logical operators
var_dump($num1=20 and $num2=50);
echo "<br>";
var_dump($num1=30 or $num2=50);
echo "<br>";
var_dump($num2=50 xor $num1=20);
echo "<br>";
//arrays
$names=array("rob","Pati","colo");
echo $names[0];
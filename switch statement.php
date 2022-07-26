<?php
$fruits="Apple";
$marks=75;

switch ($fruits){
    case "oranges":
        echo"I like oranges";
        echo "<br>";
        echo "Napenda kula chungwa";
        break;
    case "Banana":
        echo " I like eating Bananas";
        echo "<br>";
        echo "Napenda kula ndizi";
        break;
    case "Apple":
        echo "I like eating apples";
        echo "<br>";
        echo"Napenda kula apple";
        break;
    case "Mango":
        echo "I like eating mangoes";
        echo "<br>";
        break;
    default:
        echo "its not in the list";
}
switch ($marks){
    case $marks <= 50 and $marks > 75 :
    echo "You have failed";
    echo "<br>";
    echo "it is greater than 50";
    break;
    case $marks <= 40 || $marks >75:
    echo "You have failed";
    echo "<br>";
    break;
    case $marks <=75 && $marks <81:
    echo "This is true";
    echo "<br>";
    break;
    default:
        echo "the last statement is true";

}

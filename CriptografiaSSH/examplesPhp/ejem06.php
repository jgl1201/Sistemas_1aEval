<?php

$num1 = 5;
$num2 = 6;

$suma = $num1 + $num2;
echo "La suma es ".$suma;
echo "<br/>";

$resta = $num1 - $num2;
echo "La resta es ".$resta;
echo "<br/>";

$multi = $num1 * $num2;
echo "La multiplicacion es ".$multi;
echo "<br/>";

$division = $num1 / $num2;
echo "La división es ".$division;
echo "<br/>";

if($num1 > $num2){
    echo "El numero1 es mayor que el num2";
}else{
    echo "El numero1 es menor que el numero2";
}
echo "<br/>";
//$num1 = 5
//$num2 = 6
if($num1 > $num2  &&  $num1 != 13){
    echo "El numero1 es mayor que el num2";
}else{
    echo "El numero1 es menor que el numero2";
}



?>
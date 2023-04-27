<?php

function areaTriangulo($base, $altura=1){
    return $base*$altura/2;
}

//$resultado= $base*$altura / 2;
//$resultado1= $base*$altura / 2;
$resultado = areaTriangulo(2,3);
echo "El area del triangulo de 2 y 3 es ".$resultado;
echo "<br/>";
$resultado = areaTriangulo(5);
echo "El area del triangulo de 2 y 3 es ".$resultado;

?>
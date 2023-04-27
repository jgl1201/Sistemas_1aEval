<?php
// Paso de parámetros por GET
// http://localhost/ejem03.php?numero=8&nombre=angel
// estoy pasando 2 parametros
// numero = 8
// nombre = angel

$num = $_GET['numero'];
$name = $_GET["nombre"];
    
if($num >= 0){
    echo "El numero ".$num." es positivo";
}else{
    echo "El numero ".$num." en negativo";
}



?>
<?php
$valor=1;
$valor2=2;

$valor3=1;

var_dump( $valor>$valor2);
echo "<br>";
var_dump($valor==$valor3);
echo "<br>";
var_dump($valor<$valor3);
echo "<br>";
var_dump($valor*5<=$valor2);
echo "<br>";
var_dump($valor>=$valor3*.1);
//Para comparar valor e tipo usar ===

$valor4=20;
$valor5=20.0;
echo "<br>";
var_dump($valor4<=$valor5);

//Para verificar diferença, usar !=
echo "<br>";
var_dump($valor4!=$valor5);

//!== validará tipo de dado

echo "<br>";
var_dump($valor4!==$valor5);


//Spaceship --> "<=>" irá verificar quem é maior, se trazer 1, indica que o número 1 é maior, se for 0 que são iguais, e -1 se o 2º for maior.

echo "<br>";
var_dump($valor4<=>$valor5);

//Null coalescing verifica qual o primeiro valor não nulo, pode ser usado ?? vide ex:
echo "<br>";
$var1= null;
$var2= null;
$var3= 10;

echo $var1 ?? $var2 ?? $var3;
?>
<?php
//Tipos basicos

//string
$nome= "Lucas";

//float
$salario = 50.99;

//booleano
$bloqueado = false;

//inteiro
$ano = 2021;
//////////////////////////////////////////////

//Tipos compostos

//Array

$frutas= array("abacaxi", "laranja", "manga");

echo $frutas[2];

//Objeto

$nascimento = new DateTime();

//Toda vez que temos new, estamos falando de objeto.

echo "<br/>";
var_dump($nascimento);

echo "<br/>";
echo "<br/>";

/////////////////////////

//Tipos especiais

//Resource

$arquivo = fopen("exemplo-03.php","r");
var_dump($arquivo);



echo "<br/>";
echo "<br/>";

//Nulo
$nulo = NULL;

//Null <> Vazio
//Nulo é ausência de valores e vazio são 0 caracteres.

//-----------------------------

?>
<?php
//Variáveis pre-definidas

//--Arrays super globais.
/*Variáveis internas do php que já vem com algum recurso 


$post / $get --> recupera informações de um formulário


Variáveis super globais



*/

$nome= (int)$_GET["a"];

var_dump($nome);
echo "</br>";

$ip = $_SERVER['SCRIPT_NAME'];

echo $ip;
//Toda informação que vem por get/post vem em formato string


//URL - uniform resource location
//URI - partes da URL, uniform resource identifiers
?>
<?php


//Variáveis são case sensitive
//Variáveis não podem começar com número
//Evite caracteres especiais, a não ser "_"
//Comente código!
//Existem variáveis predefinidas, e não podem ser utilizadas!

$nome = "Hcode";
$sobrenome = "Curso udemy";
//var_dump($nome);

echo $nome;
echo "<br/>";

//Para concaternar usar "."
$nomecompleto = $nome . " " . $sobrenome;

echo $nomecompleto;
 exit;
//Para limpar variáveis usar unset($nome)
//Aceita , para limpar várias variáveis, tipo unset($var1,$var2);s

//unset($nome);

if (isset($nome)) {
	echo $nome;
}

/*
Tipos de dados:

Basicos:
-inteiro
-string
-float
-booleano


Compotos:
-array
-objeto

Dados Especiais
-resource
-null
*/

?>
<?php

$nome = "Lucas";

$nome2 = 'castanheira';

//var_dump($nome,$nome2);

echo "Meu nome é $nome <br>";
echo 'Meu nome é $nome <br>';

// "" irá verificar o texto e verificar se existem variáveis, mas entendo que é terrível como prática de programação. Recurso chamado de interpolação de variáveis.

//Colocar tudo para maiúsculo ou minúsculo
echo "<br>";
echo strtoupper($nome) . "<br>";

echo strtolower($nome) . "<br>";



//Primeira letra da palavra ou de todas as palavras da frase.
echo ucfirst($nome . ' ' . $nome2) . "<br>";
echo ucwords($nome . ' ' . $nome2) . "<br>";


//Trocando alguma letra/caracteres

echo str_replace("a", "@", $nome . ' ' . $nome2) . "<br>";


///Procurando posição de uma letra
$q=strpos($nome,'a');

var_dump($q);

//Utilizando função semelhante a mid
//substr(string,onde começar,qtd caracteres)

echo "<br>";

echo substr($nome, 0,$q);

echo "<br>";

//Contar qtd de caracteres strihg --> strlen()

echo strlen($nome);

?>
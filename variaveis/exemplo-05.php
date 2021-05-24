<?php

$nome = "LUCAS";

// { } definem escopo
// Caso uma variável esteja no global, é necessário utilizar prefixo global para chamá-la dentro da função, vide diferença teste e teste2
// Caso dentro do escopo defina novamente uma variável, irá desconsiderar qualquer valor anteriormente repassado

function teste(){ 
	echo $nome;
}

function teste2(){ 
	global $nome;
	echo $nome;

}


teste2();
?>
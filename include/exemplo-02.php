<?php 
//Caso esteja na mesma pasta, digitar apenas o nome;
include "exemplo-01.php";

$resultado = somar(10,20);

echo $resultado;

//Caso esteja em pasta "anterior", utilizar .. para subir um diretório.

include "../include_test.php";
echo "<br>";
$resultado2 = somar1(20,20);

echo $resultado2;

//Caso esteja em uma pasta no mesmo diretório, nome da pasta e nome do arquivo

include "./inc/exemplo-01.php";
echo "<br>";
$resultado3 = somar2(30,20);

echo $resultado3;

//Diferença entre include e require
//require --> requer que arquivo exista e esteja funcionando corretamente normalmente. Se der erro ,vai dar erro fatal(apenas versões antigas do php).
//include --> tenta funcionar, mesmo que arquivo não exista ou tenha algum tipo de problema. Tem mais recursos, por exemplo include path, que caso arquivo não exista na mesma pasta irá na pasta padrão do "php".


//O require é "melhor", dado as verificações.
//Ideal utilizar o require_once para não duplicar funções.
?>
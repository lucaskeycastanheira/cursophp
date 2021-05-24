<?php
// = --> operador de atribuição
//= defini valores
$nome = "lucas";
//. --> concatenação
echo $nome . " é lindo";

//Utilizar ".=" irá fazer considerar o valor anterior da variável e acrescer de algo definido após o =
echo "</br>";
$nome .="é esperto";

echo $nome;


/////////

$vltotal=0;

/*Ao utilizar += irei somar algo ao valor anterior da variável, 

caso seja -=, irá diminuir
*= irá aplicar multiplicação
/= irá aplicar divisão
%= irá aplicar divisão e mostrará o resto inteiro
**= irá aplicar expoente

*/ 
echo "<br>" . "Vl Inicial " . $vltotal;

$vltotal +=100;
echo "<br>" . "Soma " . $vltotal;

$vltotal -=5;
echo "<br>" . "Substração " . $vltotal;

$vltotal *=.45;
echo "<br>" . "Multiplicação " . $vltotal;

$vltotal /=3;
echo "<br>" . "Divisão " . $vltotal;

$vltotal %=3;
echo "<br>" . "Resto inteiro " . $vltotal;

$vltotal **=2;
echo "<br>" . "Exponenciação " . $vltotal;
?>
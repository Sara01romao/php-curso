<?php


//Declarar variáveis

$nome = "Sol";

$idade = 1000;

echo $idade;
echo "<br>";

/*************************************************************************/

//concatenar

echo $nome . $idade;
echo "<br>";
//ou

echo $nome." ".$idade;
echo "<br>";

//aspas duplas junta variáveis e texto
echo "Nome: $nome e idade $idade";
echo "<br>";
echo "<br>";


/*************************************************************************/


//Arrays

$frutas = ['uva', 'limão', 'goiaba'];

echo $frutas[0];
echo "<br>";
echo "<br>";

//array Spread (7.4)
$frutas2 = [...$frutas, 'caqui'];

echo $frutas2[3];
echo "<br>";

print_r($frutas2); //ver itens no array




?>
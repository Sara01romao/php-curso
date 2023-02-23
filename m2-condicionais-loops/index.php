<?php


//IF e ELSE

$idade = 5;


if($idade >=18){
    echo "Maior de idade";

}else{
    echo "Menor de idade";
}

echo "<br>";


//TERNÁRIO CONDICIONAL - (condição)?resultado positivo : resutado negativo

echo ($idade < 18) ? "Sim" : "Não";

echo "<br>";


//NULL CAO(7.4) CONDICIONAL 

$nome = "Sara ";
$sobrenome = "Santos";


$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;
echo "<br>";

//Switch

$tipo = 'texto';

switch($tipo){
    case 'foto':
        echo "Exibindo foto";
        break;
    case 'texto':
         echo "Exibindo foto";
         break;
}
echo "<br>";
/*-------------------------------------------------------------- */

//LOOPS

$numero = 5;

while($numero < 8){
    echo $numero;
    echo "<br>";

    $numero += 1;


}




?>
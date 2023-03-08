<?php

function subsequente(){
    for($i=0; $i < 5; $i++){
        echo $i."<br/>";
    }
}


subsequente();


//parametros

function somar($num1, $num2){

    $total = $num1 + $num2;

    return $total;

}

$soma = somar(10, 2);//argumentos

echo "Total: $soma";

echo "<br>";
echo "<br>";



//pametros opcionais - valor padrão, caso não receba outro valor

function soma2($n1, $n2, $n3=0){
    return $n1 + $n2 +$n3;
}

$soma2Resultado= soma2(1, 2);
echo $soma2Resultado;

?>
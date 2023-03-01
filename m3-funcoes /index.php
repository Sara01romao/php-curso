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


?>
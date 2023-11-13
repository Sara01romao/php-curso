<?php


//timestamps

echo time();//retorn o tempo de agora

echo '<br>';

echo strtotime("2020-02-21");

echo '<br>';

echo date("d/m/y");


//Mostrar a data atual em timestamp

echo "<p>Data atual em timestamp: ". time() ."</p>";


//Transformar timestamp em data atual 

echo "<p>Data atual em timestamp: ". date("d/m/Y", time() )."</p>";


//transformar data atual em timestamp
echo "<p>Data atual em timestamp: ". strtotime("2021-01-02") ."</p>";


//Somar 100 dias em uma data
$data = "2021-01-10";
$nova_data = strtotime($data) + (86400*100);

echo "<p>Data atual em timestamp: ". date("d/m/Y", $nova_data )."</p>";


//Subtrair 10 dias em uma data

$data = "2021-01-10";
$nova_data = strtotime($data) - (86400*10);

echo "<p>Data atual em timestamp: ". date("d/m/Y", $nova_data )."</p>";

//Convertendo o timestamp pro banco de dados 
echo "<p>Data atual em timestamp: ". date("Y-m-d H:i:s", time()) . "</p>";


//Descobrir dia da semana de uma data

echo "<p>Data atual em timestamp: ". date("D") . "</p>";






?>
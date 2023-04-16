<?php
//doc https://www.php.net/manual/en/function.date.php

//echo time();

echo date('d/m/Y H:i:s'); //data e hora(horário do servidor)
echo '<br>';

//data salva sempre salva no padrão americano 

echo date('y-m-d');
echo '<br>';


//formatar data para Brasil
$data = '2020-01-17';

$time = strtotime($data);

echo date('d/ m/ y', $time);

echo '<br>';

//versão curta
echo date('d/m/y', strtotime($data));


?>
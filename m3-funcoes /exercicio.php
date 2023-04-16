<?php
//Criar uma função que recebe uma data internacional, converter para o portugues o dia da semana.

$data = '2023-04-17';


function diaSemana($data){
  $semana_dias= ['Domingo','Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado' ]; 
  $dia = date('w', strtotime($data));

  echo($semana_dias[$dia]);
}


diaSemana($data);


?>
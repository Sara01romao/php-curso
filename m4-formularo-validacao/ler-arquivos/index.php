<?php

$texto =file_get_contents('texto.txt'); //pega texto do arquivo, pode usar url também

$texto .= "\n Sara";

file_put_contents('texto.txt', $texto); //se o arquivo não existir ele cria, se existir ele substitui 



echo $texto;


?>
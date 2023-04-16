<?php

$nome = filter_input(INPUT_POST, 'nome');



if($nome){
    echo $nome;
}else{
    //echo 'Não enviou';

    //redireciona para home, fazer antes do envio de qualquer informação

    header("Location: index.php");
    
    //cancelar a execução restante do código
    exit

}




?>
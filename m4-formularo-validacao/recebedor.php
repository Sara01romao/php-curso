<?php

$nome = filter_input(INPUT_POST, 'nome',  FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);//limpa informação pegando só número inteiro
//ou
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_NUMBER_INT);//valida se o numeor é inteiro

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //valida email



$sobrenome = 'Santos';

filter_var($sobrenome) //validar informação


echo $email;

if($nome){
    echo $nome;
}else{
    //echo 'Não enviou';

    //redireciona para home, fazer antes do envio de qualquer informação
    header("Location: index.php");
    
    //cancelar a execução restante do código
    exit;

}




?>
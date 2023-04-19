<?php

session_start();//salva informações para usar na página html


$nome = filter_input(INPUT_POST, 'nome',  FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //valida email
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT); //valida email




if($nome){
    //o cookie deve ser setado antes de aparecer qualquer coisa na tela
    setcookie('nome', $nome, time()+ (89400 * 30));//nome, valor salvo, quando ele acaba

    echo $nome;
    echo $email;
}else{
    $_SESSION['aviso']= 'Preencha os campos corretamente!';
    //echo 'Não enviou';

    //redireciona para home, fazer antes do envio de qualquer informação
    header("Location: index.php");
    
    //cancelar a execução restante do código
    exit;

}




?>
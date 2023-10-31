
<?php

$host = "localhost";
$db = "clientes";
$user = "root";
$pass= "";



$mysqli= new mysqli($host, $user, $pass, $db);

if($mysqli -> connect_errno){
    die("Falha na conexão com o banco de dados");
}



//formatar data nascimento e telefone

function formatar_data($data){
    return implode('/', array_reverse(explode('-', $data)));
}

function formatar_telefone($telefone){
    
    $ddd = substr($telefone, 0, 2); //começa no 0 até o dois
    $parte1 = substr($telefone, 2, 5);;//do 2 ate o 5
    $parte2= substr($telefone, 7);//7 em diante
    return "($ddd) $parte1 - $parte2";

}


?>
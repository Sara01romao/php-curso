<?php

echo '<pre>';

print_r($_FILES);

$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

//$nome = $_FILES['arquivo']['name'];


if(in_array($_FILES['arquivo']['type'], $permitidos)){
    $nome =md5(time().rand(0, 1000)).'.png';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' .$nome); //onde o arquivo esta no lugar temporario e onde ele deve ficar salvo.


}else{
    echo 'Arquivo não permitido!';
}


?>



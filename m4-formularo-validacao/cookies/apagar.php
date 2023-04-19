<?php

setcookie('nome', '', time() - 3600);//para apagar tem que colocar tempo no passado



header("Location: index.php");
    
    //cancelar a execução restante do código
    exit;

?>
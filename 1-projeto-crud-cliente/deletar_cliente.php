<?php

include('conexao.php');

//formatar id, para evitar ataque
$id = intval($_GET['id']);

echo $id;

// var_dump($_POST);

if(isset($_POST['confirmar'])){
     
    $sql_code = "DELETE FROM clientes WHERE id = '$id'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
   
    //confere o retorno true or false 
    if($sql_query){?>

         <h1>Cliente Removido</h1>
         <a href="clientes.php">Voltar para lista</a>

         <?php
         die();

    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
   <h1>Tem certeza que deseja deletar este cliente?</h1>

   <a href="./clientes.php">Não</a>

   <form action="" method="post">

       <button type="submit" name="confirmar" value="1" type="submit" >Sim</button>
   </form>

</body>
</html>
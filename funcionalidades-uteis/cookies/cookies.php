
<?php

if(isset($_POST['nome'])){
    echo "Bem vindo:". $_POST['nome'];

    $venc= time() + (30 * 34 * 60 *60); //cookee fica por 30 dias
    setcookie("nome", $_POST['nome'], $venc);

     header("Location: boasvindas.php");
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

   



<form action="" method="post">
                    <p>Qual é o seu nome?</p>
                    <input type="text" name="nome">
                    <button type="submit">Enviar</button>
                </form>
</body>
</html>
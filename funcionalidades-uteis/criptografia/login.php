
<?php


if(isset($_POST['email'])){
    
    include 'conexao.php';

    $email = $_POST['email'];
    $senha =  $_POST['senha'];
    
    
    $sql_code = "SELECT * FROM  senhas WHERE  email = '$email'";

    $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);


    //para cada usuario que tiver o email verificar 

  $usuario = $sql_exec->fetch_assoc();

    if(password_verify($senha, $usuario['senha'])){

        if(!isset($_SESSION)){
            session_start();

            $_SESSION['usuario'] = $usuario;

            header("Location: index.php");

            // echo "Usuario logado!";
        }
       
    }else{
        echo "Falha ao logar! Senha ou e-mail incorretos";
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
    
    <form action="login.php" method="post">
        <h1>Login</h1>
        <input type="text" name="email"><br><br>
        <input type="text" name="senha"><br><br>

        <button type="submit">Logar</button>
    </form>

</body>
</html>
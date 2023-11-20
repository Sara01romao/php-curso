<?php
if(isset($_POST['email'])){

  include('conexao.php');

  $email = $_POST['email'];
  $senha =  password_hash($_POST['senha'], PASSWORD_DEFAULT);   

  $mysqli -> query("INSERT INTO senhas (email, senha) VALUE ('$email','$senha')");


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
    
    <form action="index.php" method="post">
        <input type="text" name="email"><br><br>
        <input type="text" name="senha">
        <button type="submit">Cadastrar Senha</button>
    </form>

</body>
</html>
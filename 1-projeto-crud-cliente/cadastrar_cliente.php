<?php



//verifica se tem informações
if(count($_POST) > 0){
    //var_dump($_POST); 

    $erro = false;

    include('conexao.php');


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento= $_POST['nascimento'];
    $telefone= $_POST['telefone'];



    function limpar_texto($str){
        return preg_replace("/[^0-9]/", "", $str);

    }


    if(empty($nome)){
        $erro = "Preencha o nome";
    }

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erro = "Preencha o email";
    }

    if(!empty($nascimento)){
        
       $pedacos = explode('/', $nascimento);

       if(count($pedacos) == 3){
            $nascimento= implode ('-', array_reverse($pedacos));
            
       }else{
          $erro = "A data de nascimento deve seguir o padrão dia/mes/ano";
       }

    }

    if(!empty($telefone)){
        

        $telefone = limpar_texto($telefone);
        if(strlen($telefone) != 11){
            $erro = " O telefone deve ser preenchido no padrão (00) 00000-0000";
        }
    }

    if($erro){
        echo "<p style='color:red;'><b>$erro</b></p>";

    }else{
         
        $sql_code = "INSERT INTO clientes (nome, email, telefone, data_nascimento, data_cadastro)
          VALUE ('$nome', '$email', '$telefone', '$nascimento', NOW())";

          $deu_certo = $mysqli -> query($sql_code) or die($mysqli -> error);

          if($deu_certo){
            echo "<p><b>Cliente cadastrado com sucesso!</b></p>";

            unset($_POST); //limpar var
          }

        ;


    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    
   
    <a href="./clientes.php">Voltar Lista</a>
    

    <h1>Cadastrar Cliente</h1>

    <form action="" method="post">
        <div class="input-content">
            <label for="nome">Nome</label>
            <input type="text" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" name="nome">
        </div>

        <div class="input-content">
            <label for="email">Email</label>
            <input type="text" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" name="email">
        </div>
        
        <div class="input-content">
            <label for="nascimento">Data de Nascimento</label>
            <input type="text" value="<?php if(isset($_POST['nascimento'])) echo $_POST['nascimento']; ?>" name="nascimento">
        </div>

        <div class="input-content">
            <label for="telefone">Telefone</label>
            <input type="text" value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>" name="telefone">
        </div>

        <button class="submit">Salvar</button>
    </form>
</body>
</html>
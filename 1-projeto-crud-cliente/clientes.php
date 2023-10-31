<?php

include('conexao.php');


$sql_clientes = "SELECT * FROM clientes";

$query_clientes = $mysqli->query($sql_clientes) or die($mysqli -> error);


//verificar quantos clientes existem 

$num_clientes = $query_clientes-> num_rows;

echo $num_clientes. "fdsffd";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cliente</title>
</head>
<body>
    
    <h1>Lista de Clientes</h1>

    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Nascimento</th>
            <th>Data cadastrado</th>
            <th>Ações</th>
        </thead>
        <tbody>

            <?php
                if($num_clientes == 0){ ?>
                  <tr>
                    <td colspan="7">Nenhum cliente foi cadastrado</td>
                  </tr>          
            <?php } else{
                  
                   while($cliente = $query_clientes -> fetch_assoc()){

                    //formatar o telefone para mostrar
                    $telefone = "Não informado.";
                    if(!empty($cliente['telefone'])){
                        $telefone = formatar_telefone($cliente['telefone']);
                    }


                    //formatar data

                    $nascimento = "Não informado";

                    if(!empty($cliente['data_nascimento'])){
                        $nascimento = formatar_data($cliente['data_nascimento']);
                    }

                    //formata datetime

                    $data_cadastro = date("d/m/Y H:i", strtotime($cliente['data_cadastro']));
                ?>
            <tr>
                
                <td><?php echo $cliente['id']; ?></td>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['email']; ?></td>
                <td><?php echo $telefone; ?></td>
                <td><?php echo $nascimento ; ?></td>
                <td><?php echo $data_cadastro; ?></td>
                <td>
                    <a href="editar_cliente.php?id=<?php echo $cliente['id']; ?>">Editar</a>
                    <a href="deletar_cliente.php?id=<?php echo $cliente['id']; ?>">Deletar</a>
                </td>
                
            </tr>

            <?php } 
             } ?>
        </tbody>
    </table>


    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
</style>
</body>
</html>